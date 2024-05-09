:navigation-title: format.htmlentities
.. include:: /Includes.rst.txt

.. _typo3-fluid-format-htmlentities:

========================================================
format.htmlentities ViewHelper `<f:format.htmlentities>`
========================================================


Applies :php:`htmlentities()` escaping to a value.
See https://www.php.net/manual/function.htmlentities.php.

Examples
========

Default notation
----------------

::

   <f:format.htmlentities>{text}</f:format.htmlentities>

Text containing the following signs ``&`` ``"`` ``'`` ``<`` ``>`` will be processed by :php:`htmlentities()`.
These will result in: ``&amp;`` ``&quot;`` ``&#039;`` ``&lt;`` ``&gt;``.

Inline notation
---------------

::

   {text -> f:format.htmlentities(encoding: 'ISO-8859-1')}

Text containing the following signs ``&`` ``"`` ``'`` ``<`` ``>`` will be processed by :php:`htmlentities()`.
These will result in: ``&amp;`` ``&quot;`` ``&#039;`` ``&lt;`` ``&gt;``.

But encoded as ISO-8859-1.


.. _typo3-fluid-format-htmlentities_arguments:

Arguments
=========


.. _typo3-fluid-format-htmlentities-value:

value
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   String to format

.. _typo3-fluid-format-htmlentities-keepquotes:

keepQuotes
----------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   If TRUE, single and double quotes won't be replaced (sets ENT_NOQUOTES flag).

.. _typo3-fluid-format-htmlentities-encoding:

encoding
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define the encoding used when converting characters (Default: UTF-8

.. _typo3-fluid-format-htmlentities-doubleencode:

doubleEncode
------------

:aspect:`DataType`
   boolean

:aspect:`Default`
   true

:aspect:`Required`
   false
:aspect:`Description`
   If FALSE existing html entities won't be encoded, the default is to convert everything.
