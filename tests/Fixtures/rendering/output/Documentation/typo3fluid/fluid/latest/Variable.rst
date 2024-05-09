:navigation-title: variable
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-variable:

==================================
variable ViewHelper `<f:variable>`
==================================


Variable assigning ViewHelper

Assigns one template variable which will exist also
after the ViewHelper is done rendering, i.e. adds
template variables.

If you require a variable assignment which does not
exist in the template after a piece of Fluid code
is rendered, consider using ``f:alias`` ViewHelper instead.

Usages:

::

    {f:variable(name: 'myvariable', value: 'some value')}
    <f:variable name="myvariable">some value</f:variable>
    {oldvariable -> f:format.htmlspecialchars() -> f:variable(name: 'newvariable')}
    <f:variable name="myvariable"><f:format.htmlspecialchars>{oldvariable}</f:format.htmlspecialchars></f:variable>


.. _typo3fluid-fluid-variable_arguments:

Arguments
=========


.. _typo3fluid-fluid-variable-value:

value
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Value to assign. If not in arguments then taken from tag content

.. _typo3fluid-fluid-variable-name:

name
----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Name of variable to create
