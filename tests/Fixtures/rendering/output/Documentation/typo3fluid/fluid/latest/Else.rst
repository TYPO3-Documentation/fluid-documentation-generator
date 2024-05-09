:navigation-title: else
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-else:

==========================
else ViewHelper `<f:else>`
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


.. _typo3fluid-fluid-else_arguments:

Arguments
=========


.. _typo3fluid-fluid-else-if:

if
--

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   Condition expression conforming to Fluid boolean rules
