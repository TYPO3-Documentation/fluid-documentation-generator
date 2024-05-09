:navigation-title: debug
.. include:: /Includes.rst.txt

.. _typo3-fluid-debug:

============================
debug ViewHelper `<f:debug>`
============================


This ViewHelper generates a HTML dump of the tagged variable.

Examples
========

Simple
------

::

   <f:debug>{testVariables.array}</f:debug>

foobarbazfoo

All Features
------------

::

   <f:debug title="My Title" maxDepth="5"
       blacklistedClassNames="{0:'Tx_BlogExample_Domain_Model_Administrator'}"
       blacklistedPropertyNames="{0:'posts'}"
       plainText="true" ansiColors="false"
       inline="true"
       >
           {blogs}
       </f:debug>

[A HTML view of the var_dump]


.. _typo3-fluid-debug_arguments:

Arguments
=========


.. _typo3-fluid-debug-title:

title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Optional custom title for the debug output

.. _typo3-fluid-debug-maxdepth:

maxDepth
--------

:aspect:`DataType`
   mixed

:aspect:`Default`
   8

:aspect:`Required`
   false
:aspect:`Description`
   Sets the max recursion depth of the dump (defaults to 8). De- or increase the number according to your needs and memory limit.

.. _typo3-fluid-debug-plaintext:

plainText
---------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   If TRUE, the dump is in plain text, if FALSE the debug output is in HTML format.

.. _typo3-fluid-debug-ansicolors:

ansiColors
----------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   If TRUE, ANSI color codes is added to the plaintext output, if FALSE (default) the plaintext debug output not colored.

.. _typo3-fluid-debug-inline:

inline
------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   If TRUE, the dump is rendered at the position of the <f:debug> tag. If FALSE (default), the dump is displayed at the top of the page.

.. _typo3-fluid-debug-blacklistedclassnames:

blacklistedClassNames
---------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   An array of class names (RegEx) to be filtered. Default is an array of some common class names.

.. _typo3-fluid-debug-blacklistedpropertynames:

blacklistedPropertyNames
------------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   An array of property names and/or array keys (RegEx) to be filtered. Default is an array of some common property names.
