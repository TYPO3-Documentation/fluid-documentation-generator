<?php

declare(strict_types=1);

/*
 * This file belongs to the package "Fluid Documentation Generator".
 * See LICENSE.txt that was shipped with this package.
 */

namespace T3Docs\FluidDocumentationGenerator\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class DecorationViewHelper extends AbstractViewHelper
{
    public function render(): string
    {
        $children = $this->renderChildren();
        if (!is_scalar($children) && !$children instanceof \Stringable) {
            throw new \InvalidArgumentException('DecorationViewHelper only works on string input');
        }
        return str_repeat('=', strlen((string)$children));
    }
}
