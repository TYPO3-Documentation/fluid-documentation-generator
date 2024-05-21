..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/Cache/DisableViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/main/src/ViewHelpers/Cache/DisableViewHelper.php
:navigation-title: cache.disable

.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-cache-disable:

============================================
Cache.disable ViewHelper `<f:cache.disable>`
============================================



ViewHelper to disable template compiling

Inserting this ViewHelper at any point in the template,
including inside conditions which do not get rendered,
will forcibly disable the caching/compiling of the full
template file to a PHP class.

Use this if for whatever reason your platform is unable
to create or load PHP classes (for example on read-only
file systems or when using an incompatible default cache
backend).

Passes through anything you place inside the ViewHelper,
so can safely be used as container tag, as self-closing
or with inline syntax - all with the same result.

Examples
========

Self-closing
------------

::

    <f:cache.disable />

Inline mode
-----------

::

    {f:cache.disable()}


Container tag
-------------

::

    <f:cache.disable>
       Some output or Fluid code
    </f:cache.disable>

Additional output is also not compilable because of the ViewHelper

.. _typo3fluid-fluid-cache-disable_source:

Source code
===========

Go to the source code of this ViewHelper: `DisableViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/Cache/DisableViewHelper.php>`__.

..  note:: `<f:cache.disable>` has no arguments.
