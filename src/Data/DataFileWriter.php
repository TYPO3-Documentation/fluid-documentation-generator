<?php

declare(strict_types=1);

namespace NamelessCoder\FluidDocumentationGenerator\Data;

use NamelessCoder\FluidDocumentationGenerator\Entity\SchemaPackage;
use NamelessCoder\FluidDocumentationGenerator\Entity\SchemaVendor;
use NamelessCoder\FluidDocumentationGenerator\ProcessedSchema;

class DataFileWriter
{
    public function __construct(private readonly \NamelessCoder\FluidDocumentationGenerator\Data\DataFileResolver $resolver) {}

    public function publishDataFileForSchema(ProcessedSchema $schema, string $subPath, string $contents): string
    {
        return $this->writeDataFileToTargetLocation(
            $this->resolver->resolveSchemaSpecificPublicDataFilePath($schema, $subPath),
            $contents
        );
    }

    public function publishDataFile(string $subPath, string $contents): string
    {
        return $this->writeDataFileToTargetLocation(
            $this->resolver->getPublicDirectoryPath() . $subPath,
            $contents
        );
    }

    public function publishDataFileForVendor(SchemaVendor $vendor, string $subPath, string $contents): string
    {
        return $this->writeDataFileToTargetLocation(
            $this->resolver->getPublicDirectoryPath() . $vendor->getVendorName() . DIRECTORY_SEPARATOR . $subPath,
            $contents
        );
    }

    public function publishDataFileForPackage(SchemaPackage $package, string $subPath, string $contents): string
    {
        return $this->writeDataFileToTargetLocation(
            $this->resolver->getPublicDirectoryPath() . $package->getVendor()->getVendorName() . DIRECTORY_SEPARATOR . $package->getPackageName() . DIRECTORY_SEPARATOR . $subPath,
            $contents
        );
    }

    private function writeDataFileToTargetLocation(string $targetFileLocation, string $contents): string
    {
        $directoryPath = pathinfo($targetFileLocation, PATHINFO_DIRNAME);
        if (!is_dir($directoryPath)) {
            mkdir($directoryPath, 0o755, true);
        }

        file_put_contents($targetFileLocation, $contents);
        return $targetFileLocation;
    }
}
