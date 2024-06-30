<?php

declare(strict_types=1);

/*
 * This file belongs to the package "TYPO3 Fluid".
 * See LICENSE.txt that was shipped with this package.
 */

namespace TYPO3Fluid\FluidDocumentation;

use Composer\Autoload\ClassLoader;
use JsonSchema\Validator;
use TYPO3Fluid\Fluid\Schema\ViewHelperFinder;
use TYPO3Fluid\Fluid\Schema\ViewHelperMetadata;

/**
 * @internal
 */
final class ConsoleRunner
{
    private const SCHEMA_FILE = __DIR__ . '/Config.schema.json';

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

    public function handleGenerateCommand(array $configFiles, ClassLoader $autoloader): string
    {

        $config = [];
        foreach ($configFiles as $file) {
            $config[$file] = json_decode(file_get_contents($file));

            $validator = new Validator;
            $validator->validate($config[$file], (object)['$ref' => 'file://' . self::SCHEMA_FILE]);
            if (!$validator->isValid()) {
                throw new \InvalidArgumentException(
                    'Invalid config file provided: ' . $file . "\n" .
                    implode("\n", array_map(fn ($error) => $error['message'], $validator->getErrors()))
                );
            }
        }

        $outDir = './fluidDocumentationOutput/';
        if (!file_exists($outDir)) {
            mkdir($outDir, recursive: true);
        }

        $viewHelperFinder = new ViewHelperFinder();
        $viewHelpers = $viewHelperFinder->findViewHelpersInComposerProject($autoloader);

        $groupedViewHelpers = [];
        foreach ($viewHelpers as $viewHelper) {
            $groupedViewHelpers[$viewHelper->xmlNamespace] ??= [];
            $groupedViewHelpers[$viewHelper->xmlNamespace][$viewHelper->tagName] = $viewHelper;
        }

        foreach ($config as $filename => $content) {
            $content->includesNamespaces ??= [$content->targetNamespace];

            // Combine multiple xml namespaces to one
            $content->viewHelpers = [];
            foreach ($content->includesNamespaces as $xmlNamespace) {
                $content->viewHelpers = array_merge(
                    $content->viewHelpers,
                    $groupedViewHelpers[$xmlNamespace] ?? [],
                );
            }

            $content->viewHelpers = array_map(
                $this->extractRawViewHelperData(...),
                $content->viewHelpers,
            );

            file_put_contents($outDir . basename($filename), json_encode($content));
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
