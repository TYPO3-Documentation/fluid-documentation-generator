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
     * @var array
     */
    private $fixtureFilePaths = [
        __DIR__ . '/../../Fixtures/rendering/output/Documentation/fluidtypo3/vhs/6.1/Format/DateRange.rst',
        __DIR__ . '/../../Fixtures/rendering/output/Documentation/fluidtypo3/vhs/6.1/Iterator/Column.rst',
    ];

    /**
     * output of the generation process
     * @var array
     */
    private $generatedFilePaths = [
        'outputDir/public/fluidtypo3/vhs/6.1/Format/DateRange.rst',
        'outputDir/public/fluidtypo3/vhs/6.1/Iterator/Column.rst',
    ];

    protected function setUp()
    {
        $this->vfs = vfsStream::setup('outputDir');
        $this->vfs->addChild(vfsStream::newDirectory('cache'));
        $dataFileResolver = DataFileResolver::getInstance(vfsStream::url('outputDir'));
        $dataFileResolver->setResourcesDirectory(__DIR__ . '/../../../resources/');
        $dataFileResolver->setSchemasDirectory(__DIR__ . '/../../Fixtures/rendering/input/');
        $schemaDocumentationGenerator = new SchemaDocumentationGenerator(
            [
                new RstExporter()
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
    public function fileIsCreated()
    {
        $this->assertTrue($this->vfs->hasChild($this->generatedFilePaths[0]));
    }

    /**
     * @test
     */
    public function descriptionHeadlineAsExpected()
    {
        $output = file($this->vfs->getChild($this->generatedFilePaths[0])->url());
        $index = 9;
        $this->assertSame('Date range calculation/formatting ViewHelper' . PHP_EOL, $output[$index]);
    }

    /**
     * @test
     */
    public function descriptionHeadlineIsProperlyDecorated()
    {
        $output = file($this->vfs->getChild($this->generatedFilePaths[0])->url());
        $headlineTextIndex = 9;
        $lengthOfHeadline = strlen($output[$headlineTextIndex]);
        $this->assertSame($lengthOfHeadline, strlen($output[$headlineTextIndex + 1]));
        $this->assertRegExp('/^[=]+$/', $output[$headlineTextIndex + 1]);
    }

    /**
     * @test
     */
    public function descriptionHeadlineLvl2AsExpected()
    {
        $output = file($this->vfs->getChild($this->generatedFilePaths[0])->url());
        $index = 15;
        $this->assertSame('Usages' . PHP_EOL, $output[$index]);
    }

    /**
     * @test
     */
    public function descriptionHeadlineLvl2IsProperlyDecorated()
    {
        $output = file($this->vfs->getChild($this->generatedFilePaths[0])->url());
        $headlineTextIndex = 15;
        $lengthOfHeadline = strlen($output[$headlineTextIndex]);
        $this->assertSame($lengthOfHeadline, strlen($output[$headlineTextIndex + 1]));
        $this->assertRegExp('/^[-]+$/', $output[$headlineTextIndex + 1]);
    }

    /**
     * @test
     */
    public function descriptionCodeBlockIsProperlyDeclared()
    {
        $output = file($this->vfs->getChild($this->generatedFilePaths[1])->url());
        $codeBlockIndex = 23;
        $this->assertSame('::' . PHP_EOL, $output[$codeBlockIndex-2]);
    }

    /**
     * @test
     */
    public function descriptionQuotationBlockIsProperlyIndented()
    {
        $output = file($this->vfs->getChild($this->generatedFilePaths[0])->url());
        $codeBlockIndex = 56;
        $this->assertRegExp('/^    [^\s]/', $output[$codeBlockIndex]);
    }

    /**
     * @test
     */
    public function generatedFileIsSameAsFixture()
    {
        for ($i = 0; $i <= count($this->fixtureFilePaths)-1; $i++) {
            $this->assertSame(file_get_contents($this->fixtureFilePaths[$i]),
                file_get_contents($this->vfs->getChild($this->generatedFilePaths[$i])->url()));
        }
    }
}
