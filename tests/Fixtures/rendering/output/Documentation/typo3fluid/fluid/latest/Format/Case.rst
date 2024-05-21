..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/Format/CaseViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/main/src/ViewHelpers/Format/CaseViewHelper.php
:navigation-title: format.case

.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-format-case:

========================================
Format.case ViewHelper `<f:format.case>`
========================================



Modifies the case of an input string to upper- or lowercase or capitalization.
The default transformation will be uppercase as in `mb_convert_case`_.

Possible modes are:

``lower``
  Transforms the input string to its lowercase representation

``upper``
  Transforms the input string to its uppercase representation

``capital``
  Transforms the input string to its first letter upper-cased, i.e. capitalization

``uncapital``
  Transforms the input string to its first letter lower-cased, i.e. uncapitalization

``capitalWords``
  Not supported yet: Transforms the input string to each containing word being capitalized

Note that the behavior will be the same as in the appropriate PHP function `mb_convert_case`_;
especially regarding locale and multibyte behavior.

.. _mb_convert_case: https://www.php.net/manual/function.mb-convert-case.php

Examples
========

Default
-------

::

   <f:format.case>Some Text with miXed case</f:format.case>

Output::

   SOME TEXT WITH MIXED CASE

Example with given mode
-----------------------

::

   <f:format.case mode="capital">someString</f:format.case>

Output::

   SomeString

.. _typo3fluid-fluid-format-case_source:

Source code
===========

Go to the source code of this ViewHelper: `CaseViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/Format/CaseViewHelper.php>`__.

.. _typo3fluid-fluid-format-case_arguments:

Arguments
=========

The following arguments are available for `<f:format.case>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3fluid-fluid-format-case-value_argument:

..  confval:: value
    :name: typo3fluid-fluid-format-case-value
    :type: string
    :required: false

    The input value. If not given, the evaluated child nodes will be used.

.. _typo3fluid-fluid-format-case-mode_argument:

..  confval:: mode
    :name: typo3fluid-fluid-format-case-mode
    :type: string
    :default: `'upper'`
    :required: false

    The case to apply, must be one of this' CASE_* constants. Defaults to uppercase application.
