..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/Menus/ActionMenuViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/Menus/ActionMenuViewHelper.php
:navigation-title: be.menus.actionMenu
.. include:: /Includes.rst.txt

.. _typo3-fluid-be-menus-actionmenu:

========================================================
Be.menus.actionMenu ViewHelper `<f:be.menus.actionMenu>`
========================================================



ViewHelper which returns a select box, that can be used to switch between
multiple actions and controllers and looks similar to TYPO3s funcMenu.

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
      <f:be.menus.actionMenuItem label="{f:translate(key:'overview')}" controller="Blog" action="index" />
      <f:be.menus.actionMenuItem label="{f:translate(key:'create_blog')}" controller="Blog" action="new" />
   </f:be.menus.actionMenu>

Localized select box.

.. _typo3-fluid-be-menus-actionmenu_source:

Source code
===========

Go to the source code of this ViewHelper: `ActionMenuViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/Menus/ActionMenuViewHelper.php>`__.

.. _typo3-fluid-be-menus-actionmenu_arguments:

Arguments
=========

The following arguments are available for `<f:be.menus.actionMenu>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3-fluid-be-menus-actionmenu-additionalattributes_argument:

..  confval:: additionalAttributes
    :name: typo3-fluid-be-menus-actionmenu-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-be-menus-actionmenu-data_argument:

..  confval:: data
    :name: typo3-fluid-be-menus-actionmenu-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-be-menus-actionmenu-aria_argument:

..  confval:: aria
    :name: typo3-fluid-be-menus-actionmenu-aria
    :type: mixed
    :required: false

    Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-be-menus-actionmenu-defaultcontroller_argument:

..  confval:: defaultController
    :name: typo3-fluid-be-menus-actionmenu-defaultcontroller
    :type: string
    :required: false

    The default controller to be used
