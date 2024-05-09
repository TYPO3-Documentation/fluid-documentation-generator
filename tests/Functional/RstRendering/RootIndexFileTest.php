<?php

declare(strict_types=1);

namespace NamelessCoder\FluidDocumentationGenerator\Tests\Functional\RstRendering;

use NamelessCoder\FluidDocumentationGenerator\Data\DataFileResolver;
use NamelessCoder\FluidDocumentationGenerator\Export\RstExporter;
use NamelessCoder\FluidDocumentationGenerator\SchemaDocumentationGenerator;
use org\bovigo\vfs\vfsStream;
use org\bovigo\vfs\vfsStreamDirectory;
use PHPUnit\Framework\TestCase;

class RootIndexFileTest extends TestCase
{
    /**
     * @var vfsStreamDirectory
     */
    private $vfs;

    /**
     * output of the generation process
     */
    private string $generatedFilePath = 'outputDir/public/Index.rst';

    protected function setUp(): void
    {
        $this->vfs = vfsStream::setup('outputDir');
        $this->vfs->addChild(vfsStream::newDirectory('cache'));

        $dataFileResolver = DataFileResolver::getInstance(vfsStream::url('outputDir'));
        $dataFileResolver->setResourcesDirectory(__DIR__ . '/../../../resources/');
        $dataFileResolver->setSchemasDirectory(__DIR__ . '/../../Fixtures/rendering/input/');

        $schemaDocumentationGenerator = new SchemaDocumentationGenerator(
            [
                new RstExporter(),
            ]
        );
        $schemaDocumentationGenerator->generateFilesForRoot();
    }

    /**
     * @test
     */
    public function fileIsCreated(): void
    {
        $this->assertTrue($this->vfs->hasChild($this->generatedFilePath));
    }

    /**
     * @test
     */
    public function includeClausePointsToSettingsCfg(): void
    {
        $output = file($this->vfs->getChild($this->generatedFilePath)->url());
        $this->assertSame('.. include:: /Includes.rst.txt' . PHP_EOL, $output[0]);
    }

    /**
     * @test
     */
    public function headlineAsExpected(): void
    {
        $output = file($this->vfs->getChild($this->generatedFilePath)->url());
        // include, empty, anchor, empty, upper headline decoration, text, lower headline decoration
        $index = 5;
        $this->assertSame('Fluid ViewHelper Documentation' . PHP_EOL, $output[$index]);
    }

    /**
     * @test
     */
    public function headlineIsProperlyDecorated(): void
    {
        $output = file($this->vfs->getChild($this->generatedFilePath)->url());
        // include, empty, anchor, empty, upper headline decoration, text, lower headline decoration
        $headlineTextIndex = 5;
        $lengthOfHeadline = strlen($output[$headlineTextIndex]);
        $this->assertSame($lengthOfHeadline, strlen($output[$headlineTextIndex - 1]));
        $this->assertMatchesRegularExpression('/^[=]+$/', $output[$headlineTextIndex - 1]);
        $this->assertSame($lengthOfHeadline, strlen($output[$headlineTextIndex + 1]));
        $this->assertMatchesRegularExpression('/^[=]+$/', $output[$headlineTextIndex + 1]);
    }

    /**
     * @test
     */
    public function tocTreeContainsSubDirectoriesAsExpected(): void
    {
        $output = file($this->vfs->getChild($this->generatedFilePath)->url());
        $output = implode(PHP_EOL, $output);
        $this->assertStringContainsString('   typo3/backend/latest/Index' . PHP_EOL, $output);
        $this->assertStringContainsString('   typo3fluid/fluid/latest/Index' . PHP_EOL, $output);
    }
}
