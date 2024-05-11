..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/VariableViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/tree/main/src/ViewHelpers/VariableViewHelper.php
:navigation-title: variable
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-variable:

==================================
Variable ViewHelper `<f:variable>`
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

.. _typo3fluid-fluid-variable_source:

Source code
===========

Go to the source code of this ViewHelper: `VariableViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/VariableViewHelper.php>`__.

.. _typo3fluid-fluid-variable_arguments:

Arguments
=========

The following arguments are available for `<f:variable>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3fluid-fluid-variable-value_argument:

..  confval:: value
    :name: typo3fluid-fluid-variable-value
    :type: mixed
    :required: false

    Value to assign. If not in arguments then taken from tag content

.. _typo3fluid-fluid-variable-name_argument:

..  confval:: name
    :name: typo3fluid-fluid-variable-name
    :type: string
    :required: true

    Name of variable to create
