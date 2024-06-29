<?php

declare(strict_types=1);

namespace NamelessCoder\FluidDocumentationGenerator;

class ViewHelperDocumentation
{
    public function __construct(
        private readonly ProcessedSchema $schema,
        private readonly string $viewHelperName,
    ) {}

    public function getName(): string
    {
        return $this->viewHelperName;
    }

    public function getSchema(): ProcessedSchema
    {
        return $this->schema;
    }

    public function getPath(): string
    {
        return implode('/', array_map('ucfirst', explode('.', $this->viewHelperName)));
    }

    public function getPhpName(): string
    {
        return str_replace('/', '\\', $this->getPath()) . 'ViewHelper';
    }

    public function getLocalName(): string
    {
        $lastDotPosition = strrpos($this->viewHelperName, '.');
        return ucfirst($lastDotPosition ? substr($this->viewHelperName, $lastDotPosition + 1) : $this->viewHelperName);
    }
}
