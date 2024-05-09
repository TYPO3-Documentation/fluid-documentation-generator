:navigation-title: replace
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-replace:

================================
replace ViewHelper `<f:replace>`
================================


The ReplaceViewHelper replaces one or multiple strings with other
strings. This ViewHelper mimicks PHP's :php:`str_replace()` function.
However, it's also possible to provide replace pairs as associative array
via the "replace" argument.


Examples
========

Replace a single string
-----------------------
::

   <f:replace value="Hello World" search="World" replace="Fluid" />

.. code-block:: text

   Hello Fluid


Replace multiple strings
------------------------
::

   <f:replace value="Hello World" search="{0: 'World', 1: 'Hello'}" replace="{0: 'Fluid', 1: 'Hi'}" />

.. code-block:: text

   Hi Fluid


Replace multiple strings using associative array
------------------------------------------------
::

   <f:replace value="Hello World" replace="{'World': 'Fluid', 'Hello': 'Hi'}" />

.. code-block:: text

   Hi Fluid


.. _typo3fluid-fluid-replace_arguments:

Arguments
=========


.. _typo3fluid-fluid-replace-value:

value
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   

.. _typo3fluid-fluid-replace-search:

search
------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   

.. _typo3fluid-fluid-replace-replace:

replace
-------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
