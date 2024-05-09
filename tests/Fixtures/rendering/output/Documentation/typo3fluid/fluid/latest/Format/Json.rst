:navigation-title: format.json
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-format-json:

========================================
format.json ViewHelper `<f:format.json>`
========================================


Wrapper for PHPs :php:`json_encode` function.
See https://www.php.net/manual/function.json-encode.php.

Examples
========

Encoding a view variable
------------------------

::

   {someArray -> f:format.json()}

``["array","values"]``
Depending on the value of ``{someArray}``.

Associative array
-----------------

::

   {f:format.json(value: {foo: 'bar', bar: 'baz'})}

``{"foo":"bar","bar":"baz"}``

Non associative array with forced object
----------------------------------------

::

   {f:format.json(value: {0: 'bar', 1: 'baz'}, forceObject: true)}

``{"0":"bar","1":"baz"}``


.. _typo3fluid-fluid-format-json_arguments:

Arguments
=========


.. _typo3fluid-fluid-format-json-value:

value
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   The incoming data to convert, or null if VH children should be used

.. _typo3fluid-fluid-format-json-forceobject:

forceObject
-----------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   Outputs an JSON object rather than an array
