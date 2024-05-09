..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/ReplaceViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/tree/main/src/ViewHelpers/ReplaceViewHelper.php
:navigation-title: replace
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-replace:

================================
Replace ViewHelper `<f:replace>`
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

.. _typo3fluid-fluid-replace_source:

Source code
===========

Go to the source code of this ViewHelper: `ReplaceViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/ReplaceViewHelper.php>`__.

.. _typo3fluid-fluid-replace_arguments:

Arguments
=========

The following arguments are available for `<f:replace>`:

..  contents::
    :local:


.. _typo3fluid-fluid-replace-value_argument:

value
-----

..  confval:: value
    :name: typo3fluid-fluid-replace-value
    :type: string
    :required: false

    

.. _typo3fluid-fluid-replace-search_argument:

search
------

..  confval:: search
    :name: typo3fluid-fluid-replace-search
    :type: mixed
    :required: false

    

.. _typo3fluid-fluid-replace-replace_argument:

replace
-------

..  confval:: replace
    :name: typo3fluid-fluid-replace-replace
    :type: mixed
    :required: true
