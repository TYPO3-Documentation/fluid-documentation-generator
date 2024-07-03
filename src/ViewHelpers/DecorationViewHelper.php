<?php

declare(strict_types=1);

/*
 * This file belongs to the package "Fluid Documentation Generator".
 * See LICENSE.txt that was shipped with this package.
 */

namespace T3Docs\FluidDocumentationGenerator\ViewHelpers;

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class DecorationViewHelper extends AbstractViewHelper
{
    public static function renderStatic(array $arguments, \Closure $renderChildrenClosure, RenderingContextInterface $renderingContext): string
    {
        return str_repeat('=', strlen($renderChildrenClosure()));
    }
}
