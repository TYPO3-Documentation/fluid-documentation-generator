:navigation-title: format.cdata
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-format-cdata:

==========================================
format.cdata ViewHelper `<f:format.cdata>`
==========================================


Outputs an argument/value without any escaping and wraps it with CDATA tags.

PAY SPECIAL ATTENTION TO SECURITY HERE (especially Cross Site Scripting),
as the output is NOT SANITIZED!

Examples
========

Child nodes
-----------

::

    <f:format.cdata>{string}</f:format.cdata>

Output::

    <![CDATA[(Content of {string} without any conversion/escaping)]]>

Value attribute
---------------

::

    <f:format.cdata value="{string}" />

Output::

    <![CDATA[(Content of {string} without any conversion/escaping)]]>

Inline notation
---------------

::

    {string -> f:format.cdata()}

Output::

    <![CDATA[(Content of {string} without any conversion/escaping)]]>


.. _typo3fluid-fluid-format-cdata_arguments:

Arguments
=========


.. _typo3fluid-fluid-format-cdata-value:

value
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   The value to output
