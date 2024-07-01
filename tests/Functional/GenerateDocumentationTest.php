<?php

declare(strict_types=1);

/*
 * This file belongs to the package "Fluid Documentation Generator".
 * See LICENSE.txt that was shipped with this package.
 */

namespace T3Docs\FluidDocumentationGenerator\Tests\Functional;

use Composer\Autoload\ClassLoader;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use T3Docs\FluidDocumentationGenerator\ConsoleRunner;

class GenerateDocumentationTest extends TestCase
{
    #[Test]
    public function serializePackage(): void
    {
        $classLoader = self::createStub(ClassLoader::class);
        $classLoader->method('getPrefixesPsr4')->willReturn([
            'T3Docs\\FluidDocumentationGenerator\\Tests\\Fixtures\\' => [__DIR__ . '/../Fixtures'],
        ]);

        $subject = new ConsoleRunner();
        $subject->handleGenerateCommand([__DIR__ . '/../Fixtures/viewhelpers_test.json'], $classLoader);

        self::assertFileExists('fluidDocumentationOutput/Index.rst');
        self::assertFileExists('fluidDocumentationOutput/Test.json');
        self::assertFileExists('fluidDocumentationOutput/Test/Index.rst');
        self::assertFileExists('fluidDocumentationOutput/Test/Group/Index.rst');
        self::assertFileExists('fluidDocumentationOutput/Test/Group/Test.rst');
        self::assertFileMatchesFormat('%a<test:group.test>%a', 'fluidDocumentationOutput/Test/Group/Test.rst');

        $subject->cleanupOutputDir();
    }
}
