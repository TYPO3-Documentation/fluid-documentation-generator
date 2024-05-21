..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/LayoutViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/tree/main/src/ViewHelpers/LayoutViewHelper.php
:navigation-title: layout

.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-layout:

==============================
Layout ViewHelper `<f:layout>`
==============================



With this tag, you can select a layout to be used for the current template.

Examples
========

::

    <f:layout name="main" />

Output::

    (no output)

.. _typo3fluid-fluid-layout_source:

Source code
===========

Go to the source code of this ViewHelper: `LayoutViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/LayoutViewHelper.php>`__.

.. _typo3fluid-fluid-layout_arguments:

Arguments
=========

The following arguments are available for `<f:layout>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3fluid-fluid-layout-name_argument:

..  confval:: name
    :name: typo3fluid-fluid-layout-name
    :type: string
    :required: false

    Name of layout to use. If none given, "Default" is used.
