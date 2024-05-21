..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/SwitchViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/main/src/ViewHelpers/SwitchViewHelper.php
:navigation-title: switch

.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-switch:

==============================
Switch ViewHelper `<f:switch>`
==============================



Switch ViewHelper which can be used to render content depending on a value or expression.
Implements what a basic PHP ``switch()`` does.

An optional default case can be specified which is rendered if none of the
``case`` conditions matches.

Using this ViewHelper can be a sign of weak architecture. If you end up using it extensively
you might want to consider restructuring your controllers/actions and/or use partials and sections.
E.g. the above example could be achieved with :html:`<f:render partial="title.{person.gender}" />`
and the partials "title.male.html", "title.female.html", ...
Depending on the scenario this can be easier to extend and possibly contains less duplication.

Examples
========

Simple Switch statement
-----------------------

::

    <f:switch expression="{person.gender}">
        <f:case value="male">Mr.</f:case>
        <f:case value="female">Mrs.</f:case>
        <f:defaultCase>Mr. / Mrs.</f:defaultCase>
    </f:switch>

Output::

    "Mr.", "Mrs." or "Mr. / Mrs." (depending on the value of {person.gender})

.. _typo3fluid-fluid-switch_source:

Source code
===========

Go to the source code of this ViewHelper: `SwitchViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/SwitchViewHelper.php>`__.

.. _typo3fluid-fluid-switch_arguments:

Arguments
=========

The following arguments are available for `<f:switch>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3fluid-fluid-switch-expression_argument:

..  confval:: expression
    :name: typo3fluid-fluid-switch-expression
    :type: mixed
    :required: true

    Expression to switch
