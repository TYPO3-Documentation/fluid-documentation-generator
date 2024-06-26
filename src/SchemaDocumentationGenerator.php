<?php

declare(strict_types=1);

namespace NamelessCoder\FluidDocumentationGenerator;

use NamelessCoder\FluidDocumentationGenerator\Entity\Schema;
use NamelessCoder\FluidDocumentationGenerator\Entity\SchemaPackage;
use NamelessCoder\FluidDocumentationGenerator\Entity\SchemaVendor;
use NamelessCoder\FluidDocumentationGenerator\Export\ExporterInterface;

final class SchemaDocumentationGenerator
{
    /**
     * @var ExporterInterface[]
     */
    private readonly array $exporters;

    /**
     * @param ExporterInterface[] $exporters
     */
    public static function getInstance(array $exporters = [], bool $forceUpdate = false): self
    {
        static $instance;
        if (!$instance) {
            $instance = new self($exporters, $forceUpdate);
        }

        return $instance;
    }

    /**
     * @param ExporterInterface[] $exporters
     */
    public function __construct(array $exporters, private readonly bool $forceUpdate = false)
    {
        foreach ($exporters as $exporter) {
            $exporter->setGenerator($this);
        }

        $this->exporters = $exporters;
    }

    public function generateFilesForRoot(): void
    {
        foreach ($this->exporters as $exporter) {
            $exporter->exportRoot($this->forceUpdate);
        }
    }

    public function generateFilesForVendor(SchemaVendor $vendor): void
    {
        foreach ($this->exporters as $exporter) {
            $exporter->exportVendor($vendor);
        }
    }

    public function generateFilesForPackage(SchemaPackage $package): void
    {
        foreach ($this->exporters as $exporter) {
            $exporter->exportPackage($package);
        }
    }

    public function generateFilesForSchema(Schema $schema): void
    {
        $processedSchema = $schema->process();
        foreach ($this->exporters as $exporter) {
            // Generate exports for VH groups, but do not generate exports for the root group.
            foreach ($processedSchema->getDocumentationTree()->getDocumentedViewHelpers() as $viewHelperDocumentation) {
                $exporter->exportViewHelper($viewHelperDocumentation);
            }

            foreach ($processedSchema->getDocumentationTree()->getSubGroups() as $viewHelperDocumentationGroup) {
                $this->generateFilesForViewHelperDocumentationGroup($viewHelperDocumentationGroup, $exporter);
            }

            $exporter->exportSchema($processedSchema, $this->forceUpdate);
        }
    }

    public function generateFilesForViewHelperDocumentationGroup(ViewHelperDocumentationGroup $group, ExporterInterface $exporter): void
    {
        foreach ($group->getDocumentedViewHelpers() as $viewHelperDocumentation) {
            $exporter->exportViewHelper($viewHelperDocumentation, $this->forceUpdate);
        }

        foreach ($group->getSubGroups() as $subGroup) {
            $this->generateFilesForViewHelperDocumentationGroup($subGroup, $exporter);
        }

        $exporter->exportViewHelperGroup($group, $this->forceUpdate);
    }

    /**
     * @return ExporterInterface[]
     */
    public function generateResourceLinksForViewHelper(ViewHelperDocumentation $viewHelperDocumentation): array
    {
        $resources = [];
        foreach ($this->exporters as $exporter) {
            $resources = array_merge(
                $resources,
                $exporter->createAdditionalViewHelperResources($viewHelperDocumentation)
            );
        }

        return $resources;
    }

    /**
     * @return ExporterInterface[]
     */
    public function generateResourceLinksForSchema(ProcessedSchema $schema): array
    {
        $resources = [];
        foreach ($this->exporters as $exporter) {
            $resources = array_merge(
                $resources,
                $exporter->createAdditionalSchemaResources($schema)
            );
        }

        return $resources;
    }

    /**
     * @return ExporterInterface[]
     */
    public function generateMachineResourceLinksForViewHelper(ViewHelperDocumentation $viewHelperDocumentation): array
    {
        $resources = [];
        foreach ($this->exporters as $exporter) {
            $resources = array_merge(
                $resources,
                $exporter->createAdditionalViewHelperResources($viewHelperDocumentation, $exporter->getIdentifier())
            );
        }

        return $resources;
    }
}
