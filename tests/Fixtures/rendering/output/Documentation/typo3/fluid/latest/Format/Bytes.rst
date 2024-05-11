..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Format/BytesViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Format/BytesViewHelper.php
:navigation-title: format.bytes
.. include:: /Includes.rst.txt

.. _typo3-fluid-format-bytes:

==========================================
Format.bytes ViewHelper `<f:format.bytes>`
==========================================



Formats an integer with a byte count into human readable form.

Examples
========

Simple
------

::

   {fileSize -> f:format.bytes()}

``123 KB``
Depending on the value of ``{fileSize}``.

With arguments
--------------

::

   {fileSize -> f:format.bytes(decimals: 2, decimalSeparator: '.', thousandsSeparator: ',')}

``1,023.00 B``
Depending on the value of ``{fileSize}``.

You may provide an own set of units, like this: ``B,KB,MB,GB,TB,PB,EB,ZB,YB``.

Custom units
------------

::

   {fileSize -> f:format.bytes(units: '{f:translate(\'viewhelper.format.bytes.units\', \'fluid\')}'

``123 KB``
Depending on the value of ``{fileSize}``.

.. _typo3-fluid-format-bytes_source:

Source code
===========

Go to the source code of this ViewHelper: `BytesViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Format/BytesViewHelper.php>`__.

.. _typo3-fluid-format-bytes_arguments:

Arguments
=========

The following arguments are available for `<f:format.bytes>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3-fluid-format-bytes-value_argument:

..  confval:: value
    :name: typo3-fluid-format-bytes-value
    :type: mixed
    :required: false

    The incoming data to convert, or NULL if VH children should be used

.. _typo3-fluid-format-bytes-decimals_argument:

..  confval:: decimals
    :name: typo3-fluid-format-bytes-decimals
    :type: mixed
    :required: false

    The number of digits after the decimal point

.. _typo3-fluid-format-bytes-decimalseparator_argument:

..  confval:: decimalSeparator
    :name: typo3-fluid-format-bytes-decimalseparator
    :type: string
    :Default: '.'
    :required: false

    The decimal point character

.. _typo3-fluid-format-bytes-thousandsseparator_argument:

..  confval:: thousandsSeparator
    :name: typo3-fluid-format-bytes-thousandsseparator
    :type: string
    :Default: ','
    :required: false

    The character for grouping the thousand digits

.. _typo3-fluid-format-bytes-units_argument:

..  confval:: units
    :name: typo3-fluid-format-bytes-units
    :type: string
    :required: false

    Comma separated list of available units, default is LocalizationUtility::translate('viewhelper.format.bytes.units', 'fluid')
