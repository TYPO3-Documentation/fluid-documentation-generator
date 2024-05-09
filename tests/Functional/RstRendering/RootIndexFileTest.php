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
     * the generated file is compared against this fixture file
     * @var string
     */
    private $fixtureFilePath = __DIR__ . '/../../Fixtures/rendering/output/Documentation/Index.rst';
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
    public function generatedFileIsSameAsFixture(): void
    {
        $this->assertSame(
            file_get_contents($this->fixtureFilePath),
            file_get_contents($this->vfs->getChild($this->generatedFilePath)->url())
        );
    }
}
