..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/SplitViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/tree/main/src/ViewHelpers/SplitViewHelper.php
:navigation-title: split

.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-split:

============================
Split ViewHelper `<f:split>`
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

.. _typo3fluid-fluid-split_source:

Source code
===========

Go to the source code of this ViewHelper: `SplitViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/SplitViewHelper.php>`__.

.. _typo3fluid-fluid-split_arguments:

Arguments
=========

The following arguments are available for `<f:split>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3fluid-fluid-split-value_argument:

..  confval:: value
    :name: typo3fluid-fluid-split-value
    :type: string
    :required: false

    The string to explode

.. _typo3fluid-fluid-split-separator_argument:

..  confval:: separator
    :name: typo3fluid-fluid-split-separator
    :type: string
    :required: true

    Separator string to explode with

.. _typo3fluid-fluid-split-limit_argument:

..  confval:: limit
    :name: typo3fluid-fluid-split-limit
    :type: mixed
    :default: `9223372036854775807`
    :required: false

    If limit is positive, a maximum of $limit items will be returned. If limit is negative, all items except for the last $limit items will be returned. 0 will be treated as 1.
