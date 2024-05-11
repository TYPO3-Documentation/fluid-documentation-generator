..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Format/CurrencyViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Format/CurrencyViewHelper.php
:navigation-title: format.currency
.. include:: /Includes.rst.txt

.. _typo3-fluid-format-currency:

================================================
Format.currency ViewHelper `<f:format.currency>`
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

.. _typo3-fluid-format-currency_source:

Source code
===========

Go to the source code of this ViewHelper: `CurrencyViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Format/CurrencyViewHelper.php>`__.

.. _typo3-fluid-format-currency_arguments:

Arguments
=========

The following arguments are available for `<f:format.currency>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3-fluid-format-currency-currencysign_argument:

..  confval:: currencySign
    :name: typo3-fluid-format-currency-currencysign
    :type: string
    :required: false

    The currency sign, eg $ or .

.. _typo3-fluid-format-currency-decimalseparator_argument:

..  confval:: decimalSeparator
    :name: typo3-fluid-format-currency-decimalseparator
    :type: string
    :Default: ','
    :required: false

    The separator for the decimal point.

.. _typo3-fluid-format-currency-thousandsseparator_argument:

..  confval:: thousandsSeparator
    :name: typo3-fluid-format-currency-thousandsseparator
    :type: string
    :Default: '.'
    :required: false

    The thousands separator.

.. _typo3-fluid-format-currency-prependcurrency_argument:

..  confval:: prependCurrency
    :name: typo3-fluid-format-currency-prependcurrency
    :type: boolean
    :required: false

    Select if the currency sign should be prepended

.. _typo3-fluid-format-currency-separatecurrency_argument:

..  confval:: separateCurrency
    :name: typo3-fluid-format-currency-separatecurrency
    :type: boolean
    :Default: true
    :required: false

    Separate the currency sign from the number by a single space, defaults to true due to backwards compatibility

.. _typo3-fluid-format-currency-decimals_argument:

..  confval:: decimals
    :name: typo3-fluid-format-currency-decimals
    :type: mixed
    :Default: 2
    :required: false

    Set decimals places.

.. _typo3-fluid-format-currency-usedash_argument:

..  confval:: useDash
    :name: typo3-fluid-format-currency-usedash
    :type: boolean
    :required: false

    Use the dash instead of decimal 00
