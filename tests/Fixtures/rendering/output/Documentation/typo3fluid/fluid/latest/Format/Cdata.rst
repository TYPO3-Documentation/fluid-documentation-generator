..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/Format/CdataViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/main/src/ViewHelpers/Format/CdataViewHelper.php
:navigation-title: format.cdata

.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-format-cdata:

==========================================
Format.cdata ViewHelper `<f:format.cdata>`
==========================================



Outputs an argument/value without any escaping and wraps it with CDATA tags.

PAY SPECIAL ATTENTION TO SECURITY HERE (especially Cross Site Scripting),
as the output is NOT SANITIZED!

Examples
========

Child nodes
-----------

::

    <f:format.cdata>{string}</f:format.cdata>

Output::

    <![CDATA[(Content of {string} without any conversion/escaping)]]>

Value attribute
---------------

::

    <f:format.cdata value="{string}" />

Output::

    <![CDATA[(Content of {string} without any conversion/escaping)]]>

Inline notation
---------------

::

    {string -> f:format.cdata()}

Output::

    <![CDATA[(Content of {string} without any conversion/escaping)]]>

.. _typo3fluid-fluid-format-cdata_source:

Source code
===========

Go to the source code of this ViewHelper: `CdataViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/Format/CdataViewHelper.php>`__.

.. _typo3fluid-fluid-format-cdata_arguments:

Arguments
=========

The following arguments are available for `<f:format.cdata>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3fluid-fluid-format-cdata-value_argument:

..  confval:: value
    :name: typo3fluid-fluid-format-cdata-value
    :type: mixed
    :required: false

    The value to output
