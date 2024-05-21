..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/GroupedForViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/tree/main/src/ViewHelpers/GroupedForViewHelper.php
:navigation-title: groupedFor

.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-groupedfor:

======================================
GroupedFor ViewHelper `<f:groupedFor>`
======================================



Grouped loop ViewHelper.
Loops through the specified values.

The groupBy argument also supports property paths.

Using this ViewHelper can be a sign of weak architecture. If you end up
using it extensively you might want to fine-tune your "view model" (the
data you assign to the view).

Examples
========

Simple
------

::

    <f:groupedFor each="{0: {name: 'apple', color: 'green'}, 1: {name: 'cherry', color: 'red'}, 2: {name: 'banana', color: 'yellow'}, 3: {name: 'strawberry', color: 'red'}}"
        as="fruitsOfThisColor" groupBy="color"
    >
        <f:for each="{fruitsOfThisColor}" as="fruit">
            {fruit.name}
        </f:for>
    </f:groupedFor>

Output::

    apple cherry strawberry banana

Two dimensional list
--------------------

::

    <ul>
        <f:groupedFor each="{0: {name: 'apple', color: 'green'}, 1: {name: 'cherry', color: 'red'}, 2: {name: 'banana', color: 'yellow'}, 3: {name: 'strawberry', color: 'red'}}" as="fruitsOfThisColor" groupBy="color" groupKey="color">
            <li>
                {color} fruits:
                <ul>
                    <f:for each="{fruitsOfThisColor}" as="fruit" key="label">
                        <li>{label}: {fruit.name}</li>
                    </f:for>
                </ul>
            </li>
        </f:groupedFor>
    </ul>

Output::

    <ul>
        <li>green fruits
            <ul>
                <li>0: apple</li>
            </ul>
        </li>
        <li>red fruits
            <ul>
                <li>1: cherry</li>
            </ul>
            <ul>
                <li>3: strawberry</li>
            </ul>
        </li>
        <li>yellow fruits
            <ul>
                <li>2: banana</li>
            </ul>
        </li>
    </ul>

.. _typo3fluid-fluid-groupedfor_source:

Source code
===========

Go to the source code of this ViewHelper: `GroupedForViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/GroupedForViewHelper.php>`__.

.. _typo3fluid-fluid-groupedfor_arguments:

Arguments
=========

The following arguments are available for `<f:groupedFor>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3fluid-fluid-groupedfor-each_argument:

..  confval:: each
    :name: typo3fluid-fluid-groupedfor-each
    :type: mixed
    :required: true

    The array or \SplObjectStorage to iterated over

.. _typo3fluid-fluid-groupedfor-as_argument:

..  confval:: as
    :name: typo3fluid-fluid-groupedfor-as
    :type: string
    :required: true

    The name of the iteration variable

.. _typo3fluid-fluid-groupedfor-groupby_argument:

..  confval:: groupBy
    :name: typo3fluid-fluid-groupedfor-groupby
    :type: string
    :required: true

    Group by this property

.. _typo3fluid-fluid-groupedfor-groupkey_argument:

..  confval:: groupKey
    :name: typo3fluid-fluid-groupedfor-groupkey
    :type: string
    :default: `'groupKey'`
    :required: false

    The name of the variable to store the current group
