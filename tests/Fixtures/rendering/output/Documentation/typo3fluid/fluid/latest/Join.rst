:navigation-title: join
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-join:

==========================
join ViewHelper `<f:join>`
==========================


The JoinViewHelper combines elements from an array into a single string.
You can specify both a general separator and a special one for the last
element, which serves as the delimiter between the elements.


Examples
========

Simple join
-----------
::

   <f:join value="{0: '1', 1: '2', 2: '3'}" />

.. code-block:: text

   123


Join with separator
-------------------

::

   <f:join value="{0: '1', 1: '2', 2: '3'}" separator=", " />

.. code-block:: text

   1, 2, 3


Join with separator, and special one for the last
-------------------------------------------------

::

   <f:join value="{0: '1', 1: '2', 2: '3'}" separator=", " separatorLast=" and " />

.. code-block:: text

   1, 2 and 3


.. _typo3fluid-fluid-join_arguments:

Arguments
=========


.. _typo3fluid-fluid-join-value:

value
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   An array

.. _typo3fluid-fluid-join-separator:

separator
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The separator

.. _typo3fluid-fluid-join-separatorlast:

separatorLast
-------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The separator for the last pair.
