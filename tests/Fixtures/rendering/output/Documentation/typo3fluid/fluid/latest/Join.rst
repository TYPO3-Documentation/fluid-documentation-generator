..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/JoinViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/tree/main/src/ViewHelpers/JoinViewHelper.php
:navigation-title: join
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-join:

==========================
Join ViewHelper `<f:join>`
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

.. _typo3fluid-fluid-join_source:

Source code
===========

Go to the source code of this ViewHelper: `JoinViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/JoinViewHelper.php>`__.

.. _typo3fluid-fluid-join_arguments:

Arguments
=========

The following arguments are available for `<f:join>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3fluid-fluid-join-value_argument:

..  confval:: value
    :name: typo3fluid-fluid-join-value
    :type: mixed
    :required: false

    An array

.. _typo3fluid-fluid-join-separator_argument:

..  confval:: separator
    :name: typo3fluid-fluid-join-separator
    :type: string
    :required: false

    The separator

.. _typo3fluid-fluid-join-separatorlast_argument:

..  confval:: separatorLast
    :name: typo3fluid-fluid-join-separatorlast
    :type: string
    :required: false

    The separator for the last pair.
