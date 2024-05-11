..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Format/PaddingViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Format/PaddingViewHelper.php
:navigation-title: format.padding
.. include:: /Includes.rst.txt

.. _typo3-fluid-format-padding:

==============================================
Format.padding ViewHelper `<f:format.padding>`
==============================================



Formats a string using PHPs :php:`str_pad` function.
See https://www.php.net/manual/en/function.str-pad.

Examples
========

Defaults
--------

::

   <f:format.padding padLength="10">TYPO3</f:format.padding>

Output::

    TYPO3

``TYPO3``

Specify padding string
----------------------

::

   <f:format.padding padLength="10" padString="-=">TYPO3</f:format.padding>

``TYPO3-=-=-``

Specify padding type
--------------------

::

   <f:format.padding padLength="10" padString="-" padType="both">TYPO3</f:format.padding>

``--TYPO3---``

.. _typo3-fluid-format-padding_source:

Source code
===========

Go to the source code of this ViewHelper: `PaddingViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Format/PaddingViewHelper.php>`__.

.. _typo3-fluid-format-padding_arguments:

Arguments
=========

The following arguments are available for `<f:format.padding>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3-fluid-format-padding-value_argument:

..  confval:: value
    :name: typo3-fluid-format-padding-value
    :type: string
    :required: false

    String to format

.. _typo3-fluid-format-padding-padlength_argument:

..  confval:: padLength
    :name: typo3-fluid-format-padding-padlength
    :type: mixed
    :required: true

    Length of the resulting string. If the value of pad_length is negative or less than the length of the input string, no padding takes place.

.. _typo3-fluid-format-padding-padstring_argument:

..  confval:: padString
    :name: typo3-fluid-format-padding-padstring
    :type: string
    :Default: ' '
    :required: false

    The padding string

.. _typo3-fluid-format-padding-padtype_argument:

..  confval:: padType
    :name: typo3-fluid-format-padding-padtype
    :type: string
    :Default: 'right'
    :required: false

    Append the padding at this site (Possible values: right,left,both. Default: right)
