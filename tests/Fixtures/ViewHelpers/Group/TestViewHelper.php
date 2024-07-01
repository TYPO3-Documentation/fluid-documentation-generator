<?php

declare(strict_types=1);

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
