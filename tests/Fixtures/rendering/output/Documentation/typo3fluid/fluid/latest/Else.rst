..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/ElseViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/tree/main/src/ViewHelpers/ElseViewHelper.php
:navigation-title: else

.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-else:

==========================
Else ViewHelper `<f:else>`
==========================



Else-Branch of a condition. Only has an effect inside of ``f:if``.
See the ``f:if`` ViewHelper for documentation.

Examples
========

Output content if condition is not met
--------------------------------------

::

    <f:if condition="{someCondition}">
        <f:else>
            condition was not true
        </f:else>
    </f:if>

Output::

    Everything inside the "else" tag is displayed if the condition evaluates to FALSE.
    Otherwise nothing is outputted in this example.

.. _typo3fluid-fluid-else_source:

Source code
===========

Go to the source code of this ViewHelper: `ElseViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/ElseViewHelper.php>`__.

.. _typo3fluid-fluid-else_arguments:

Arguments
=========

The following arguments are available for `<f:else>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3fluid-fluid-else-if_argument:

..  confval:: if
    :name: typo3fluid-fluid-else-if
    :type: boolean
    :required: false

    Condition expression conforming to Fluid boolean rules
