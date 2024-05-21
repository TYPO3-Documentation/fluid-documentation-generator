..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/OrViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/main/src/ViewHelpers/OrViewHelper.php
:navigation-title: or

.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-or:

======================
Or ViewHelper `<f:or>`
======================



Or ViewHelper

If content is null use alternative text.

Usage of f:or
=============

::

    {f:variable(name:'fallback',value:'this is not the variable you\'re looking for')}
    {undefinedVariable -> f:or(alternative:fallback)}

Usage of ternary operator
=========================

In some cases (e.g. when you want to check for empty instead of null)
it might be more handy to use a ternary operator instead of f:or

::

    {emptyVariable ?: 'this is an alterative text'}

.. _typo3fluid-fluid-or_source:

Source code
===========

Go to the source code of this ViewHelper: `OrViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/OrViewHelper.php>`__.

.. _typo3fluid-fluid-or_arguments:

Arguments
=========

The following arguments are available for `<f:or>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3fluid-fluid-or-content_argument:

..  confval:: content
    :name: typo3fluid-fluid-or-content
    :type: mixed
    :required: false

    Content to check if null

.. _typo3fluid-fluid-or-alternative_argument:

..  confval:: alternative
    :name: typo3fluid-fluid-or-alternative
    :type: mixed
    :required: false

    Alternative if content is null

.. _typo3fluid-fluid-or-arguments_argument:

..  confval:: arguments
    :name: typo3fluid-fluid-or-arguments
    :type: mixed
    :required: false

    Arguments to be replaced in the resulting string, using sprintf
