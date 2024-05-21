..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/ForViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/tree/main/src/ViewHelpers/ForViewHelper.php
:navigation-title: for

.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-for:

========================
For ViewHelper `<f:for>`
========================



Loop ViewHelper which can be used to iterate over arrays.
Implements what a basic PHP ``foreach()`` does.

Examples
========

Simple Loop
-----------

::

    <f:for each="{0:1, 1:2, 2:3, 3:4}" as="foo">{foo}</f:for>

Output::

    1234

Output array key
----------------

::

    <ul>
        <f:for each="{fruit1: 'apple', fruit2: 'pear', fruit3: 'banana', fruit4: 'cherry'}"
            as="fruit" key="label"
        >
            <li>{label}: {fruit}</li>
        </f:for>
    </ul>

Output::

    <ul>
        <li>fruit1: apple</li>
        <li>fruit2: pear</li>
        <li>fruit3: banana</li>
        <li>fruit4: cherry</li>
    </ul>

Iteration information
---------------------

::

    <ul>
        <f:for each="{0:1, 1:2, 2:3, 3:4}" as="foo" iteration="fooIterator">
            <li>Index: {fooIterator.index} Cycle: {fooIterator.cycle} Total: {fooIterator.total}{f:if(condition: fooIterator.isEven, then: ' Even')}{f:if(condition: fooIterator.isOdd, then: ' Odd')}{f:if(condition: fooIterator.isFirst, then: ' First')}{f:if(condition: fooIterator.isLast, then: ' Last')}</li>
        </f:for>
    </ul>

Output::

    <ul>
        <li>Index: 0 Cycle: 1 Total: 4 Odd First</li>
        <li>Index: 1 Cycle: 2 Total: 4 Even</li>
        <li>Index: 2 Cycle: 3 Total: 4 Odd</li>
        <li>Index: 3 Cycle: 4 Total: 4 Even Last</li>
    </ul>

.. _typo3fluid-fluid-for_source:

Source code
===========

Go to the source code of this ViewHelper: `ForViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/ForViewHelper.php>`__.

.. _typo3fluid-fluid-for_arguments:

Arguments
=========

The following arguments are available for `<f:for>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3fluid-fluid-for-each_argument:

..  confval:: each
    :name: typo3fluid-fluid-for-each
    :type: mixed
    :required: true

    The array or \SplObjectStorage to iterated over

.. _typo3fluid-fluid-for-as_argument:

..  confval:: as
    :name: typo3fluid-fluid-for-as
    :type: string
    :required: true

    The name of the iteration variable

.. _typo3fluid-fluid-for-key_argument:

..  confval:: key
    :name: typo3fluid-fluid-for-key
    :type: string
    :required: false

    Variable to assign array key to

.. _typo3fluid-fluid-for-reverse_argument:

..  confval:: reverse
    :name: typo3fluid-fluid-for-reverse
    :type: boolean
    :required: false

    If TRUE, iterates in reverse

.. _typo3fluid-fluid-for-iteration_argument:

..  confval:: iteration
    :name: typo3fluid-fluid-for-iteration
    :type: string
    :required: false

    The name of the variable to store iteration information (index, cycle, total, isFirst, isLast, isEven, isOdd)
