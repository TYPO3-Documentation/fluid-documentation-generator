..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/Menus/ActionMenuItemViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/Menus/ActionMenuItemViewHelper.php
:navigation-title: be.menus.actionMenuItem
.. include:: /Includes.rst.txt

.. _typo3-fluid-be-menus-actionmenuitem:

================================================================
Be.menus.actionMenuItem ViewHelper `<f:be.menus.actionMenuItem>`
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

.. _typo3-fluid-be-menus-actionmenuitem_source:

Source code
===========

Go to the source code of this ViewHelper: `ActionMenuItemViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/Menus/ActionMenuItemViewHelper.php>`__.

.. _typo3-fluid-be-menus-actionmenuitem_arguments:

Arguments
=========

The following arguments are available for `<f:be.menus.actionMenuItem>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3-fluid-be-menus-actionmenuitem-additionalattributes_argument:

..  confval:: additionalAttributes
    :name: typo3-fluid-be-menus-actionmenuitem-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-be-menus-actionmenuitem-data_argument:

..  confval:: data
    :name: typo3-fluid-be-menus-actionmenuitem-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-be-menus-actionmenuitem-aria_argument:

..  confval:: aria
    :name: typo3-fluid-be-menus-actionmenuitem-aria
    :type: mixed
    :required: false

    Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-be-menus-actionmenuitem-label_argument:

..  confval:: label
    :name: typo3-fluid-be-menus-actionmenuitem-label
    :type: string
    :required: true

    Label of the option tag

.. _typo3-fluid-be-menus-actionmenuitem-controller_argument:

..  confval:: controller
    :name: typo3-fluid-be-menus-actionmenuitem-controller
    :type: string
    :required: true

    Controller to be associated with this ActionMenuItem

.. _typo3-fluid-be-menus-actionmenuitem-action_argument:

..  confval:: action
    :name: typo3-fluid-be-menus-actionmenuitem-action
    :type: string
    :required: true

    The action to be associated with this ActionMenuItem

.. _typo3-fluid-be-menus-actionmenuitem-arguments_argument:

..  confval:: arguments
    :name: typo3-fluid-be-menus-actionmenuitem-arguments
    :type: mixed
    :Default: array ()
    :required: false

    Additional controller arguments to be passed to the action when this ActionMenuItem is selected
