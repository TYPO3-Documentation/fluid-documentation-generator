..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/Format/RawViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/tree/main/src/ViewHelpers/Format/RawViewHelper.php
:navigation-title: format.raw

.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-format-raw:

======================================
Format.raw ViewHelper `<f:format.raw>`
======================================



Outputs an argument/value without any escaping. Is normally used to output
an ObjectAccessor which should not be escaped, but output as-is.

PAY SPECIAL ATTENTION TO SECURITY HERE (especially Cross Site Scripting),
as the output is NOT SANITIZED!

Examples
========

Child nodes
-----------

::

    <f:format.raw>{string}</f:format.raw>

Output::

    (Content of ``{string}`` without any conversion/escaping)

Value attribute
---------------

::

    <f:format.raw value="{string}" />

Output::

    (Content of ``{string}`` without any conversion/escaping)

Inline notation
---------------

::

    {string -> f:format.raw()}

Output::

    (Content of ``{string}`` without any conversion/escaping)

.. _typo3fluid-fluid-format-raw_source:

Source code
===========

Go to the source code of this ViewHelper: `RawViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/Format/RawViewHelper.php>`__.

.. _typo3fluid-fluid-format-raw_arguments:

Arguments
=========

The following arguments are available for `<f:format.raw>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3fluid-fluid-format-raw-value_argument:

..  confval:: value
    :name: typo3fluid-fluid-format-raw-value
    :type: mixed
    :required: false

    The value to output
