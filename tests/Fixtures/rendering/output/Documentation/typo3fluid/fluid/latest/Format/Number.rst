:navigation-title: format.number
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-format-number:

============================================
format.number ViewHelper `<f:format.number>`
============================================


Formats a number with custom precision, decimal point and grouped thousands.
See https://www.php.net/manual/function.number-format.php.

Examples
========

Defaults
--------

::

   <f:format.number>423423.234</f:format.number>

``423,423.20``

With all parameters
-------------------

::

   <f:format.number decimals="1" decimalSeparator="," thousandsSeparator=".">
       423423.234
   </f:format.number>

``423.423,2``


.. _typo3fluid-fluid-format-number_arguments:

Arguments
=========


.. _typo3fluid-fluid-format-number-decimals:

decimals
--------

:aspect:`DataType`
   mixed

:aspect:`Default`
   2

:aspect:`Required`
   false
:aspect:`Description`
   The number of digits after the decimal point

.. _typo3fluid-fluid-format-number-decimalseparator:

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

.. _typo3fluid-fluid-format-number-thousandsseparator:

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
