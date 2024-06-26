<?php

declare(strict_types=1);

namespace NamelessCoder\FluidDocumentationGenerator\Export;

use NamelessCoder\FluidDocumentationGenerator\Data\DataFileResolver;
use NamelessCoder\FluidDocumentationGenerator\Entity\SchemaPackage;
use NamelessCoder\FluidDocumentationGenerator\Entity\SchemaVendor;
use NamelessCoder\FluidDocumentationGenerator\ProcessedSchema;
use NamelessCoder\FluidDocumentationGenerator\SchemaDocumentationGenerator;
use NamelessCoder\FluidDocumentationGenerator\ViewHelperDocumentation;
use NamelessCoder\FluidDocumentationGenerator\ViewHelperDocumentationGroup;
use TYPO3Fluid\Fluid\Core\Cache\SimpleFileCache;
use TYPO3Fluid\Fluid\View\TemplatePaths;
use TYPO3Fluid\Fluid\View\TemplateView;

class RstExporter implements ExporterInterface
{
    private readonly \TYPO3Fluid\Fluid\View\TemplateView $view;

    /**
     * intention level for toctree structures
     */
    private string $intend = '   ';

    public function __construct()
    {
        $resourcesDirectory = DataFileResolver::getInstance()->getResourcesDirectoryPath();
        $this->view = new TemplateView();
        $this->view->getRenderingContext()->setCache(new SimpleFileCache(DataFileResolver::getInstance()->getCacheDirectoryPath()));
        $this->view->getRenderingContext()->setTemplatePaths(new TemplatePaths(
            [
                TemplatePaths::CONFIG_TEMPLATEROOTPATHS => [$resourcesDirectory . 'templates' . DIRECTORY_SEPARATOR],
                TemplatePaths::CONFIG_LAYOUTROOTPATHS => [$resourcesDirectory . 'layouts' . DIRECTORY_SEPARATOR],
                TemplatePaths::CONFIG_PARTIALROOTPATHS => [$resourcesDirectory . 'partials' . DIRECTORY_SEPARATOR],
                TemplatePaths::CONFIG_FORMAT => 'rst',
            ]
        ));
    }

    public function getIdentifier(): string
    {
        return 'rst';
    }

    public function setGenerator(SchemaDocumentationGenerator $generator): void {}

    /**
     * @return ExporterInterface[]
     */
    public function createAdditionalViewHelperResources(ViewHelperDocumentation $viewHelperDocumentation, ?string $label = null): array
    {
        return [];
    }

    /**
     * @return ExporterInterface[]
     */
    public function createAdditionalSchemaResources(ProcessedSchema $schema, ?string $label = null): array
    {
        return [];
    }

    public function exportRoot(bool $forceUpdate = false): void
    {
        $resolver = DataFileResolver::getInstance();
        if (!$forceUpdate && file_exists($resolver->getPublicDirectoryPath() . 'Index.rst')) {
            return;
        }

        $vendors = $resolver->resolveInstalledVendors();
        // better to put the output together here, because fluid tends to mess up the empty lines
        // that are important to proper rst rendering
        $toctree = [];
        foreach ($vendors as $vendor) {
            foreach ($vendor->getPackages() as $package) {
                foreach ($package->getVersions() as $version) {
                    $toctree[] = $this->intend . $vendor->getVendorName() . '/' . $package->getPackageName() . '/' . $version->getVersion() . '/Index' . PHP_EOL;
                }
            }
        }

        $this->view->assign('tocTree', $toctree);
        $resolver->getWriter()->publishDataFile(
            'Index.rst',
            $this->view->render('Root')
        );
    }

    public function exportVendor(SchemaVendor $vendor): void
    {
        // not needed in this export
    }

    public function exportPackage(SchemaPackage $package): void
    {
        // not needed in this export
    }

