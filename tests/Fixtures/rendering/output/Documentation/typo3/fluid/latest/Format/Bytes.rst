:navigation-title: format.bytes
.. include:: /Includes.rst.txt

.. _typo3-fluid-format-bytes:

==========================================
format.bytes ViewHelper `<f:format.bytes>`
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


.. _typo3-fluid-format-bytes_arguments:

Arguments
=========


.. _typo3-fluid-format-bytes-value:

value
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   The incoming data to convert, or NULL if VH children should be used

.. _typo3-fluid-format-bytes-decimals:

decimals
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   The number of digits after the decimal point

.. _typo3-fluid-format-bytes-decimalseparator:

decimalSeparator
----------------

:aspect:`DataType`
   string

:aspect:`Default`
   '.'

:aspect:`Required`
   false
:aspect:`Description`
   The decimal point character

.. _typo3-fluid-format-bytes-thousandsseparator:

thousandsSeparator
------------------

:aspect:`DataType`
   string

:aspect:`Default`
   ','

:aspect:`Required`
   false
:aspect:`Description`
   The character for grouping the thousand digits

.. _typo3-fluid-format-bytes-units:

units
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Comma separated list of available units, default is LocalizationUtility::translate('viewhelper.format.bytes.units', 'fluid')
