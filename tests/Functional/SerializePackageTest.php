<?php

declare(strict_types=1);

/*
 * This file belongs to the package "Fluid Documentation Generator".
 * See LICENSE.txt that was shipped with this package.
 */

namespace T3Docs\FluidDocumentationGenerator\Tests\Functional;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use T3Docs\FluidDocumentationGenerator\ViewHelper;
use T3Docs\FluidDocumentationGenerator\ViewHelperPackage;
use TYPO3Fluid\Fluid\Core\ViewHelper\ArgumentDefinition;
use TYPO3Fluid\Fluid\Schema\ViewHelperMetadata;

class SerializePackageTest extends TestCase
{
    #[Test]
    public function serializePackage(): void
    {
        $viewHelper = new ViewHelper(
            new ViewHelperMetadata(
                'Vendor\\MyPackage\\ViewHelpers\\TestViewHelper',
                'Vendor\\MyPackage\\ViewHelpers',
                'TestViewHelper',
                'test',
                "Some documentation\nwith newlines",
                'http://typo3.org/ns/Vendor/MyPackage/ViewHelpers/',
                ['@deprecated' => 'since 1.2.3'],
                [
                    'value' => new ArgumentDefinition('value', 'string', 'argument description', false),
                ],
                false,
            ),
        );
        $viewHelper->uri = 'Global/Test';

        $package = new ViewHelperPackage(
            'Global',
            'Global (f:*)',
            'f',
            'http://typo3.org/ns/Vendor/MyPackage/ViewHelpers/',
            [
                'http://typo3.org/ns/Vendor/MyPackage/ViewHelpers/',
            ],
            [
                'root' => 'path/to/Root.rst',
                'namespace' => 'path/to/Namespace.rst',
                'group' => 'path/to/Group.rst',
                'viewhelper' => 'path/to/ViewHelper.rst',
            ],
            [
                'http://typo3.org/ns/Vendor/MyPackage/ViewHelpers/' => (object)[
                    'editPrefix' => 'http://example.com/edit/',
                    'sourcePrefix' => 'http://example.com/source/',
                ],
            ],
            [
                'http://typo3.org/ns/Vendor/MyPackage/ViewHelpers/' => 'vendor-mypackage',
            ],
        );
        $package->uri = 'Global/Index';
        $package->viewHelpers = [$viewHelper];

        self::assertJsonStringEqualsJsonFile(
            __DIR__ . '/../Fixtures/SerializePackageResult.json',
            json_encode($package, JSON_THROW_ON_ERROR),
        );
    }
}
