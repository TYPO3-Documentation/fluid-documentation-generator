..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/IfViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/tree/main/src/ViewHelpers/IfViewHelper.php
:navigation-title: if
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-if:

======================
If ViewHelper `<f:if>`
======================



This ViewHelper implements an if/else condition.

Fluid Boolean Rules / Conditions:
=================================

A condition is evaluated as a boolean value, so you can use any
boolean argument, like a variable.
Alternatively, you can use a full boolean expression.
The entered expression is evaluated as a PHP expression. You can
combine multiple expressions via :php:`&&` (logical AND) and
:php:`||` (logical OR).

An expression can also be prepended with the :php:`!` ("not") character,
which will negate that expression.

Have a look into the Fluid section of the "TYPO3 Explained" Documentation
for more details about complex conditions.

Boolean expressions have the following form:

`is true` variant: `{variable}`::

      <f:if condition="{foo}">
          Will be shown if foo is truthy.
      </f:if>

or `is false` variant: `!{variable}`::

      <f:if condition="!{foo}">
          Will be shown if foo is falsy.
      </f:if>

or comparisons with expressions::

      XX Comparator YY

Comparator is one of: :php:`==, !=, <, <=, >, >=` and :php:`%`
The :php:`%` operator (modulo) converts the result of the operation to
boolean.

`XX` and `YY` can be one of:

- Number
- String
- Object Accessor (`object.property`)
- Array
- a ViewHelper

::

      <f:if condition="{rank} > 100">
          Will be shown if rank is > 100
      </f:if>
      <f:if condition="{rank} % 2">
          Will be shown if rank % 2 != 0.
      </f:if>
      <f:if condition="{rank} == {k:bar()}">
          Checks if rank is equal to the result of the ViewHelper "k:bar"
      </f:if>
      <f:if condition="{object.property} == 'stringToCompare'">
          Will result in true if {object.property}'s represented value
          equals 'stringToCompare'.
      </f:if>

Examples
========

Basic usage
-----------

::

    <f:if condition="somecondition">
        This is being shown in case the condition matches
    </f:if>

Output::

    Everything inside the <f:if> tag is being displayed if the condition evaluates to TRUE.

If / then / else
----------------

::

    <f:if condition="somecondition">
        <f:then>
            This is being shown in case the condition matches.
        </f:then>
        <f:else>
            This is being displayed in case the condition evaluates to FALSE.
        </f:else>
    </f:if>

Output::

    Everything inside the "then" tag is displayed if the condition evaluates to TRUE.
    Otherwise, everything inside the "else" tag is displayed.

Inline notation
---------------

::

    {f:if(condition: someCondition, then: 'condition is met', else: 'condition is not met')}

Output::

    The value of the "then" attribute is displayed if the condition evaluates to TRUE.
    Otherwise, everything the value of the "else" attribute is displayed.

Combining multiple conditions
-----------------------------

::

    <f:if condition="{user.rank} > 100 && {user.type} == 'contributor'">
        <f:then>
            This is being shown in case both conditions match.
        </f:then>
        <f:else if="{user.rank} > 200 && ({user.type} == 'contributor' || {user.type} == 'developer')">
            This is being displayed in case the first block of the condition evaluates to TRUE and any condition in
            the second condition block evaluates to TRUE.
        </f:else>
        <f:else>
            This is being displayed when none of the above conditions evaluated to TRUE.
        </f:else>
    </f:if>

Output::

    Depending on which expression evaluated to TRUE, that value is displayed.
    If no expression matched, the contents inside the final "else" tag are displayed.

.. _typo3fluid-fluid-if_source:

Source code
===========

Go to the source code of this ViewHelper: `IfViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/IfViewHelper.php>`__.

.. _typo3fluid-fluid-if_arguments:

Arguments
=========

The following arguments are available for `<f:if>`:

..  contents::
    :local:


.. _typo3fluid-fluid-if-then_argument:

then
----

..  confval:: then
    :name: typo3fluid-fluid-if-then
    :type: mixed
    :required: false

    Value to be returned if the condition if met.

.. _typo3fluid-fluid-if-else_argument:

else
----

..  confval:: else
    :name: typo3fluid-fluid-if-else
    :type: mixed
    :required: false

    Value to be returned if the condition if not met.

.. _typo3fluid-fluid-if-condition_argument:

condition
---------

..  confval:: condition
    :name: typo3fluid-fluid-if-condition
    :type: boolean
    :required: false

    Condition expression conforming to Fluid boolean rules
