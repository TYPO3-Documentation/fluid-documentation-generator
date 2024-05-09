:navigation-title: be.menus.actionMenuItem
.. include:: /Includes.rst.txt

.. _typo3-fluid-be-menus-actionmenuitem:

================================================================
be.menus.actionMenuItem ViewHelper `<f:be.menus.actionMenuItem>`
================================================================


ViewHelper which returns an option tag.
This ViewHelper only works in conjunction with :php:`\TYPO3\CMS\Fluid\ViewHelpers\Be\Menus\ActionMenuViewHelper`.
This ViewHelper is tailored to be used only in extbase context.

.. note::
   This ViewHelper is experimental!

Examples
========

Simple::

   <f:be.menus.actionMenu>
      <f:be.menus.actionMenuItem label="Overview" controller="Blog" action="index" />
      <f:be.menus.actionMenuItem label="Create new Blog" controller="Blog" action="new" />
      <f:be.menus.actionMenuItem label="List Posts" controller="Post" action="index" arguments="{blog: blog}" />
   </f:be.menus.actionMenu>

Select box with the options "Overview", "Create new Blog" and "List Posts".

Localized::

   <f:be.menus.actionMenu>
      <f:be.menus.actionMenuItem label="{f:translate(key='overview')}" controller="Blog" action="index" />
      <f:be.menus.actionMenuItem label="{f:translate(key='create_blog')}" controller="Blog" action="new" />
   </f:be.menus.actionMenu>

Localized select box.


.. _typo3-fluid-be-menus-actionmenuitem_arguments:

Arguments
=========


.. _typo3-fluid-be-menus-actionmenuitem-additionalattributes:

additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-be-menus-actionmenuitem-data:

data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-be-menus-actionmenuitem-aria:

aria
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-be-menus-actionmenuitem-label:

label
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Label of the option tag

.. _typo3-fluid-be-menus-actionmenuitem-controller:

controller
----------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Controller to be associated with this ActionMenuItem

.. _typo3-fluid-be-menus-actionmenuitem-action:

action
------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   The action to be associated with this ActionMenuItem

.. _typo3-fluid-be-menus-actionmenuitem-arguments:

arguments
---------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   false
:aspect:`Description`
   Additional controller arguments to be passed to the action when this ActionMenuItem is selected
