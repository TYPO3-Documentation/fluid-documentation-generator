:navigation-title: be.menus.actionMenuItemGroup
.. include:: /Includes.rst.txt

.. _typo3-fluid-be-menus-actionmenuitemgroup:

==========================================================================
be.menus.actionMenuItemGroup ViewHelper `<f:be.menus.actionMenuItemGroup>`
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


.. _typo3-fluid-be-menus-actionmenuitemgroup_arguments:

Arguments
=========


.. _typo3-fluid-be-menus-actionmenuitemgroup-additionalattributes:

additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-be-menus-actionmenuitemgroup-data:

data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-be-menus-actionmenuitemgroup-aria:

aria
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-be-menus-actionmenuitemgroup-defaultcontroller:

defaultController
-----------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Unused

.. _typo3-fluid-be-menus-actionmenuitemgroup-label:

label
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The label of the option group
