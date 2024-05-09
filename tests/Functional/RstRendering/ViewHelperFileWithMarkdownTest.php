<?php

declare(strict_types=1);

namespace NamelessCoder\FluidDocumentationGenerator\Tests\Functional\RstRendering;

use NamelessCoder\FluidDocumentationGenerator\Data\DataFileResolver;
use NamelessCoder\FluidDocumentationGenerator\Entity\Schema;
use NamelessCoder\FluidDocumentationGenerator\Export\RstExporter;
use NamelessCoder\FluidDocumentationGenerator\SchemaDocumentationGenerator;
use org\bovigo\vfs\vfsStream;
use org\bovigo\vfs\vfsStreamDirectory;
use PHPUnit\Framework\TestCase;

class ViewHelperFileWithMarkdownTest extends TestCase
{
    /**
     * @var vfsStreamDirectory
     */
    private $vfs;

    /**
     * the generated file is compared against this fixture file
     * @var string[] $fixtureFilePaths
     */
    private array $fixtureFilePaths = [
        __DIR__ . '/../../Fixtures/rendering/output/Documentation/typo3/fluid/latest/Format/Date.rst',
        __DIR__ . '/../../Fixtures/rendering/output/Documentation/typo3/fluid/latest/FlashMessages.rst',
    ];

    /**
     * output of the generation process
     * @var string[] $generatedFilePaths
     */
    private array $generatedFilePaths = [
        'outputDir/public/typo3/fluid/latest/Format/Date.rst',
        'outputDir/public/typo3/fluid/latest/FlashMessages.rst',
    ];

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
        foreach ($dataFileResolver->resolveInstalledVendors() as $vendor) {
            $schemaDocumentationGenerator->generateFilesForVendor($vendor);
            foreach ($vendor->getPackages() as $package) {
                $schemaDocumentationGenerator->generateFilesForPackage($package);
                foreach ($package->getVersions() as $version) {
                    $schemaDocumentationGenerator->generateFilesForSchema(new Schema($version));
                }
            }
        }
    }

    /**
     * @test
     */
    public function fileIsCreated(): void
    {
        $this->assertTrue($this->vfs->hasChild($this->generatedFilePaths[0]));
    }

    /**
     * @test
     */
    public function generatedFileIsSameAsFixture(): void
    {
        for ($i = 0; $i <= count($this->fixtureFilePaths) - 1; ++$i) {
            $this->assertSame(
                file_get_contents($this->fixtureFilePaths[$i]),
                file_get_contents($this->vfs->getChild($this->generatedFilePaths[$i])->url())
            );
        }
    }
}
