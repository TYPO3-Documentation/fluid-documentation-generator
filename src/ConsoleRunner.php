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
use TYPO3Fluid\Fluid\View\TemplateView;

/**
 * @internal
 */
final class ConsoleRunner
{
    private const OUTPUT_DIR = './fluidDocumentationOutput/';
    private const SCHEMA_FILE = __DIR__ . '/Config.schema.json';
    private const DEFAULT_TEMPLATES = [
        'root' => __DIR__ . '/../templates/typo3/Root.rst',
        'namespace' => __DIR__ . '/../templates/typo3/Namespace.rst',
        'group' => __DIR__ . '/../templates/typo3/Group.rst',
        'viewHelper' => __DIR__ . '/../templates/typo3/ViewHelper.rst',
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

    public function handleGenerateCommand(array $configFiles, ClassLoader $autoloader): string
    {
        $config = [];
        foreach ($configFiles as $file) {
            $config[$file] = $this->sanitizeConfiguration($file);
        }

        if (count($config) === 0) {
            return 'Nothing to do';
        }

        $viewHelperFinder = new ViewHelperFinder();
        $viewHelpers = $viewHelperFinder->findViewHelpersInComposerProject($autoloader);

        $groupedViewHelpers = [];
        foreach ($viewHelpers as $viewHelper) {
            $groupedViewHelpers[$viewHelper->xmlNamespace] ??= [];
            $groupedViewHelpers[$viewHelper->xmlNamespace][$viewHelper->tagName] = $viewHelper;
        }

        foreach ($config as $content) {
            // Combine multiple xml namespaces to one
            $content->viewHelpers = [];
            foreach ($content->includesNamespaces as $xmlNamespace) {
                $content->viewHelpers = array_merge(
                    $content->viewHelpers,
                    $groupedViewHelpers[$xmlNamespace] ?? [],
                );
            }

            // Extract ViewHelper arguments and convert to stdClass
            $content->viewHelpers = array_map(
                $this->extractRawViewHelperData(...),
                $content->viewHelpers,
            );

            // Generate documentation URIs
            $content->uri = $content->name . '/Index';
            foreach ($content->viewHelpers as $viewHelper) {
                $viewHelper->uri = $content->name . '/' . str_replace('\\', '/', $viewHelper->nameWithoutSuffix);
            }

            // Collect nested index pages both for root ViewHelpers (directly in namespace)
            // and for grouped ViewHelpers (like format.*)
            $indexPages = [
                $content->uri => []
            ];
            foreach ($content->viewHelpers as $viewHelper) {
                $parts = explode('\\', $viewHelper->nameWithoutSuffix);
                $subgroupUri = $content->uri;
                for ($i = 0; $i < count($parts) - 1; $i++) {
                    $subgroupUri = $content->name . '/' . implode('/', array_slice($parts, 0, $i + 1)) . '/Index';
                    $indexPages[$subgroupUri] ??= [];
                }
                $indexPages[$subgroupUri][] = $viewHelper;
            }

            // Generate index page for namespace with root ViewHelpers
            $rootViewHelpers = array_shift($indexPages);
            $this->renderGroupDocumentation(
                '../',
                $content->uri,
                $content->label,
                $rootViewHelpers,
                $content->templates['namespace']
            );

            // Generate index page for grouped ViewHelpers
            foreach ($indexPages as $uri => $viewHelpers) {
                $this->renderGroupDocumentation(
                    str_repeat('../', substr_count($uri, '/')),
                    $uri,
                    dirname($uri),
                    $viewHelpers,
                    $content->templates['group']
                );
            }

            // Write JSON file with ViewHelper definitions
            $this->writeFile(self::OUTPUT_DIR . $content->name . '.json', json_encode($content));
        }

        $this->renderRootDocumentation($config);

        return '';
    }

    private function renderGroupDocumentation(
        string $pathToRoot,
        string $uri,
        string $headline,
        array $viewHelpers,
        string $templateFile
    ): void  {
        $view = $this->createView($templateFile);
        $view->assignMultiple([
            'tocTree' => array_map(fn ($viewHelper) => $pathToRoot . $viewHelper->uri, $viewHelpers),
            'headline' => $headline,
            'viewHelperCount' => count($viewHelpers),
        ]);
        $this->writeFile(self::OUTPUT_DIR . $uri . '.rst', $view->render());
    }

    private function renderRootDocumentation(array $config): void
    {
        $firstConfig = reset($config);
        $view = $this->createView($firstConfig->templates['root']);
        $view->assign('tocTree', array_map(fn ($content) => $content->uri, $config));
        $this->writeFile(self::OUTPUT_DIR . 'Index.rst', $view->render());
    }

    private function createView(string $templateFile): TemplateView
    {
        $view = new TemplateView();
        $view->getViewHelperResolver()->addNamespace('d', 'TYPO3Fluid\\FluidDocumentation\\ViewHelpers');
        $view->getTemplatePaths()->setTemplatePathAndFilename($templateFile);
        return $view;
    }

    private function writeFile(string $filePath, string $content): void
    {
        $dirName = dirname($filePath);
        if (!file_exists($dirName)) {
            mkdir($dirName, recursive: true);
        }
        file_put_contents($filePath, $content);
    }

    private function extractRawViewHelperData(ViewHelperMetadata $viewHelperMetadata): object
    {
        // Convert to stdClass to be able to add more information to it
        $raw = (object)get_object_vars($viewHelperMetadata);
        $raw->nameWithoutSuffix = preg_replace('#ViewHelper$#', '', $raw->name);
        foreach ($viewHelperMetadata->argumentDefinitions as $definition) {
            // Extract information from ArgumentDefinition objects
            $raw->argumentDefinitions[$definition->getName()] = (object)[
                'name' => $definition->getName(),
                'type' => $definition->getType(),
                'description' => $definition->getDescription(),
                'required' => $definition->isRequired(),
                'defaultValue' => $definition->getDefaultValue(),
                'escape' => $definition->getEscape(),
            ];
        }
        return $raw;
    }

    private function sanitizeConfiguration(string $filePath): object
    {
        // Read file
        $config = json_decode(file_get_contents($filePath));

        // Validate against JSON schema
        $validator = new Validator;
        $validator->validate($config, (object)['$ref' => 'file://' . self::SCHEMA_FILE]);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException(
                'Invalid config file provided: ' . $filePath . "\n" .
                implode("\n", array_map(fn ($error) => $error['message'], $validator->getErrors()))
            );
        }

        // Set default values
        $config->label ??= $config->name;
        $config->includesNamespaces ??= [$config->targetNamespace];
        $config->templates = array_merge(
            self::DEFAULT_TEMPLATES,
            isset($config->templates) ? get_object_vars($config->templates) : []
        );

        return $config;
    }
}
