:navigation-title: cObject
.. include:: /Includes.rst.txt

.. _typo3-fluid-cobject:

================================
cObject ViewHelper `<f:cObject>`
================================


This ViewHelper renders CObjects from the global TypoScript configuration.

.. note::
   You have to ensure proper escaping (htmlspecialchars/intval/etc.) on your own!

Examples
========

Render lib object
-----------------

::

   <f:cObject typoscriptObjectPath="lib.someLibObject" />

Rendered :typoscript:`lib.someLibObject`.

Specify cObject data & current value
------------------------------------

::

   <f:cObject typoscriptObjectPath="lib.customHeader" data="{article}" currentValueKey="title" />

Rendered :typoscript:`lib.customHeader`. Data and current value will be available in TypoScript.

Inline notation
---------------

::

   {article -> f:cObject(typoscriptObjectPath: 'lib.customHeader')}

Rendered :typoscript:`lib.customHeader`. Data will be available in TypoScript.

Accessing the data in TypoScript
--------------------------------

.. code-block:: typoscript

   lib.customHeader = COA
   lib.customHeader {
       10 = TEXT
       10.field = author
       20 = TEXT
       20.current = 1
   }

When passing an object with ``{data}``, the properties of the object are accessible with :typoscript:`.field` in
TypoScript. If only a single value is passed or the ``currentValueKey`` is specified, :typoscript:`.current = 1`
can be used in the TypoScript.


.. _typo3-fluid-cobject_arguments:

Arguments
=========


.. _typo3-fluid-cobject-data:

data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   The data to be used for rendering the cObject. Can be an object, array or string. If this argument is not set, child nodes will be used

.. _typo3-fluid-cobject-typoscriptobjectpath:

typoscriptObjectPath
--------------------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   The TypoScript setup path of the TypoScript object to render

.. _typo3-fluid-cobject-currentvaluekey:

currentValueKey
---------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   CurrentValueKey

.. _typo3-fluid-cobject-table:

table
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The table name associated with "data" argument. Typically tt_content or one of your custom tables. This argument should be set if rendering a FILES cObject where file references are used, or if the data argument is a database record.
