<?php
declare(strict_types=1);
namespace NamelessCoder\FluidDocumentationGenerator;

use cebe\markdown\GithubMarkdown;
use Michelf\Markdown;
use TYPO3Fluid\Fluid\Core\ViewHelper\ArgumentDefinition;

class ViewHelperDocumentation
{
    /**
     * @var ProcessedSchema
     */
    private $schema;

    /**
     * @var ViewHelperDocumentationGroup
     */
    private $group;

    /**
     * @var ArgumentDefinition[]
     */
    private $argumentDefinitions = [];

    private $viewHelperName = '';
    private $description = '';

    public function __construct(
        ProcessedSchema $schema,
        string $viewHelperName,
        string $description,
        array $argumentDefinitions,
        ViewHelperDocumentationGroup $group
    ) {
        $this->schema = $schema;
        $this->viewHelperName = $viewHelperName;
        $this->description = trim($description, "\n\r\t/");
        $this->argumentDefinitions = $argumentDefinitions;
        $this->group = $group;
        $this->group->addDocumentedViewHelper($this);
    }

    public function getGroup(): ViewHelperDocumentationGroup
    {
        return $this->group;
    }

    public function getName(): string
    {
        return $this->viewHelperName;
    }

    public function getSchema(): ProcessedSchema
    {
        return $this->schema;
    }

    public function getPath(): string
    {
        return implode('/', array_map('ucfirst', explode('.', $this->viewHelperName)));
    }

    public function getPhpName(): string
    {
        return str_replace('/', '\\', $this->getPath()) . 'ViewHelper';
    }

    public function getLocalName(): string
    {
        $lastDotPosition = strrpos($this->viewHelperName, '.');
        return ucfirst($lastDotPosition ? substr($this->viewHelperName, $lastDotPosition + 1) : $this->viewHelperName);
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPathToSchemaRoot(): string
    {
        return str_repeat('../', substr_count($this->viewHelperName, '.'));
    }

    public function getDescriptionAsMarkup(): string
    {
        $description = $this->getDescription();
        return empty(trim((string)$description)) ? '' : (new GithubMarkdown())->parse($description);
    }

    /**
     * The ViewHelper description could be in Markdown format: Perform basic parsing in reST.
     *
     * This parsing is currently tailored to the TYPO3 VHS Extension documentation, which is
     * rendered from reST to HTML on docs.typo3.org but from Markdown to HTML on
     * viewhelpers.fluidtypo3.org. Move the parsing to its own class or use a third-party
     * package if you want it to be more general - or try to convince the project maintainers
     * to always write their ViewHelpers documentation in reST.
     *
     * The order of the parsing rules is important. For example, not to turn the already parsed
     * quote into a code block.
     *
     * @return string
     */
    public function getDescriptionAsRst(): string
    {
        $replace = [
            // Headline
            '/^### (.*)$/m' => function ($matches) {
                return $matches[1] . PHP_EOL . str_repeat('=', strlen($matches[1]));
            },
            // Headline - Level 2
            '/^#### (.*)$/m' => function ($matches) {
                return $matches[1] . PHP_EOL . str_repeat('-', strlen($matches[1]));
            },
            // Code block
            '/\\n\\n```\S*\\n(.*?)```/s' => function ($matches) {
                return PHP_EOL . PHP_EOL . '::' . PHP_EOL. PHP_EOL .
                    implode(PHP_EOL, array_map(function ($line) {
                        return '    ' . $line;
                    }, explode(PHP_EOL, rtrim($matches[1]))));
            },
            // Quotation block
            '/^> (.*)$/m' => function ($matches) {
                return '    ' . $matches[1];
            }
        ];
        $description = $this->getDescription();
        return preg_replace_callback_array($replace, $description);
    }

    /**
     * @return ArgumentDefinition[]
     */
    public function getArgumentDefinitions(): array
    {
        return $this->argumentDefinitions;
    }
}
