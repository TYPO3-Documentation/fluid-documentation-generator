:navigation-title: format.raw
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-format-raw:

======================================
format.raw ViewHelper `<f:format.raw>`
======================================


Outputs an argument/value without any escaping. Is normally used to output
an ObjectAccessor which should not be escaped, but output as-is.

PAY SPECIAL ATTENTION TO SECURITY HERE (especially Cross Site Scripting),
as the output is NOT SANITIZED!

Examples
========

Child nodes
-----------

::

    <f:format.raw>{string}</f:format.raw>

Output::

    (Content of ``{string}`` without any conversion/escaping)

Value attribute
---------------

::

    <f:format.raw value="{string}" />

Output::

    (Content of ``{string}`` without any conversion/escaping)

Inline notation
---------------

::

    {string -> f:format.raw()}

Output::

    (Content of ``{string}`` without any conversion/escaping)


.. _typo3fluid-fluid-format-raw_arguments:

Arguments
=========


.. _typo3fluid-fluid-format-raw-value:

value
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   The value to output
