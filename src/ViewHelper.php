<?php

declare(strict_types=1);

/*
 * This file belongs to the package "Fluid Documentation Generator".
 * See LICENSE.txt that was shipped with this package.
 */

namespace T3Docs\FluidDocumentationGenerator;

use TYPO3Fluid\Fluid\Schema\ViewHelperMetadata;

/**
 * @internal
 */
final class ViewHelper implements \JsonSerializable
{
    public readonly string $nameWithoutSuffix;
    public readonly string $namespaceWithoutSuffix;
    public string $uri;

    public function __construct(
        public readonly ViewHelperMetadata $metadata,
    ) {
        $this->nameWithoutSuffix = (string)preg_replace('#ViewHelper$#', '', $metadata->name);
        $this->namespaceWithoutSuffix = (string)preg_replace('#\\\\ViewHelpers$#', '', $metadata->namespace);
    }

    public function jsonSerialize(): object
    {
        // Convert to stdClass to be able to add more information to it
        $raw = (object)get_object_vars($this->metadata);
        $raw->nameWithoutSuffix = $this->nameWithoutSuffix;
        $raw->namespaceWithoutSuffix = $this->namespaceWithoutSuffix;
        $raw->uri = $this->uri;
        foreach ($this->metadata->argumentDefinitions as $definition) {
            // Extract information from ArgumentDefinition objects
            $raw->argumentDefinitions[$definition->getName()] = (object)[
                'name' => $definition->getName(),
                'type' => $definition->getType(),
                'description' => $definition->getDescription(),
                'required' => $definition->isRequired(),
                'defaultValue' => $definition->getDefaultValue(),
                'escape' => $definition->getEscape(),
            ];
        }
        return $raw;
    }
}
