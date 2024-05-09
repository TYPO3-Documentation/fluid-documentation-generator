:navigation-title: format.padding
.. include:: /Includes.rst.txt

.. _typo3-fluid-format-padding:

==============================================
format.padding ViewHelper `<f:format.padding>`
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


.. _typo3-fluid-format-padding_arguments:

Arguments
=========


.. _typo3-fluid-format-padding-value:

value
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   String to format

.. _typo3-fluid-format-padding-padlength:

padLength
---------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Length of the resulting string. If the value of pad_length is negative or less than the length of the input string, no padding takes place.

.. _typo3-fluid-format-padding-padstring:

padString
---------

:aspect:`DataType`
   string

:aspect:`Default`
   ' '

:aspect:`Required`
   false
:aspect:`Description`
   The padding string

.. _typo3-fluid-format-padding-padtype:

padType
-------

:aspect:`DataType`
   string

:aspect:`Default`
   'right'

:aspect:`Required`
   false
:aspect:`Description`
   Append the padding at this site (Possible values: right,left,both. Default: right)
