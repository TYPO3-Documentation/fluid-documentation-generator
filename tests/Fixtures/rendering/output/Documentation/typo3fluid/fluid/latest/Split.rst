:navigation-title: split
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-split:

============================
split ViewHelper `<f:split>`
============================


The SplitViewHelper splits a string by the specified separator, which
results in an array. The number of values in the resulting array can
be limited with the limit parameter, which results in an array where
the last item contains the remaining unsplit string.

This ViewHelper mimicks PHP's :php:`explode()` function.


Examples
========

Split with a separator
-----------------------
::

   <f:split value="1,5,8" separator="," />

.. code-block:: text

   {0: '1', 1: '5', 2: '8'}


Split using tag content as value
--------------------------------

::

   <f:split separator="-">1-5-8</f:split>

.. code-block:: text

   {0: '1', 1: '5', 2: '8'}


Split with a limit
-------------------

::

   <f:split value="1,5,8" separator="," limit="2" />

.. code-block:: text

   {0: '1', 1: '5,8'}


.. _typo3fluid-fluid-split_arguments:

Arguments
=========


.. _typo3fluid-fluid-split-value:

value
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The string to explode

.. _typo3fluid-fluid-split-separator:

separator
---------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Separator string to explode with

.. _typo3fluid-fluid-split-limit:

limit
-----

:aspect:`DataType`
   mixed

:aspect:`Default`
   9223372036854775807

:aspect:`Required`
   false
:aspect:`Description`
   If limit is positive, a maximum of $limit items will be returned. If limit is negative, all items except for the last $limit items will be returned. 0 will be treated as 1.
