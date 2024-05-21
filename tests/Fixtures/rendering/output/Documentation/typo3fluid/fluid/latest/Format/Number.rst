..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/Format/NumberViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/main/src/ViewHelpers/Format/NumberViewHelper.php
:navigation-title: format.number

.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-format-number:

============================================
Format.number ViewHelper `<f:format.number>`
============================================



Formats a number with custom precision, decimal point and grouped thousands.
See https://www.php.net/manual/function.number-format.php.

Examples
========

Defaults
--------

::

   <f:format.number>423423.234</f:format.number>

``423,423.20``

With all parameters
-------------------

::

   <f:format.number decimals="1" decimalSeparator="," thousandsSeparator=".">
       423423.234
   </f:format.number>

``423.423,2``

.. _typo3fluid-fluid-format-number_source:

Source code
===========

Go to the source code of this ViewHelper: `NumberViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/Format/NumberViewHelper.php>`__.

.. _typo3fluid-fluid-format-number_arguments:

Arguments
=========

The following arguments are available for `<f:format.number>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3fluid-fluid-format-number-decimals_argument:

..  confval:: decimals
    :name: typo3fluid-fluid-format-number-decimals
    :type: mixed
    :default: `2`
    :required: false

    The number of digits after the decimal point

.. _typo3fluid-fluid-format-number-decimalseparator_argument:

..  confval:: decimalSeparator
    :name: typo3fluid-fluid-format-number-decimalseparator
    :type: string
    :default: `'.'`
    :required: false

    The decimal point character

.. _typo3fluid-fluid-format-number-thousandsseparator_argument:

..  confval:: thousandsSeparator
    :name: typo3fluid-fluid-format-number-thousandsseparator
    :type: string
    :default: `','`
    :required: false

    The character for grouping the thousand digits
