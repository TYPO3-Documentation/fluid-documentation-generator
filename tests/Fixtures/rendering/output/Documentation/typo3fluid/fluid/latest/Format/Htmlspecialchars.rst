:navigation-title: format.htmlspecialchars
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-format-htmlspecialchars:

================================================================
format.htmlspecialchars ViewHelper `<f:format.htmlspecialchars>`
================================================================


Applies PHP ``htmlspecialchars()`` escaping to a value.

See http://www.php.net/manual/function.htmlspecialchars.php

Examples
========

Default notation
----------------

::

    <f:format.htmlspecialchars>{text}</f:format.htmlspecialchars>

Output::

    Text with & " ' < > * replaced by HTML entities (htmlspecialchars applied).

Inline notation
---------------

::

    {text -> f:format.htmlspecialchars(encoding: 'ISO-8859-1')}

Output::

    Text with & " ' < > * replaced by HTML entities (htmlspecialchars applied).


.. _typo3fluid-fluid-format-htmlspecialchars_arguments:

Arguments
=========


.. _typo3fluid-fluid-format-htmlspecialchars-value:

value
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Value to format

.. _typo3fluid-fluid-format-htmlspecialchars-keepquotes:

keepQuotes
----------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   If TRUE quotes will not be replaced (ENT_NOQUOTES)

.. _typo3fluid-fluid-format-htmlspecialchars-encoding:

encoding
--------

:aspect:`DataType`
   string

:aspect:`Default`
   'UTF-8'

:aspect:`Required`
   false
:aspect:`Description`
   Encoding

.. _typo3fluid-fluid-format-htmlspecialchars-doubleencode:

doubleEncode
------------

:aspect:`DataType`
   boolean

:aspect:`Default`
   true

:aspect:`Required`
   false
:aspect:`Description`
   If FALSE html entities will not be encoded
