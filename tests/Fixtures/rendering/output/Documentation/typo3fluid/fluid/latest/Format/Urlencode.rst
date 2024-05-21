..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/Format/UrlencodeViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/main/src/ViewHelpers/Format/UrlencodeViewHelper.php
:navigation-title: format.urlencode

.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-format-urlencode:

==================================================
Format.urlencode ViewHelper `<f:format.urlencode>`
==================================================



Encodes the given string according to http://www.faqs.org/rfcs/rfc3986.html
Applying PHPs :php:`rawurlencode()` function.
See https://www.php.net/manual/function.rawurlencode.php.

.. note::
   The output is not escaped. You may have to ensure proper escaping on your own.

Examples
========

Default notation
----------------

::

   <f:format.urlencode>foo @+%/</f:format.urlencode>

``foo%20%40%2B%25%2F`` :php:`rawurlencode()` applied.

Inline notation
---------------

::

   {text -> f:format.urlencode()}

Url encoded text :php:`rawurlencode()` applied.

.. _typo3fluid-fluid-format-urlencode_source:

Source code
===========

Go to the source code of this ViewHelper: `UrlencodeViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/Format/UrlencodeViewHelper.php>`__.

.. _typo3fluid-fluid-format-urlencode_arguments:

Arguments
=========

The following arguments are available for `<f:format.urlencode>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3fluid-fluid-format-urlencode-value_argument:

..  confval:: value
    :name: typo3fluid-fluid-format-urlencode-value
    :type: string
    :required: false

    String to format