    public function exportSchema(ProcessedSchema $processedSchema, bool $forceUpdate = false): void
    {
        $resolver = DataFileResolver::getInstance();
        if (!$forceUpdate && file_exists($resolver->getPublicDirectoryPath() . $processedSchema->getPath() . 'Index.rst')) {
            return;
        }

        $schema = $processedSchema->getSchema();
        $headline = $schema->getPackage()->getVendor()->getVendorName() . '/' . $schema->getPackage()->getPackageName();
        $headlineDecoration = array_pad([], strlen($headline), '=');
        $subGroupsCount = \count($processedSchema->getDocumentationTree()->getSubGroups());
        $viewHelpers = $processedSchema->getDocumentationTree()->getDocumentedViewHelpers();
        $this->view->assignMultiple([
            'headline' => $headline,
            'headlineDecoration' => implode('', $headlineDecoration),
            'rootPath' => '../../../',
            'subGroups' => $subGroupsCount,
            'viewHelpers' => \count($viewHelpers),
            'tocTree' => $this->getTocTree($viewHelpers, $subGroupsCount),
        ]);
        $resolver->getWriter()->publishDataFileForSchema(
            $processedSchema,
            'Index.rst',
            $this->view->render('Schema')
        );
    }

    public function exportViewHelper(ViewHelperDocumentation $viewHelperDocumentation, bool $forceUpdate = false): void
    {
        $resolver = DataFileResolver::getInstance();
        if (!$forceUpdate && file_exists($resolver->getPublicDirectoryPath() . $viewHelperDocumentation->getSchema()->getPath() . $viewHelperDocumentation->getPath() . '.rst')) {
            return;
        }

        $packageName = $viewHelperDocumentation->getSchema()->getSchema()->getPackage()->getPackageName();
        $package = match ($packageName) {
            'fluid' => 'f',
            'backend' => 'be',
            default => $packageName,
        };

        $path = $viewHelperDocumentation->getPath();
        $backPath = str_repeat('../', substr_count($path, '/'));
        $rootPath = $backPath . '../../../';

        $tagName = '<' . $package . ':' . $viewHelperDocumentation->getName() . '>';
        $headline = ucfirst($viewHelperDocumentation->getName()) . ' ViewHelper `' . $tagName . '`';
        $headlineDecoration = array_pad([], strlen($headline), '=');
        $namespace = array_filter(explode('/', $viewHelperDocumentation->getSchema()->getPath()));
        array_pop($namespace);
        $namespace = implode('/', $namespace);
        $headlineIdentifier = str_replace(['.', "'", '/'], '-', strtolower($namespace . '-' . $viewHelperDocumentation->getName()));
        $source = $this->getSourcePath($viewHelperDocumentation);

        $arguments = [];
        foreach ($viewHelperDocumentation->getArgumentDefinitions() as $argumentDefinition) {
            $argumentHeadline = trim($argumentDefinition->getName());
            $argumentHeadlineDecoration = array_pad([], strlen($argumentHeadline), '-');
            $argumentHeadlineIdentifier = strtolower($headlineIdentifier . '-' . $argumentHeadline);
            $argumentsData = [
                'headline' => $argumentHeadline,
                'headlineIdentifier' => $argumentHeadlineIdentifier,
                'headlineDecoration' => implode('', $argumentHeadlineDecoration),
                'package' => $package,
                'description' => ucfirst(trim($argumentDefinition->getDescription())),
                'dataType' => ($argumentDefinition->getType() === 'anySimpleType') ? 'mixed' : trim($argumentDefinition->getType()),
                'isRequired' => $argumentDefinition->isRequired(),
            ];

            $defaultValue = $argumentDefinition->getDefaultValue();
            if ($defaultValue !== 'NULL' && $defaultValue !== "''") {
                $argumentsData['default'] = trim(str_replace(PHP_EOL, '', (string) $defaultValue));
            }

            $arguments[] = $argumentsData;
        }

        $this->view->assignMultiple([
            'headline' => $headline,
            'headlineDecoration' => implode('', $headlineDecoration),
            'headlineIdentifier' => $headlineIdentifier,
            'source' => $source['source'],
            'sourceEdit' => $source['sourceEdit'],
            'phpFileName' => $source['phpFileName'],
            'namespace' => $source['namespace'],
            'namespace2' => sprintf('xmlns:%s="http://typo3.org/ns/%s"', $package, $source['namespaceUrl']),
            'namespace3' => sprintf('{namespace %s=%s}', $package, $source['namespace']),
            'package' => $package,
            'tagName' => $tagName,
            'rootPath' => $rootPath,
            'viewHelper' => $viewHelperDocumentation,
            'arguments' => $arguments,
        ]);
        $resolver->getWriter()->publishDataFileForSchema(
            $viewHelperDocumentation->getSchema(),
            $path . '.rst',
            $this->view->render('ViewHelper')
        );
    }

