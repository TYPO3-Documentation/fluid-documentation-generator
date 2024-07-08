<?php

declare(strict_types=1);

/*
 * This file belongs to the package "Fluid Documentation Generator".
 * See LICENSE.txt that was shipped with this package.
 */

namespace T3Docs\FluidDocumentationGenerator;

use Composer\Autoload\ClassLoader;
use FilesystemIterator;
use JsonSchema\Validator;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use TYPO3Fluid\Fluid\Schema\ViewHelperFinder;
use TYPO3Fluid\Fluid\Schema\ViewHelperMetadata;
use TYPO3Fluid\Fluid\View\TemplateView;

/**
 * @internal
 */
final class ConsoleRunner
{
    private const DEFAULT_OUTPUT_DIR = './fluidDocumentationOutput';
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
        return <<< HELP
----------------------------------------------------------------------------------------------
                      Fluid Documentation Generator: Help text
----------------------------------------------------------------------------------------------

Supported commands:

    bin/fluidDocumentation help        # Show this help screen
    bin/fluidDocumentation generate    # Generates documentation in RST format based on
                                       # supplied configuration files and available ViewHelpers
                                       # in the project and writes the result into a new folder
                                       # named "fluidDocumentationOutput"

Example usage:

    bin/fluidDocumentation generate config/my_viewhelpers.json config/other_viewhelpers.json

The supplied config files must respect the provided JSON Schema located in
src/Config.schema.json.

Note that the technical implementation uses composer's autoloader to find ViewHelper classes
in the current project, which means that this command only works in an installed composer
project.
HELP;
    }

    /**
     * @param string[] $configFiles
     */
    public function handleGenerateCommand(array $configFiles, ClassLoader $autoloader): string
    {
        $packages = [];
        foreach ($configFiles as $file) {
            $packages[$file] = $this->createPackageFromConfigFile($file);
        }

        if (count($packages) === 0) {
            return 'Nothing to do';
        }

        $this->cleanupOutputDir();

        $viewHelperFinder = new ViewHelperFinder();
        $viewHelpers = $viewHelperFinder->findViewHelpersInComposerProject($autoloader);

        $groupedViewHelpers = [];
        foreach ($viewHelpers as $viewHelper) {
            $groupedViewHelpers[$viewHelper->xmlNamespace] ??= [];
            $groupedViewHelpers[$viewHelper->xmlNamespace][$viewHelper->tagName] = $viewHelper;
        }

        foreach ($packages as $package) {
            // Combine multiple xml namespaces to one
            $mergedViewHelpers = [];
            foreach ($package->includesNamespaces as $xmlNamespace) {
                $mergedViewHelpers = array_merge(
                    $mergedViewHelpers,
                    $groupedViewHelpers[$xmlNamespace] ?? [],
                );
            }
            ksort($mergedViewHelpers);

            // Extract ViewHelper arguments and convert to stdClass
            $package->viewHelpers = array_map(
                fn(ViewHelperMetadata $metadata) => new ViewHelper($metadata),
                $mergedViewHelpers,
            );

            // Generate documentation URIs
            $package->uri = $package->name . '/Index';
            foreach ($package->viewHelpers as $viewHelper) {
                $viewHelper->uri = $package->name . '/' . str_replace('\\', '/', $viewHelper->nameWithoutSuffix);
            }

            // Collect nested index pages both for root ViewHelpers (directly in namespace)
            // and for grouped ViewHelpers (like format.*)
            $indexPages = [
                $package->uri => [],
            ];
            foreach ($package->viewHelpers as $viewHelper) {
                $parts = explode('\\', $viewHelper->nameWithoutSuffix);
                $subgroupUri = $package->uri;
                for ($i = 0; $i < count($parts) - 1; $i++) {
                    $subgroupUri = $package->name . '/' . implode('/', array_slice($parts, 0, $i + 1)) . '/Index';
                    $indexPages[$subgroupUri] ??= [];
                }
                $indexPages[$subgroupUri][] = $viewHelper;
            }

            // Generate index page for namespace with root ViewHelpers
            $rootViewHelpers = array_shift($indexPages);
            $this->renderGroupDocumentation(
                '../',
                $package->uri,
                $package->label,
                $rootViewHelpers,
                $package->templates['namespace'],
            );

            // Generate index page for grouped ViewHelpers
            foreach ($indexPages as $uri => $viewHelpers) {
                $this->renderGroupDocumentation(
                    str_repeat('../', substr_count($uri, '/')),
                    $uri,
                    basename(dirname($uri)),
                    $viewHelpers,
                    $package->templates['group'],
                );
            }

            foreach ($package->viewHelpers as $viewHelper) {
                $this->renderViewHelperDocumentation(
                    $package,
                    $viewHelper,
                    $package->templates['viewHelper'],
                );
            }

            // Write JSON file with ViewHelper definitions
            $this->writeFile($this->getOutputDir() . $package->name . '.json', json_encode($package, JSON_THROW_ON_ERROR));
        }

        $this->renderRootDocumentation($packages);

        return '';
    }

    private function renderViewHelperDocumentation(ViewHelperPackage $package, ViewHelper $viewHelper, string $templateFile): void
    {
        $sourceEdit = $package->sourceEdit[$viewHelper->metadata->xmlNamespace] ?? null;

        $headlineIdentifierPrefix = $package->headlineIdentifierPrefix[$viewHelper->metadata->xmlNamespace]
            ?? str_replace(['.', "'", '/', '\\'], '-', strtolower($viewHelper->namespaceWithoutSuffix));
        $headlineIdentifier = sprintf('%s-%s', $headlineIdentifierPrefix, str_replace(['.', "'", '/', '\\'], '-', strtolower($viewHelper->nameWithoutSuffix)));

        $view = $this->createView($templateFile);
        $view->assignMultiple([
            'viewHelper' => $viewHelper,
            'package' => $package,

            'headline' => sprintf('%s ViewHelper `<%s:%s>`', ucfirst($viewHelper->metadata->tagName), $package->namespaceAlias, $viewHelper->metadata->tagName),
            'headlineIdentifier' => $headlineIdentifier,
            'viewHelperName' => $viewHelper->metadata->tagName,
            'source' => isset($sourceEdit->sourcePrefix) ? $sourceEdit->sourcePrefix . str_replace('\\', '/', $viewHelper->metadata->name) . '.php' : '',
            'sourceEdit' => isset($sourceEdit->editPrefix) ? $sourceEdit->editPrefix . str_replace('\\', '/', $viewHelper->metadata->name) . '.php' : '',
            'jsonFile' => str_repeat('../', substr_count($viewHelper->uri, '/')) . $package->name . '.json',
        ]);
        $this->writeFile($this->getOutputDir() . $viewHelper->uri . '.rst', $view->render());
    }

    /**
     * @param ViewHelper[] $viewHelpers
     */
    private function renderGroupDocumentation(
        string $pathToRoot,
        string $uri,
        string $headline,
        array $viewHelpers,
        string $templateFile,
    ): void {
        $view = $this->createView($templateFile);
        $view->assignMultiple([
            'tocTree' => array_map(fn($viewHelper) => $pathToRoot . $viewHelper->uri, $viewHelpers),
            'headline' => $headline,
        ]);
        $this->writeFile($this->getOutputDir() . $uri . '.rst', $view->render());
    }

    /**
     * @param ViewHelperPackage[] $packages
     */
    private function renderRootDocumentation(array $packages): void
    {
        $firstPackage = reset($packages);
        if (!$firstPackage) {
            return;
        }

        $view = $this->createView($firstPackage->templates['root']);
        $view->assign('tocTree', array_map(fn($package) => $package->uri, $packages));
        $this->writeFile($this->getOutputDir() . 'Index.rst', $view->render());
    }

    private function createView(string $templateFile): TemplateView
    {
        $view = new TemplateView();
        $view->getViewHelperResolver()->addNamespace('d', 'T3Docs\\FluidDocumentationGenerator\\ViewHelpers');
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

    public function cleanupOutputDir(): void
    {
        if (!file_exists($this->getOutputDir())) {
            return;
        }

        $di = new RecursiveDirectoryIterator($this->getOutputDir(), FilesystemIterator::SKIP_DOTS);
        $ri = new RecursiveIteratorIterator($di, RecursiveIteratorIterator::CHILD_FIRST);
        foreach ($ri as $file) {
            // Make phpstan happy
            if (!$file instanceof \SplFileInfo) {
                continue;
            }

            if ($file->isDir()) {
                rmdir((string)$file);
            } else {
                unlink((string)$file);
            }
        }
    }

    public function getOutputDir(): string
    {
        return rtrim((string)(getenv('FLUID_DOCUMENTATION_OUTPUT_DIR') ?: self::DEFAULT_OUTPUT_DIR), '/') . '/';
    }

    private function createPackageFromConfigFile(string $filePath): ViewHelperPackage
    {
        // Read file
        $config = json_decode((string)file_get_contents($filePath), flags: JSON_THROW_ON_ERROR);

        // Validate against JSON schema
        $validator = new Validator();
        $validator->validate($config, (object)['$ref' => 'file://' . self::SCHEMA_FILE]);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException(
                'Invalid config file provided: ' . $filePath . "\n" .
                implode("\n", array_map(fn($error) => $error['message'], $validator->getErrors())),
            );
        }

        $configPath = dirname($filePath);

        return new ViewHelperPackage(
            name: $config->name,
            label: $config->label ?? $config->name,
            namespaceAlias: $config->namespaceAlias,
            targetNamespace: $config->targetNamespace,
            includesNamespaces: $config->includesNamespaces ?? [$config->targetNamespace],
            templates: [
                ...self::DEFAULT_TEMPLATES,
                ...array_map(fn($path) => $this->preparePath($path, $configPath), (array)($config->templates ?? [])),
            ],
            sourceEdit: isset($config->sourceEdit) ? (array)$config->sourceEdit : null,
            headlineIdentifierPrefix: isset($config->headlineIdentifierPrefix) ? (array)$config->headlineIdentifierPrefix : null,
        );
    }

    private function preparePath(string $path, string $relativeTo): string
    {
        if (str_starts_with($path, '/')) {
            return $path;
        }
        return realpath($relativeTo . '/' . $path) ?: $path;
    }
}
