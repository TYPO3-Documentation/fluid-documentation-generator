:navigation-title: format.currency
.. include:: /Includes.rst.txt

.. _typo3-fluid-format-currency:

================================================
format.currency ViewHelper `<f:format.currency>`
================================================


Formats a given float to a currency representation.

Examples
========

Defaults
--------

::

   <f:format.currency>123.456</f:format.currency>

Output::

    123,46

All parameters
--------------

::

   <f:format.currency decimalSeparator="." thousandsSeparator="," decimals="2"
       currencySign="$" prependCurrency="true" separateCurrency="false"
   >
       54321
   </f:format.currency>

Output::

    $54,321.00

Inline notation
---------------

::

   {someNumber -> f:format.currency(thousandsSeparator: ',', currencySign: 'EUR')}

Output::

   54,321,00 EUR

Depending on the value of ``{someNumber}``.

Use dash for decimals without value
-----------------------------------

::

   <f:format.currency useDash="true">123.00</f:format.currency>

Output::

    123,-


.. _typo3-fluid-format-currency_arguments:

Arguments
=========


.. _typo3-fluid-format-currency-currencysign:

currencySign
------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The currency sign, eg $ or .

.. _typo3-fluid-format-currency-decimalseparator:

decimalSeparator
----------------

:aspect:`DataType`
   string

:aspect:`Default`
   ','

:aspect:`Required`
   false
:aspect:`Description`
   The separator for the decimal point.

.. _typo3-fluid-format-currency-thousandsseparator:

thousandsSeparator
------------------

:aspect:`DataType`
   string

:aspect:`Default`
   '.'

:aspect:`Required`
   false
:aspect:`Description`
   The thousands separator.

.. _typo3-fluid-format-currency-prependcurrency:

prependCurrency
---------------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   Select if the currency sign should be prepended

.. _typo3-fluid-format-currency-separatecurrency:

separateCurrency
----------------

:aspect:`DataType`
   boolean

:aspect:`Default`
   true

:aspect:`Required`
   false
:aspect:`Description`
   Separate the currency sign from the number by a single space, defaults to true due to backwards compatibility

.. _typo3-fluid-format-currency-decimals:

decimals
--------

:aspect:`DataType`
   mixed

:aspect:`Default`
   2

:aspect:`Required`
   false
:aspect:`Description`
   Set decimals places.

.. _typo3-fluid-format-currency-usedash:

useDash
-------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   Use the dash instead of decimal 00
