<?php

declare(strict_types=1);

namespace NamelessCoder\FluidDocumentationGenerator\Entity;

use NamelessCoder\FluidDocumentationGenerator\Data\DataFileResolver;
use NamelessCoder\FluidDocumentationGenerator\ProcessedSchema;

class Schema
{
    public function __construct(private readonly \NamelessCoder\FluidDocumentationGenerator\Entity\SchemaVersion $version) {}

    public function getSchemaSource(): string
    {
        return file_get_contents(
            DataFileResolver::getInstance()->resolveSchemaFileLocation($this)
        );
    }

    public function process(): ProcessedSchema
    {
        return new ProcessedSchema($this);
    }

    public function getVendor(): SchemaVendor
    {
        return $this->version->getPackage()->getVendor();
    }

    public function getPackage(): SchemaPackage
    {
        return $this->version->getPackage();
    }

    public function getVersion(): SchemaVersion
    {
        return $this->version;
    }
}
