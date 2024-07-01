<?php

declare(strict_types=1);

/*
 * This file belongs to the package "TYPO3 Fluid".
 * See LICENSE.txt that was shipped with this package.
 */

namespace TYPO3Fluid\FluidDocumentation;

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
     * @param array<string, array<string, string>> $sourceEdit
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
