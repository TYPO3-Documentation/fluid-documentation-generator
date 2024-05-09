..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/Format/HtmlspecialcharsViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/tree/main/src/ViewHelpers/Format/HtmlspecialcharsViewHelper.php
:navigation-title: format.htmlspecialchars
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-format-htmlspecialchars:

================================================================
Format.htmlspecialchars ViewHelper `<f:format.htmlspecialchars>`
================================================================



Applies PHP ``htmlspecialchars()`` escaping to a value.

See http://www.php.net/manual/function.htmlspecialchars.php

Examples
========

Default notation
----------------

::

    <f:format.htmlspecialchars>{text}</f:format.htmlspecialchars>

Output::

    Text with & " ' < > * replaced by HTML entities (htmlspecialchars applied).

Inline notation
---------------

::

    {text -> f:format.htmlspecialchars(encoding: 'ISO-8859-1')}

Output::

    Text with & " ' < > * replaced by HTML entities (htmlspecialchars applied).

.. _typo3fluid-fluid-format-htmlspecialchars_source:

Source code
===========

Go to the source code of this ViewHelper: `HtmlspecialcharsViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/Format/HtmlspecialcharsViewHelper.php>`__.

.. _typo3fluid-fluid-format-htmlspecialchars_arguments:

Arguments
=========

The following arguments are available for `<f:format.htmlspecialchars>`:

..  contents::
    :local:


.. _typo3fluid-fluid-format-htmlspecialchars-value_argument:

value
-----

..  confval:: value
    :name: typo3fluid-fluid-format-htmlspecialchars-value
    :type: string
    :required: false

    Value to format

.. _typo3fluid-fluid-format-htmlspecialchars-keepquotes_argument:

keepQuotes
----------

..  confval:: keepQuotes
    :name: typo3fluid-fluid-format-htmlspecialchars-keepquotes
    :type: boolean
    :required: false

    If TRUE quotes will not be replaced (ENT_NOQUOTES)

.. _typo3fluid-fluid-format-htmlspecialchars-encoding_argument:

encoding
--------

..  confval:: encoding
    :name: typo3fluid-fluid-format-htmlspecialchars-encoding
    :type: string
    :Default: 'UTF-8'
    :required: false

    Encoding

.. _typo3fluid-fluid-format-htmlspecialchars-doubleencode_argument:

doubleEncode
------------

..  confval:: doubleEncode
    :name: typo3fluid-fluid-format-htmlspecialchars-doubleencode
    :type: boolean
    :Default: true
    :required: false

    If FALSE html entities will not be encoded
