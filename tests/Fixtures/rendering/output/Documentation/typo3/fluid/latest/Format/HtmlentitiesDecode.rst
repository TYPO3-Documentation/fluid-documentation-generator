..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Format/HtmlentitiesDecodeViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Format/HtmlentitiesDecodeViewHelper.php
:navigation-title: format.htmlentitiesDecode
.. include:: /Includes.rst.txt

.. _typo3-fluid-format-htmlentitiesdecode:

====================================================================
Format.htmlentitiesDecode ViewHelper `<f:format.htmlentitiesDecode>`
====================================================================

Applies :php:`html_entity_decode()` to a value.
See https://www.php.net/html_entity_decode.

Examples
========

Default notation
----------------

::

   <f:format.htmlentitiesDecode>{text}</f:format.htmlentitiesDecode>

Text containing the following escaped signs: ``&amp;`` ``&quot;`` ``&#039;`` ``&lt;`` ``&gt;``, will be processed by :php:`html_entity_decode()`.
These will result in: ``&`` ``"`` ``'`` ``<`` ``>``.

Inline notation
---------------

::

   {text -> f:format.htmlentitiesDecode(encoding: 'ISO-8859-1')}

Text containing the following escaped signs: ``&amp;`` ``&quot;`` ``&#039;`` ``&lt;`` ``&gt;``, will be processed by :php:`html_entity_decode()`.
These will result in: ``&`` ``"`` ``'`` ``<`` ``>``.

But encoded as ISO-8859-1.

.. _typo3-fluid-format-htmlentitiesdecode_source:

Source code
===========

Go to the source code of this ViewHelper: `HtmlentitiesDecodeViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Format/HtmlentitiesDecodeViewHelper.php>`__.

.. _typo3-fluid-format-htmlentitiesdecode_arguments:

Arguments
=========

The following arguments are available for `<f:format.htmlentitiesDecode>`:

..  contents::
    :local:


.. _typo3-fluid-format-htmlentitiesdecode-value_argument:

value
-----

..  confval:: value
    :name: typo3-fluid-format-htmlentitiesdecode-value
    :type: string
    :required: false

    String to format

.. _typo3-fluid-format-htmlentitiesdecode-keepquotes_argument:

keepQuotes
----------

..  confval:: keepQuotes
    :name: typo3-fluid-format-htmlentitiesdecode-keepquotes
    :type: boolean
    :required: false

    If TRUE, single and double quotes won't be replaced (sets ENT_NOQUOTES flag).

.. _typo3-fluid-format-htmlentitiesdecode-encoding_argument:

encoding
--------

..  confval:: encoding
    :name: typo3-fluid-format-htmlentitiesdecode-encoding
    :type: string
    :required: false

    Define the encoding used when converting characters (Default: UTF-8).
