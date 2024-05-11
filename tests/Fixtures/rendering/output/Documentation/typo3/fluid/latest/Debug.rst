..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/DebugViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/DebugViewHelper.php
:navigation-title: debug
.. include:: /Includes.rst.txt

.. _typo3-fluid-debug:

============================
Debug ViewHelper `<f:debug>`
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

.. _typo3-fluid-debug_source:

Source code
===========

Go to the source code of this ViewHelper: `DebugViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/DebugViewHelper.php>`__.

.. _typo3-fluid-debug_arguments:

Arguments
=========

The following arguments are available for `<f:debug>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3-fluid-debug-title_argument:

..  confval:: title
    :name: typo3-fluid-debug-title
    :type: string
    :required: false

    Optional custom title for the debug output

.. _typo3-fluid-debug-maxdepth_argument:

..  confval:: maxDepth
    :name: typo3-fluid-debug-maxdepth
    :type: mixed
    :Default: 8
    :required: false

    Sets the max recursion depth of the dump (defaults to 8). De- or increase the number according to your needs and memory limit.

.. _typo3-fluid-debug-plaintext_argument:

..  confval:: plainText
    :name: typo3-fluid-debug-plaintext
    :type: boolean
    :required: false

    If TRUE, the dump is in plain text, if FALSE the debug output is in HTML format.

.. _typo3-fluid-debug-ansicolors_argument:

..  confval:: ansiColors
    :name: typo3-fluid-debug-ansicolors
    :type: boolean
    :required: false

    If TRUE, ANSI color codes is added to the plaintext output, if FALSE (default) the plaintext debug output not colored.

.. _typo3-fluid-debug-inline_argument:

..  confval:: inline
    :name: typo3-fluid-debug-inline
    :type: boolean
    :required: false

    If TRUE, the dump is rendered at the position of the <f:debug> tag. If FALSE (default), the dump is displayed at the top of the page.

.. _typo3-fluid-debug-blacklistedclassnames_argument:

..  confval:: blacklistedClassNames
    :name: typo3-fluid-debug-blacklistedclassnames
    :type: mixed
    :required: false

    An array of class names (RegEx) to be filtered. Default is an array of some common class names.

.. _typo3-fluid-debug-blacklistedpropertynames_argument:

..  confval:: blacklistedPropertyNames
    :name: typo3-fluid-debug-blacklistedpropertynames
    :type: mixed
    :required: false

    An array of property names and/or array keys (RegEx) to be filtered. Default is an array of some common property names.
