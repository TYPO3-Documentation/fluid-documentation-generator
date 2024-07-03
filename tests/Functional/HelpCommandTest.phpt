--TEST--
fluidDocumentation help
--ARGS--
help
--FILE--
<?php declare(strict_types=1);
require_once __DIR__ . '/../../bin/fluidDocumentation';
--EXPECT--

----------------------------------------------------------------------------------------------
                      Fluid Documentation Generator: Help text
----------------------------------------------------------------------------------------------

Supported commands:

    bin/fluidDocumentation help        # Show this help screen
    bin/fluidDocumentation generate    # Generates documentation in RST format based on
                                       # supplied configuration files and available ViewHelpers
                                       # in the project and writes the result into a new folder
                                       # named "fluidDocumentationOutput"

Example usage:

    bin/fluidDocumentation generate config/my_viewhelpers.json config/other_viewhelpers.json

The supplied config files must respect the provided JSON Schema located in
src/Config.schema.json.

Note that the technical implementation uses composer's autoloader to find ViewHelper classes
in the current project, which means that this command only works in an installed composer
project.
