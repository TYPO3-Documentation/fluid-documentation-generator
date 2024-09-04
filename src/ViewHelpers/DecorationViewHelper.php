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
        return str_repeat('=', strlen((string)$this->renderChildren()));
    }
}
