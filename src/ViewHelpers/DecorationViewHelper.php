<?php

declare(strict_types=1);

namespace TYPO3Fluid\FluidDocumentation\ViewHelpers;

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class DecorationViewHelper extends AbstractViewHelper
{
    public static function renderStatic(array $arguments, \Closure $renderChildrenClosure, RenderingContextInterface $renderingContext): string
    {
        return str_repeat('=', strlen($renderChildrenClosure()));
    }
}