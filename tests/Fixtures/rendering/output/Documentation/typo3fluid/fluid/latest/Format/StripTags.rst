..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/Format/StripTagsViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/tree/main/src/ViewHelpers/Format/StripTagsViewHelper.php
:navigation-title: format.stripTags

.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-format-striptags:

==================================================
Format.stripTags ViewHelper `<f:format.stripTags>`
==================================================



Removes tags from the given string (applying PHPs :php:`strip_tags()` function)
See https://www.php.net/manual/function.strip-tags.php.

Examples
========

Default notation
----------------

::

   <f:format.stripTags>Some Text with <b>Tags</b> and an &Uuml;mlaut.</f:format.stripTags>

Some Text with Tags and an &Uuml;mlaut. :php:`strip_tags()` applied.

.. note::
   Encoded entities are not decoded.

Default notation with allowedTags
---------------------------------

::

   <f:format.stripTags allowedTags="<p><span><div><script>">
       <p>paragraph</p><span>span</span><div>divider</div><iframe>iframe</iframe><script>script</script>
   </f:format.stripTags>

Output::

   <p>paragraph</p><span>span</span><div>divider</div>iframe<script>script</script>

Inline notation
---------------

::

   {text -> f:format.stripTags()}

Text without tags :php:`strip_tags()` applied.

Inline notation with allowedTags
--------------------------------

::

   {text -> f:format.stripTags(allowedTags: "<p><span><div><script>")}

Text with p, span, div and script Tags inside, all other tags are removed.

.. _typo3fluid-fluid-format-striptags_source:

Source code
===========

Go to the source code of this ViewHelper: `StripTagsViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/Format/StripTagsViewHelper.php>`__.

.. _typo3fluid-fluid-format-striptags_arguments:

Arguments
=========

The following arguments are available for `<f:format.stripTags>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3fluid-fluid-format-striptags-value_argument:

..  confval:: value
    :name: typo3fluid-fluid-format-striptags-value
    :type: string
    :required: false

    String to format

.. _typo3fluid-fluid-format-striptags-allowedtags_argument:

..  confval:: allowedTags
    :name: typo3fluid-fluid-format-striptags-allowedtags
    :type: string
    :required: false

    Optional string of allowed tags as required by PHPs strip_tags() function
