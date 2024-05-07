<?php

declare(strict_types=1);

namespace NamelessCoder\FluidDocumentationGenerator\Entity;

use NamelessCoder\FluidDocumentationGenerator\Data\DataFileResolver;

class SchemaPackage
{
    public function __construct(private readonly \NamelessCoder\FluidDocumentationGenerator\Entity\SchemaVendor $vendor, private readonly string $packageName) {}

    public function getPackageName(): string
    {
        return $this->packageName;
    }

    public function getFullyQualifiedName(): string
    {
        return $this->vendor->getVendorName() . '/' . $this->packageName;
    }

    public function getVendor(): SchemaVendor
    {
        return $this->vendor;
    }

    /**
     * @return SchemaVersion[]
     */
    public function getVersions(): array
    {
        return DataFileResolver::getInstance()->resolveInstalledVersionsForPackage($this);
    }
}
