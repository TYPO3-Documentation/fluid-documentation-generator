:navigation-title: format.htmlentitiesDecode
.. include:: /Includes.rst.txt

.. _typo3-fluid-format-htmlentitiesdecode:

====================================================================
format.htmlentitiesDecode ViewHelper `<f:format.htmlentitiesDecode>`
====================================================================


Applies :php:`html_entity_decode()` to a value.
See https://www.php.net/html_entity_decode.

Examples
========

Default notation
----------------

::

   <f:format.htmlentitiesDecode>{text}</f:format.htmlentitiesDecode>

Text containing the following escaped signs: ``&amp;`` ``&quot;`` ``&#039;`` ``&lt;`` ``&gt;``, will be processed by :php:`html_entity_decode()`.
These will result in: ``&`` ``"`` ``'`` ``<`` ``>``.

Inline notation
---------------

::

   {text -> f:format.htmlentitiesDecode(encoding: 'ISO-8859-1')}

Text containing the following escaped signs: ``&amp;`` ``&quot;`` ``&#039;`` ``&lt;`` ``&gt;``, will be processed by :php:`html_entity_decode()`.
These will result in: ``&`` ``"`` ``'`` ``<`` ``>``.

But encoded as ISO-8859-1.


.. _typo3-fluid-format-htmlentitiesdecode_arguments:

Arguments
=========


.. _typo3-fluid-format-htmlentitiesdecode-value:

value
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   String to format

.. _typo3-fluid-format-htmlentitiesdecode-keepquotes:

keepQuotes
----------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   If TRUE, single and double quotes won't be replaced (sets ENT_NOQUOTES flag).

.. _typo3-fluid-format-htmlentitiesdecode-encoding:

encoding
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define the encoding used when converting characters (Default: UTF-8).
