..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/Format/PrintfViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/tree/main/src/ViewHelpers/Format/PrintfViewHelper.php
:navigation-title: format.printf
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-format-printf:

============================================
Format.printf ViewHelper `<f:format.printf>`
============================================



A ViewHelper for formatting values with printf. Either supply an array for
the arguments or a single value.

See http://www.php.net/manual/en/function.sprintf.php

Examples
========

Scientific notation
-------------------

::

    <f:format.printf arguments="{number: 362525200}">%.3e</f:format.printf>

Output::

    3.625e+8

Argument swapping
-----------------

::

    <f:format.printf arguments="{0: 3, 1: 'Kasper'}">%2$s is great, TYPO%1$d too. Yes, TYPO%1$d is great and so is %2$s!</f:format.printf>

Output::

    Kasper is great, TYPO3 too. Yes, TYPO3 is great and so is Kasper!

Single argument
---------------

::

    <f:format.printf arguments="{1: 'TYPO3'}">We love %s</f:format.printf>


Output::

    We love TYPO3

Inline notation
---------------

::

    {someText -> f:format.printf(arguments: {1: 'TYPO3'})}


Output::

    We love TYPO3

.. _typo3fluid-fluid-format-printf_source:

Source code
===========

Go to the source code of this ViewHelper: `PrintfViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/Format/PrintfViewHelper.php>`__.

.. _typo3fluid-fluid-format-printf_arguments:

Arguments
=========

The following arguments are available for `<f:format.printf>`:

..  contents::
    :local:


.. _typo3fluid-fluid-format-printf-value_argument:

value
-----

..  confval:: value
    :name: typo3fluid-fluid-format-printf-value
    :type: string
    :required: false

    String to format

.. _typo3fluid-fluid-format-printf-arguments_argument:

arguments
---------

..  confval:: arguments
    :name: typo3fluid-fluid-format-printf-arguments
    :type: mixed
    :Default: array ()
    :required: false

    The arguments for vsprintf
