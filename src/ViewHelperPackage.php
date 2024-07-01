<?php

declare(strict_types=1);

/*
 * This file belongs to the package "Fluid Documentation Generator".
 * See LICENSE.txt that was shipped with this package.
 */

namespace T3Docs\FluidDocumentationGenerator;

/**
 * @internal
 */
final class ViewHelperPackage
{
    /**
     * @var ViewHelper[]
     */
    public array $viewHelpers;

    public string $uri;

    /**
     * @param string[] $includesNamespaces
     * @param array<string, string> $templates
     * @param array<string, object> $sourceEdit
     */
    public function __construct(
        public readonly string $name,
        public readonly string $label,
        public readonly string $namespaceAlias,
        public readonly string $targetNamespace,
        public readonly array $includesNamespaces,
        public readonly array $templates,
        public readonly ?array $sourceEdit,
    ) {}
}
