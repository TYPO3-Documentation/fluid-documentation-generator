<?php

declare(strict_types=1);

namespace NamelessCoder\FluidDocumentationGenerator\Data;

use NamelessCoder\FluidDocumentationGenerator\Entity\Schema;
use NamelessCoder\FluidDocumentationGenerator\Entity\SchemaPackage;
use NamelessCoder\FluidDocumentationGenerator\Entity\SchemaVendor;
use NamelessCoder\FluidDocumentationGenerator\Entity\SchemaVersion;
use NamelessCoder\FluidDocumentationGenerator\Exception\SchemaFileNotFoundException;
use NamelessCoder\FluidDocumentationGenerator\ProcessedSchema;

final class DataFileResolver
{
    public const SCHEMA_FILENAME = 'schema.xsd';

    public const CACHE_DIRECTORY = 'cache';

    public const PUBLIC_DIRECTORY = 'public';

    public const SCHEMAS_DIRECTORY = 'schemas';

    public const RESOURCES_DIRECTORY = 'resources';

    private readonly \NamelessCoder\FluidDocumentationGenerator\Data\DataFileWriter $writer;

    private string $resourcesDirectory = '';

    private string $schemasDirectory = '';

    private static ?self $instance = null;

    public static function getInstance(?string $rootDirectory = null): DataFileResolver
    {
        if (!static::$instance instanceof \NamelessCoder\FluidDocumentationGenerator\Data\DataFileResolver && ($rootDirectory === null || $rootDirectory === '' || $rootDirectory === '0')) {
            throw new \RuntimeException('DataFileResolver must be fetched once with a root directory argument');
        }

        if (!static::$instance instanceof \NamelessCoder\FluidDocumentationGenerator\Data\DataFileResolver || $rootDirectory) {
            static::$instance = new static($rootDirectory);
        }

        return static::$instance;
    }

    public function __construct(private readonly string $rootDirectory)
    {
        $this->writer = new DataFileWriter($this);
    }

    public function getWriter(): DataFileWriter
    {
        return $this->writer;
    }

    public function readSchemaMetaDataFile(Schema $schema): array
    {
        return $this->readVendorMetaDataFile($schema->getVendor())
            + $this->readPackageMetaDataFile($schema->getPackage())
            + (array) json_decode($this->readSchemaDataFile($schema, 'metadata.json'), true);
    }

    public function readPackageMetaDataFile(SchemaPackage $package): array
    {
        return $this->readVendorMetaDataFile($package->getVendor())
            + (array) json_decode($this->readPackageDataFile($package, 'metadata.json'), true);
    }

    public function readVendorMetaDataFile(SchemaVendor $vendor): array
    {
        return (array) json_decode($this->readVendorDataFile($vendor, 'metadata.json'), true);
    }

    public function readRootDataFile(string $relativeFilePath): string
    {
        $filePath = $this->getSchemaDirectoryPath() . $relativeFilePath;
        return is_file($filePath) ? file_get_contents($filePath) : '';
    }

    public function readVendorDataFile(SchemaVendor $vendor, string $relativeFilePath): string
    {
        $filePath = $this->getSchemaDirectoryPath() . $vendor->getVendorName() . DIRECTORY_SEPARATOR . $relativeFilePath;
        return is_file($filePath) ? file_get_contents($filePath) : '';
    }

    public function readPackageDataFile(SchemaPackage $package, string $relativeFilePath): string
    {
        $filePath = $this->getSchemaDirectoryPath() . $package->getVendor()->getVendorName() . DIRECTORY_SEPARATOR
            . $package->getPackageName() . DIRECTORY_SEPARATOR . $relativeFilePath;
        return is_file($filePath) ? file_get_contents($filePath) : '';
    }

    public function readSchemaDataFile(Schema $schema, string $relativeFilePath): string
    {
        $filePath = $this->getSchemaDirectoryPath() . $schema->getVendor()->getVendorName() . DIRECTORY_SEPARATOR
            . $schema->getPackage()->getPackageName() . DIRECTORY_SEPARATOR . $schema->getVersion()->getVersion()
            . DIRECTORY_SEPARATOR . $relativeFilePath;
        return is_file($filePath) ? file_get_contents($filePath) : '';
    }

