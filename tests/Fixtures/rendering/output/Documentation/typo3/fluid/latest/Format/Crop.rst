..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Format/CropViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Format/CropViewHelper.php
:navigation-title: format.crop
.. include:: /Includes.rst.txt

.. _typo3-fluid-format-crop:

========================================
Format.crop ViewHelper `<f:format.crop>`
========================================



Use this ViewHelper to crop the text between its opening and closing tags.

Whitespace within the f:format.crop element will be considered as characters.

Examples
========

Defaults
--------

::

   <f:format.crop maxCharacters="10">
   This is some very long text
   </f:format.crop>

``This is...``

The third word "some" does not fit in the 10 character limit, because respectWordBoundaries
is true by default.

Custom suffix
-------------

::

   <f:format.crop maxCharacters="17" append="&nbsp;[more]">
   This is some very long text
   </f:format.crop>

``This is some&nbsp;[more]``

Don't respect word boundaries
-----------------------------

::

   <f:format.crop maxCharacters="10" respectWordBoundaries="false">
   This is some very long text
   </f:format.crop>

``This is s...``

Don't respect HTML tags
-----------------------

::

   <f:format.crop maxCharacters="28" respectWordBoundaries="false" respectHtml="false">
   This is some text with <strong>HTML</strong> tags
   </f:format.crop>

``This is some text with <stro``

Inline notation
---------------

::

   {someLongText -> f:format.crop(maxCharacters: 10)}

``someLongText cropped after 10 characters``
Depending on the value of ``{someLongText}``.

.. _typo3-fluid-format-crop_source:

Source code
===========

Go to the source code of this ViewHelper: `CropViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Format/CropViewHelper.php>`__.

.. _typo3-fluid-format-crop_arguments:

Arguments
=========

The following arguments are available for `<f:format.crop>`:

..  contents::
    :local:


.. _typo3-fluid-format-crop-maxcharacters_argument:

maxCharacters
-------------

..  confval:: maxCharacters
    :name: typo3-fluid-format-crop-maxcharacters
    :type: mixed
    :required: true

    Place where to truncate the string

.. _typo3-fluid-format-crop-append_argument:

append
------

..  confval:: append
    :name: typo3-fluid-format-crop-append
    :type: string
    :Default: '&hellip;'
    :required: false

    What to append, if truncation happened

.. _typo3-fluid-format-crop-respectwordboundaries_argument:

respectWordBoundaries
---------------------

..  confval:: respectWordBoundaries
    :name: typo3-fluid-format-crop-respectwordboundaries
    :type: boolean
    :Default: true
    :required: false

    If TRUE and division is in the middle of a word, the remains of that word is removed.

.. _typo3-fluid-format-crop-respecthtml_argument:

respectHtml
-----------

..  confval:: respectHtml
    :name: typo3-fluid-format-crop-respecthtml
    :type: boolean
    :Default: true
    :required: false

    If TRUE the cropped string will respect HTML tags and entities. Technically that means, that cropHTML() is called rather than crop()
