..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/CountViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/main/src/ViewHelpers/CountViewHelper.php
:navigation-title: count

.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-count:

============================
Count ViewHelper `<f:count>`
============================



This ViewHelper counts elements of the specified array or countable object.

Examples
========

Count array elements
--------------------

::

    <f:count subject="{0:1, 1:2, 2:3, 3:4}" />

Output::

    4

inline notation
---------------

::

    {objects -> f:count()}

Output::

    10 (depending on the number of items in ``{objects}``)

.. _typo3fluid-fluid-count_source:

Source code
===========

Go to the source code of this ViewHelper: `CountViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/CountViewHelper.php>`__.

.. _typo3fluid-fluid-count_arguments:

Arguments
=========

The following arguments are available for `<f:count>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3fluid-fluid-count-subject_argument:

..  confval:: subject
    :name: typo3fluid-fluid-count-subject
    :type: mixed
    :required: false

    Countable subject, array or \Countable
