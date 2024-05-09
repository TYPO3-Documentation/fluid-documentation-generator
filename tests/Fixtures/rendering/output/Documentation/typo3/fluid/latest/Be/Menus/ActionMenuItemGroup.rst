..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/Menus/ActionMenuItemGroupViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/Menus/ActionMenuItemGroupViewHelper.php
:navigation-title: be.menus.actionMenuItemGroup
.. include:: /Includes.rst.txt

.. _typo3-fluid-be-menus-actionmenuitemgroup:

==========================================================================
Be.menus.actionMenuItemGroup ViewHelper `<f:be.menus.actionMenuItemGroup>`
==========================================================================

ViewHelper which groups options of an option tag.

Example
=======

::

 <f:be.menus.actionMenu>
     <f:be.menus.actionMenuItem label="Default: Welcome" controller="Default" action="index" />
     <f:be.menus.actionMenuItem label="Community: get in touch" controller="Community" action="index" />

     <f:be.menus.actionMenuItemGroup label="Information">
         <f:be.menus.actionMenuItem label="PHP Information" controller="Information" action="listPhpInfo" />
         <f:be.menus.actionMenuItem label="Documentation" controller="Information" action="documentation" />
         <f:be.menus.actionMenuItem label="Hooks" controller="Information" action="hooks" />
         <f:be.menus.actionMenuItem label="Signals" controller="Information" action="signals" />
         <f:be.menus.actionMenuItem label="XClasses" controller="Information" action="xclass" />
     </f:be.menus.actionMenuItemGroup>
 </f:be.menus.actionMenu>

.. _typo3-fluid-be-menus-actionmenuitemgroup_source:

Source code
===========

Go to the source code of this ViewHelper: `ActionMenuItemGroupViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/Menus/ActionMenuItemGroupViewHelper.php>`__.

.. _typo3-fluid-be-menus-actionmenuitemgroup_arguments:

Arguments
=========

The following arguments are available for `<f:be.menus.actionMenuItemGroup>`:

..  contents::
    :local:


.. _typo3-fluid-be-menus-actionmenuitemgroup-additionalattributes_argument:

additionalAttributes
--------------------

..  confval:: additionalAttributes
    :name: typo3-fluid-be-menus-actionmenuitemgroup-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-be-menus-actionmenuitemgroup-data_argument:

data
----

..  confval:: data
    :name: typo3-fluid-be-menus-actionmenuitemgroup-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-be-menus-actionmenuitemgroup-aria_argument:

aria
----

..  confval:: aria
    :name: typo3-fluid-be-menus-actionmenuitemgroup-aria
    :type: mixed
    :required: false

    Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-be-menus-actionmenuitemgroup-defaultcontroller_argument:

defaultController
-----------------

..  confval:: defaultController
    :name: typo3-fluid-be-menus-actionmenuitemgroup-defaultcontroller
    :type: string
    :required: false

    Unused

.. _typo3-fluid-be-menus-actionmenuitemgroup-label_argument:

label
-----

..  confval:: label
    :name: typo3-fluid-be-menus-actionmenuitemgroup-label
    :type: string
    :required: false

    The label of the option group
