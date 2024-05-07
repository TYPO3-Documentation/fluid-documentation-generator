<?php

declare(strict_types=1);

namespace NamelessCoder\FluidDocumentationGenerator;

use cebe\markdown\GithubMarkdown;
use Michelf\Markdown;
use TYPO3Fluid\Fluid\Core\ViewHelper\ArgumentDefinition;

class ViewHelperDocumentation
{
    private readonly string $description;

    public function __construct(
        private readonly \NamelessCoder\FluidDocumentationGenerator\ProcessedSchema $schema,
        private readonly string $viewHelperName,
        string $description,
        /**
         * @var ArgumentDefinition[]
         */
        private readonly array $argumentDefinitions,
        private readonly \NamelessCoder\FluidDocumentationGenerator\ViewHelperDocumentationGroup $group
    ) {
        $this->description = trim($description, "\n\r\t/");
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
        return trim($description) === '' || trim($description) === '0' ? '' : (new GithubMarkdown())->parse($description);
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
     */
    public function getDescriptionAsRst(): string
    {
        $replace = [
            // Headline
            '/^### (.*)$/m' => static fn($matches): string => $matches[1] . PHP_EOL . str_repeat('=', strlen((string) $matches[1])),
            // Headline - Level 2
            '/^#### (.*)$/m' => static fn($matches): string => $matches[1] . PHP_EOL . str_repeat('-', strlen((string) $matches[1])),
            // Code block
            '/\\n\\n```\S*\\n(.*?)```/s' => static fn($matches): string => PHP_EOL . PHP_EOL . '::' . PHP_EOL . PHP_EOL .
                implode(PHP_EOL, array_map(static fn(string $line): string => '    ' . $line, explode(PHP_EOL, rtrim((string) $matches[1])))),
            // Quotation block
            '/^> (.*)$/m' => static fn($matches): string => '    ' . $matches[1],
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
