<?php

declare(strict_types=1);

namespace NamelessCoder\FluidDocumentationGenerator\Data;

use NamelessCoder\FluidDocumentationGenerator\Entity\SchemaPackage;
use NamelessCoder\FluidDocumentationGenerator\Entity\SchemaVendor;
use NamelessCoder\FluidDocumentationGenerator\Entity\SchemaVersion;
use NamelessCoder\FluidDocumentationGenerator\ProcessedSchema;
use NamelessCoder\FluidDocumentationGenerator\SchemaDocumentationGenerator;
use NamelessCoder\FluidDocumentationGenerator\ViewHelperDocumentation;
use NamelessCoder\FluidDocumentationGenerator\ViewHelperDocumentationGroup;
use TYPO3Fluid\Fluid\Core\ViewHelper\ArgumentDefinition;

final class GraphDataHandler
{
    public const GRAPH_SCHEMA = 'schema';

    public const GRAPH_VENDOR = 'vendor';

    public const GRAPH_PACKAGE = 'package';

    public const GRAPH_VERSION = 'version';

    public const GRAPH_VIEW_HELPER = 'viewHelper';

    public const GRAPH_VIEW_HELPER_GROUP = 'group';

    public const GRAPH_ARGUMENT = 'argument';

    public static function getInstance(): self
    {
        return new self();
    }

    /**
     * @return array<string, mixed>
     */
    public function createSchemaData(ProcessedSchema $schema, bool $summary = false): array
    {
        return array_merge_recursive(
            [static::GRAPH_PACKAGE => $this->createPackageData($schema->getSchema()->getPackage(), $summary)],
            [static::GRAPH_VERSION => $this->createVersionData($schema->getSchema()->getVersion(), $summary)],
            [static::GRAPH_VENDOR => $this->createVendorGraphData($schema->getSchema()->getVendor(), $summary)],
            ['viewHelpers' => $this->createPropertyIndexedDataArray($schema->getDocumentedViewHelpers(), 'name', $summary)]
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function createVendorGraphData(SchemaVendor $vendor, bool $summary = false): array
    {
        return [
            'name' => $vendor->getVendorName(),
            'packages' => $this->createPropertyIndexedDataArray(
                DataFileResolver::getInstance()->resolveInstalledPackagesForVendor($vendor),
                'packageName',
                $summary
            ),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function createPackageData(SchemaPackage $package, bool $summary = false): array
    {
        return [
            'name' => $package->getPackageName(),
            'fullyQualifiedName' => $package->getFullyQualifiedName(),
            'versions' => $this->createPropertyIndexedDataArray(
                $package->getVersions(),
                '',
                $summary
            ),
        ];
    }

    /**
     * @return array<string, string>
     */
    public function createVersionData(SchemaVersion $version, bool $summary = false): array
    {
        return [
            'name' => $version->getVersion(),
            'fullyQualifiedName' => $version->getFullyQualifiedName(),
        ];
    }

    /**
     * @return array<mixed>
     */
    public function createViewHelperData(ViewHelperDocumentation $viewHelper, bool $summary = false): array
    {
        $schema = $viewHelper->getSchema();
        $viewHelperData = [
            'name' => $viewHelper->getName(),
            'localName' => $viewHelper->getLocalName(),
            'phpName' => $viewHelper->getPhpName(),
            'urls' => SchemaDocumentationGenerator::getInstance()->generateMachineResourceLinksForViewHelper($viewHelper),
        ];
        if (!$summary) {
            return array_merge_recursive(
                $viewHelperData,
                ['arguments' => $this->createPropertyIndexedDataArray($viewHelper->getArgumentDefinitions(), 'name')],
                [static::GRAPH_VIEW_HELPER_GROUP => $this->createViewHelperGroupData($viewHelper->getGroup(), true)],
                [static::GRAPH_SCHEMA => $this->createSchemaData($schema, true)]
            );
        }

        return $viewHelperData;
    }

    /**
     * @return array<mixed>
     */
    public function createViewHelperArgumentData(ArgumentDefinition $argumentDefinition): array
    {
        return [
            'name' => $argumentDefinition->getName(),
            'type' => $argumentDefinition->getType(),
            'description' => $argumentDefinition->getDescription(),
            'default' => $argumentDefinition->getDefaultValue(),
            'required' => $argumentDefinition->isRequired(),
        ];
    }

    /**
     * @return array<string, string|array<mixed>>
     */
    public function createViewHelperGroupData(ViewHelperDocumentationGroup $viewHelperGroup, bool $summary = false): array
    {
        return [
            'name' => $viewHelperGroup->getName(),
            'viewHelpers' => $this->createPropertyIndexedDataArray($viewHelperGroup->getDocumentedViewHelpers(), 'name', true),
        ];
    }

    /**
     * @param array<ArgumentDefinition|ViewHelperDocumentation|SchemaVersion|SchemaPackage> $values
     * @return array<array<array<mixed>>>
     */
    private function createPropertyIndexedDataArray(array $values, string $propertyNameContainingKey, bool $summary = false): array
    {
        $structured = [];
        foreach ($values as $originalKey => $value) {
            $key = $propertyNameContainingKey !== '' && $propertyNameContainingKey !== '0' ? $value->{'get' . ucfirst($propertyNameContainingKey)}() : $originalKey;
            $graphData = [];
            switch ($value::class) {
                case SchemaVersion::class:
                    $graphData = $this->createVersionData($value, $summary);
                    break;
                case SchemaPackage::class:
                    $graphData = $this->createPackageData($value, $summary);
                    break;
                case ArgumentDefinition::class:
                    $graphData = $this->createViewHelperArgumentData($value);
                    break;
                case ViewHelperDocumentation::class:
                    $graphData = $this->createViewHelperData($value, $summary);
                    break;
                default:
                    break;
            }

            $structured[$key] = $graphData;
        }

        return $structured;
    }
}