    public function exportViewHelperGroup(ViewHelperDocumentationGroup $viewHelperDocumentationGroup, bool $forceUpdate = false): void
    {
        $resolver = DataFileResolver::getInstance();
        if (!$forceUpdate && file_exists($resolver->getPublicDirectoryPath() . $viewHelperDocumentationGroup->getPath() . 'Index.rst')) {
            return;
        }

        $groupPath = $viewHelperDocumentationGroup->getPath() . DIRECTORY_SEPARATOR;
        $backPath = str_repeat('../', substr_count($groupPath, '/'));
        $rootPath = $backPath . '../../../';

        $headline = $viewHelperDocumentationGroup->getGroupId();
        $headlineDecoration = array_pad([], strlen($headline), '=');
        $viewHelpers = $viewHelperDocumentationGroup->getDocumentedViewHelpers();
        $subGroupsCount = \count($viewHelperDocumentationGroup->getSubGroups());
        $this->view->assignMultiple([
            'headline' => $headline,
            'headlineDecoration' => implode('', $headlineDecoration),
            'rootPath' => $rootPath,
            'viewHelpers' => \count($viewHelpers),
            'subGroups' => $subGroupsCount,
            'tocTree' => $this->getTocTree($viewHelpers, $subGroupsCount),
        ]);
        $resolver->getWriter()->publishDataFileForSchema(
            $viewHelperDocumentationGroup->getSchema(),
            $groupPath . 'Index.rst',
            $this->view->render('ViewHelperGroup')
        );
    }

    /**
     * @param ViewHelperDocumentation[] $viewHelpers
     * @return string[]
     */
    protected function getTocTree(array $viewHelpers, int $subGroupsCount): array
    {
        $toctree = [];
        if ($subGroupsCount > 0) {
            $toctree[] = $this->intend . '*/Index' . PHP_EOL;
        }

        foreach ($viewHelpers as $viewHelper) {
            $toctree[] = $this->intend . $viewHelper->getLocalName() . PHP_EOL;
        }

        return $toctree;
    }

    /**
     * @return array<string, string>
     */
    public function getSourcePath(ViewHelperDocumentation $viewHelperDocumentation): array
    {
        $sourcePath = $viewHelperDocumentation->getSchema()->getPath();
        $sourceEditPath = '';
        switch ($sourcePath) {
            case 'typo3/backend/latest/':
                $sourcePath = 'https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/';
                $sourceEditPath = 'https://github.com/TYPO3/typo3/edit/main/typo3/sysext/backend/Classes/ViewHelpers/';
                $namespace = 'TYPO3\\CMS\\Backend\\ViewHelpers\\';
                break;
            case 'typo3/core/latest/':
                $sourcePath = 'https://github.com/TYPO3/typo3/blob/main/typo3/sysext/core/Classes/ViewHelpers/';
                $sourceEditPath = 'https://github.com/TYPO3/typo3/edit/main/typo3/sysext/core/Classes/ViewHelpers/';
                $namespace = 'TYPO3\\CMS\\Core\\ViewHelpers\\';
                break;
            case 'typo3/fluid/latest/':
                $sourcePath = 'https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/';
                $sourceEditPath = 'https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/';
                $namespace = 'TYPO3\\CMS\\Fluid\\ViewHelpers\\';
                break;
            case 'typo3fluid/fluid/latest/':
                $sourcePath = 'https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/';
                $sourceEditPath = 'https://github.com/TYPO3/Fluid/edit/main/src/ViewHelpers/';
                $namespace = 'TYPO3Fluid\\Fluid\\ViewHelpers\\';
                break;
        }

        $name = $viewHelperDocumentation->getName();
        $explodedName = explode('.', $name);
        $explodedName = array_map('ucfirst', $explodedName);

        $implodedName = implode('/', $explodedName);
        $source = $sourcePath . $implodedName . 'ViewHelper.php';
        $phpFileName = end($explodedName) . 'ViewHelper.php';
        $sourceEdit = $sourceEditPath . $implodedName . 'ViewHelper.php';
        return [
            'source' => $source,
            'sourceEdit' => $sourceEdit,
            'phpFileName' => $phpFileName,
            'namespace' => $namespace,
            'namespaceUrl' => str_replace('\\', '/', $namespace),
        ];
    }
}
