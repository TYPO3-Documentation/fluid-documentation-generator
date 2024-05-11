..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Debug/RenderViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Debug/RenderViewHelper.php
:navigation-title: debug.render
.. include:: /Includes.rst.txt

.. _typo3-fluid-debug-render:

==========================================
Debug.render ViewHelper `<f:debug.render>`
==========================================



Debuggable version of :ref:`f:render <typo3-fluid-render>` - performs the
same rendering operation but wraps the output with HTML that can be
inspected with the admin panel in frontend.

Replaces ``f:render`` when the admin panel decides (see
:php:`ViewHelperResolver` class). Also possible to use explicitly by using
``f:debug.render`` instead of the normal ``f:render`` statement.

.. _typo3-fluid-debug-render_source:

Source code
===========

Go to the source code of this ViewHelper: `RenderViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Debug/RenderViewHelper.php>`__.

.. _typo3-fluid-debug-render_arguments:

Arguments
=========

The following arguments are available for `<f:debug.render>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3-fluid-debug-render-debug_argument:

..  confval:: debug
    :name: typo3-fluid-debug-render-debug
    :type: boolean
    :Default: true
    :required: false

    If true, the admin panel shows debug information if activated,

.. _typo3-fluid-debug-render-section_argument:

..  confval:: section
    :name: typo3-fluid-debug-render-section
    :type: string
    :required: false

    Section to render - combine with partial to render section in partial

.. _typo3-fluid-debug-render-partial_argument:

..  confval:: partial
    :name: typo3-fluid-debug-render-partial
    :type: string
    :required: false

    Partial to render, with or without section

.. _typo3-fluid-debug-render-arguments_argument:

..  confval:: arguments
    :name: typo3-fluid-debug-render-arguments
    :type: mixed
    :Default: array ()
    :required: false

    Array of variables to be transferred. Use {_all} for all variables

.. _typo3-fluid-debug-render-optional_argument:

..  confval:: optional
    :name: typo3-fluid-debug-render-optional
    :type: boolean
    :required: false

    If TRUE, considers the *section* optional. Partial never is.

.. _typo3-fluid-debug-render-default_argument:

..  confval:: default
    :name: typo3-fluid-debug-render-default
    :type: mixed
    :required: false

    Value (usually string) to be displayed if the section or partial does not exist

.. _typo3-fluid-debug-render-contentas_argument:

..  confval:: contentAs
    :name: typo3-fluid-debug-render-contentas
    :type: string
    :required: false

    If used, renders the child content and adds it as a template variable with this name for use in the partial/section
