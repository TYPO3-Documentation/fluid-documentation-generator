..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/DebugViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/tree/main/src/ViewHelpers/DebugViewHelper.php
:navigation-title: debug
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-debug:

============================
Debug ViewHelper `<f:debug>`
============================

This ViewHelper is only meant to be used during development.

Examples
========

Inline notation and custom title
--------------------------------

::

    {object -> f:debug(title: 'Custom title')}

Output::

    all properties of {object} nicely highlighted (with custom title)

Only output the type
--------------------

::

    {object -> f:debug(typeOnly: true)}

Output::

    the type or class name of {object}

.. _typo3fluid-fluid-debug_source:

Source code
===========

Go to the source code of this ViewHelper: `DebugViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/DebugViewHelper.php>`__.

.. _typo3fluid-fluid-debug_arguments:

Arguments
=========

The following arguments are available for `<f:debug>`:

..  contents::
    :local:


.. _typo3fluid-fluid-debug-typeonly_argument:

typeOnly
--------

..  confval:: typeOnly
    :name: typo3fluid-fluid-debug-typeonly
    :type: boolean
    :required: false

    If TRUE, debugs only the type of variables

.. _typo3fluid-fluid-debug-levels_argument:

levels
------

..  confval:: levels
    :name: typo3fluid-fluid-debug-levels
    :type: integer
    :Default: 5
    :required: false

    Levels to render when rendering nested objects/arrays

.. _typo3fluid-fluid-debug-html_argument:

html
----

..  confval:: html
    :name: typo3fluid-fluid-debug-html
    :type: boolean
    :required: false

    Render HTML. If FALSE, output is indented plaintext