    /**
     * @return SchemaVendor[]
     */
    public function resolveInstalledVendors(): array
    {
        $path = $this->getSchemaDirectoryPath();

        return array_map(
            static fn($item): \NamelessCoder\FluidDocumentationGenerator\Entity\SchemaVendor => new SchemaVendor(pathinfo((string) $item, PATHINFO_FILENAME)),
            $this->readContentsOfFolder($path)
        );
    }

    /**
     * @return SchemaPackage[]
     */
    public function resolveInstalledPackagesForVendor(SchemaVendor $vendor): array
    {
        static $cache = [];
        if (!isset($cache[$vendor->getVendorName()])) {
            $path = $this->getSchemaDirectoryPath() . DIRECTORY_SEPARATOR . $vendor->getVendorName() . DIRECTORY_SEPARATOR;
            $cache[$vendor->getVendorName()] = array_map(
                static fn($item): \NamelessCoder\FluidDocumentationGenerator\Entity\SchemaPackage => new SchemaPackage($vendor, $item),
                $this->readContentsOfFolder($path)
            );
        }

        return $cache[$vendor->getVendorName()];
    }

    /**
     * @return SchemaVersion[]
     */
    public function resolveInstalledVersionsForPackage(SchemaPackage $package): array
    {
        static $cache = [];
        if (!isset($cache[$package->getFullyQualifiedName()])) {
            $path = $this->getSchemaDirectoryPath() . DIRECTORY_SEPARATOR . $package->getVendor()->getVendorName()
                . DIRECTORY_SEPARATOR . $package->getPackageName() . DIRECTORY_SEPARATOR;
            $cache[$package->getFullyQualifiedName()] = array_map(
                static fn($item): \NamelessCoder\FluidDocumentationGenerator\Entity\SchemaVersion => new SchemaVersion($package, $item),
                $this->readContentsOfFolder($path)
            );
        }

        return $cache[$package->getFullyQualifiedName()];
    }

    public function resolveSchemaFileLocation(Schema $schema): string
    {
        $path = $this->getSchemaDirectoryPath() . $this->createSchemaSpecificSubPath($schema) . static::SCHEMA_FILENAME;
        if (!file_exists($path)) {
            throw new SchemaFileNotFoundException('File ' . $path . ' does not exist');
        }

        return $path;
    }

    public function resolveSchemaSpecificPublicDataFilePath(ProcessedSchema $schema, string $subPath): string
    {
        return $this->getPublicDirectoryPath() . $this->createSchemaSpecificSubPath($schema->getSchema()) . $subPath;
    }

    private function createSchemaSpecificSubPath(Schema $schema): string
    {
        $vendor = $schema->getVendor()->getVendorName();
        $package = $schema->getPackage()->getPackageName();
        $version = $schema->getVersion()->getVersion();
        return $vendor . DIRECTORY_SEPARATOR . $package . DIRECTORY_SEPARATOR . $version . DIRECTORY_SEPARATOR;
    }

    public function setResourcesDirectory(string $resourcesDirectory): void
    {
        $this->resourcesDirectory = $resourcesDirectory;
    }

    public function setSchemasDirectory(string $schemasDirectory): void
    {
        $this->schemasDirectory = $schemasDirectory;
    }

    private function readContentsOfFolder(string $folderPath): array
    {
        $files = @scandir($folderPath);
        return $files === [] || $files === false ? [] : array_values(
            array_filter(
                $files,
                static fn(string $item): bool => $item[0] !== '.' && is_dir($folderPath . $item)
            )
        );
    }

    public function getResourcesDirectoryPath(): string
    {
        return $this->resourcesDirectory !== '' && $this->resourcesDirectory !== '0' ? $this->resourcesDirectory : $this->rootDirectory . DIRECTORY_SEPARATOR . static::RESOURCES_DIRECTORY . DIRECTORY_SEPARATOR;
    }

    public function getPublicDirectoryPath(): string
    {
        return $this->rootDirectory . DIRECTORY_SEPARATOR . static::PUBLIC_DIRECTORY . DIRECTORY_SEPARATOR;
    }

    public function getSchemaDirectoryPath(): string
    {
        return $this->schemasDirectory !== '' && $this->schemasDirectory !== '0' ? $this->schemasDirectory : $this->rootDirectory . DIRECTORY_SEPARATOR . static::SCHEMAS_DIRECTORY . DIRECTORY_SEPARATOR;
    }

    public function getCacheDirectoryPath(): string
    {
        return $this->rootDirectory . DIRECTORY_SEPARATOR . static::CACHE_DIRECTORY . DIRECTORY_SEPARATOR;
    }
}
