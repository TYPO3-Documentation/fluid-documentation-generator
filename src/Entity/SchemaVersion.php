<?php

declare(strict_types=1);

namespace NamelessCoder\FluidDocumentationGenerator\Entity;

class SchemaVersion
{
    public function __construct(private readonly \NamelessCoder\FluidDocumentationGenerator\Entity\SchemaPackage $package, private readonly string $version) {}

    public function getFullyQualifiedName(): string
    {
        return $this->package->getVendor()->getVendorName() . '/' . $this->package->getPackageName() . ':' . $this->version;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function getPackage(): SchemaPackage
    {
        return $this->package;
    }
}
