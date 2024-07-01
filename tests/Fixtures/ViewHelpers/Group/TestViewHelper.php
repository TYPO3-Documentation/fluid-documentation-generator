<?php

declare(strict_types=1);

/*
 * This file belongs to the package "Fluid Documentation Generator".
 * See LICENSE.txt that was shipped with this package.
 */

namespace T3Docs\FluidDocumentationGenerator\Tests\Fixtures\ViewHelpers\Group;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class TestViewHelper extends AbstractViewHelper
{
    public function initializeArguments(): void
    {
        $this->registerArgument('testArgument', 'string', 'argument description');
    }

    public function render(): string
    {
        return '';
    }
}
