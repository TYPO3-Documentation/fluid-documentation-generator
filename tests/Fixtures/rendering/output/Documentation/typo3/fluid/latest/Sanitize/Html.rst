..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Sanitize/HtmlViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Sanitize/HtmlViewHelper.php
:navigation-title: sanitize.html

.. include:: /Includes.rst.txt

.. _typo3-fluid-sanitize-html:

============================================
Sanitize.html ViewHelper `<f:sanitize.html>`
============================================



Passes a given content through `typo3/html-sanitizer` to mitigate potential
cross-site scripting occurrences. Given `default` build corresponds to class
`TYPO3\CMS\Core\Html\DefaultSanitizerBuilder` declaring allowed HTML tags,
attributes and their values.

Examples
========

Default parameters
------------------

::

   <f:sanitize.html>
     <img src="/img.png" class="image" onmouseover="alert(document.location)">
   </f:sanitize.html>

Output::

   <img src="/img.png" class="image">

Inline notation
---------------

::

   {richTextFieldContent -> f:sanitize.html(build: 'default')}

.. _typo3-fluid-sanitize-html_source:

Source code
===========

Go to the source code of this ViewHelper: `HtmlViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Sanitize/HtmlViewHelper.php>`__.

.. _typo3-fluid-sanitize-html_arguments:

Arguments
=========

The following arguments are available for `<f:sanitize.html>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3-fluid-sanitize-html-build_argument:

..  confval:: build
    :name: typo3-fluid-sanitize-html-build
    :type: string
    :default: `'default'`
    :required: false

    Preset name or class-like name of sanitization builder
