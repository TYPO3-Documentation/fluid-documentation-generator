..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/AliasViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/tree/main/src/ViewHelpers/AliasViewHelper.php
:navigation-title: alias
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-alias:

============================
Alias ViewHelper `<f:alias>`
============================



Declares new variables which are aliases of other variables.
Takes a "map"-Parameter which is an associative array which defines the shorthand mapping.

The variables are only declared inside the ``<f:alias>...</f:alias>`` tag. After the
closing tag, all declared variables are removed again.

Using this ViewHelper can be a sign of weak architecture. If you end up
using it extensively you might want to fine-tune your "view model" (the
data you assign to the view).

Examples
========

Single alias
------------

::

    <f:alias map="{x: 'foo'}">{x}</f:alias>

Output::

    foo

Multiple mappings
-----------------

::

    <f:alias map="{x: foo.bar.baz, y: foo.bar.baz.name}">
        {x.name} or {y}
    </f:alias>

Output::

    [name] or [name]

Depending on ``{foo.bar.baz}``.

.. _typo3fluid-fluid-alias_source:

Source code
===========

Go to the source code of this ViewHelper: `AliasViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/AliasViewHelper.php>`__.

.. _typo3fluid-fluid-alias_arguments:

Arguments
=========

The following arguments are available for `<f:alias>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3fluid-fluid-alias-map_argument:

..  confval:: map
    :name: typo3fluid-fluid-alias-map
    :type: mixed
    :required: true

    Array that specifies which variables should be mapped to which alias
