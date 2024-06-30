<?php

declare(strict_types=1);

/*
 * This file belongs to the package "TYPO3 Fluid".
 * See LICENSE.txt that was shipped with this package.
 */

namespace TYPO3Fluid\FluidDocumentation;

use Composer\Autoload\ClassLoader;
use TYPO3Fluid\Fluid\Schema\ViewHelperFinder;
use TYPO3Fluid\Fluid\Schema\ViewHelperMetadata;

/**
 * @internal
 */
final class ConsoleRunner
{
    private $config = [
        [
            'label' => 'Global (f:*)',
            'targetNamespace' => 'http://typo3.org/ns/TYPO3/CMS/Fluid/ViewHelpers',
            'filename' => 'viewhelpers_global.json',
            'includes' => [
                'http://typo3.org/ns/TYPO3Fluid/Fluid/ViewHelpers',
                'http://typo3.org/ns/TYPO3/CMS/Fluid/ViewHelpers',
            ],
        ],
        [
            'label' => 'Backend (be:*)',
            'targetNamespace' => 'http://typo3.org/ns/TYPO3/CMS/Backend/ViewHelpers',
            'filename' => 'viewhelpers_backend.json',
        ],
    ];

    /**
     * @param string[] $arguments
     */
    public function handleCommand(array $arguments, ClassLoader $autoloader): string
    {
        array_shift($arguments);
        $command = array_shift($arguments) ?? 'help';

        switch ($command) {
            case 'generate':
                return $this->handleGenerateCommand($arguments, $autoloader);

            case 'help':
                return $this->handleHelpCommand();

            default:
                throw new \InvalidArgumentException('The command ' . $command . ' is not supported.');
        }
    }

    public function handleHelpCommand(): string
    {
        return 'TODO help text';
    }

    public function handleGenerateCommand(array $arguments, ClassLoader $autoloader): string
    {
        $viewHelperFinder = new ViewHelperFinder();
        $viewHelpers = $viewHelperFinder->findViewHelpersInComposerProject($autoloader);

        $groupedViewHelpers = [];
        foreach ($viewHelpers as $viewHelper) {
            $groupedViewHelpers[$viewHelper->xmlNamespace] ??= [];
            $groupedViewHelpers[$viewHelper->xmlNamespace][$viewHelper->tagName] = $viewHelper;
        }

        foreach ($this->config as $namespaceFile) {
            $namespaceFile['includes'] ??= [$namespaceFile['targetNamespace']];

            // Combine multiple xml namespaces to one
            $namespaceFile['viewHelpers'] = [];
            foreach ($namespaceFile['includes'] as $xmlNamespace) {
                $namespaceFile['viewHelpers'] = array_merge(
                    $namespaceFile['viewHelpers'],
                    $groupedViewHelpers[$xmlNamespace] ?? [],
                );
            }

            $namespaceFile['viewHelpers'] = array_map(
                $this->extractRawViewHelperData(...),
                $namespaceFile['viewHelpers']
            );

            file_put_contents($namespaceFile['filename'], json_encode($namespaceFile));
        }
        return '';
    }

    public function extractRawViewHelperData(ViewHelperMetadata $viewHelperMetadata): array
    {
        $data = get_object_vars($viewHelperMetadata);
        foreach ($viewHelperMetadata->argumentDefinitions as $definition) {
            $data['argumentDefinitions'][$definition->getName()] = [
                'name' => $definition->getName(),
                'type' => $definition->getType(),
                'description' => $definition->getDescription(),
                'required' => $definition->isRequired(),
                'defaultValue' => $definition->getDefaultValue(),
                'escape' => $definition->getEscape(),
            ];
        }
        return $data;
    }
}
