..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/CycleViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/tree/main/src/ViewHelpers/CycleViewHelper.php
:navigation-title: cycle
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-cycle:

============================
Cycle ViewHelper `<f:cycle>`
============================



This ViewHelper cycles through the specified values.
This can be often used to specify CSS classes for example.

To achieve the "zebra class" effect in a loop you can also use the
"iteration" argument of the **for** ViewHelper.

Examples
========

These examples could also be achieved using the "iteration" argument
of the ForViewHelper.

Simple
------

::

    <f:for each="{0:1, 1:2, 2:3, 3:4}" as="foo">
        <f:cycle values="{0: 'foo', 1: 'bar', 2: 'baz'}" as="cycle">
            {cycle}
        </f:cycle>
    </f:for>

Output::

    foobarbazfoo

Alternating CSS class
---------------------

::

    <ul>
        <f:for each="{0:1, 1:2, 2:3, 3:4}" as="foo">
            <f:cycle values="{0: 'odd', 1: 'even'}" as="zebraClass">
                <li class="{zebraClass}">{foo}</li>
            </f:cycle>
        </f:for>
    </ul>

Output::

    <ul>
        <li class="odd">1</li>
        <li class="even">2</li>
        <li class="odd">3</li>
        <li class="even">4</li>
    </ul>

.. _typo3fluid-fluid-cycle_source:

Source code
===========

Go to the source code of this ViewHelper: `CycleViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/CycleViewHelper.php>`__.

.. _typo3fluid-fluid-cycle_arguments:

Arguments
=========

The following arguments are available for `<f:cycle>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3fluid-fluid-cycle-values_argument:

..  confval:: values
    :name: typo3fluid-fluid-cycle-values
    :type: mixed
    :required: false

    The array or object implementing \ArrayAccess (for example \SplObjectStorage) to iterated over

.. _typo3fluid-fluid-cycle-as_argument:

..  confval:: as
    :name: typo3fluid-fluid-cycle-as
    :type: string
    :required: true

    The name of the iteration variable
