..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/Format/Nl2brViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/tree/main/src/ViewHelpers/Format/Nl2brViewHelper.php
:navigation-title: format.nl2br
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-format-nl2br:

==========================================
Format.nl2br ViewHelper `<f:format.nl2br>`
==========================================



Wrapper for PHPs :php:`nl2br` function.
See https://www.php.net/manual/function.nl2br.php.

Examples
========

Default
-------

::

   <f:format.nl2br>{text_with_linebreaks}</f:format.nl2br>

Text with line breaks replaced by ``<br />``

Inline notation
---------------

::

   {text_with_linebreaks -> f:format.nl2br()}

Text with line breaks replaced by ``<br />``

.. _typo3fluid-fluid-format-nl2br_source:

Source code
===========

Go to the source code of this ViewHelper: `Nl2brViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/Format/Nl2brViewHelper.php>`__.

.. _typo3fluid-fluid-format-nl2br_arguments:

Arguments
=========

The following arguments are available for `<f:format.nl2br>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3fluid-fluid-format-nl2br-value_argument:

..  confval:: value
    :name: typo3fluid-fluid-format-nl2br-value
    :type: string
    :required: false

    String to format
