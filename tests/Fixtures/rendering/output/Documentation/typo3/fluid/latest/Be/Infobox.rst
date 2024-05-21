..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/InfoboxViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/InfoboxViewHelper.php
:navigation-title: be.infobox

.. include:: /Includes.rst.txt

.. _typo3-fluid-be-infobox:

======================================
Be.infobox ViewHelper `<f:be.infobox>`
======================================



ViewHelper for rendering a styled content infobox markup.

States
======

The Infobox provides different context sensitive states that
can be used to provide an additional visual feedback to the
to the user to underline the meaning of the information.

Possible values are in range from ``-2`` to ``2``. Please choose a
meaningful value from the following list.

``-2``
   Notices (Default)
``-1``
   Information
``0``
   Positive feedback
``1``
   Warnings
``2``
   Error

Examples
========

Simple::

   <f:be.infobox title="Message title">your box content</f:be.infobox>

All options::

   <f:be.infobox title="Message title" message="your box content" state="-2" iconName="check" disableIcon="true" />

.. _typo3-fluid-be-infobox_source:

Source code
===========

Go to the source code of this ViewHelper: `InfoboxViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/InfoboxViewHelper.php>`__.

.. _typo3-fluid-be-infobox_arguments:

Arguments
=========

The following arguments are available for `<f:be.infobox>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3-fluid-be-infobox-message_argument:

..  confval:: message
    :name: typo3-fluid-be-infobox-message
    :type: string
    :required: false

    The message of the info box, if NULL tag content is used

.. _typo3-fluid-be-infobox-title_argument:

..  confval:: title
    :name: typo3-fluid-be-infobox-title
    :type: string
    :required: false

    The title of the info box

.. _typo3-fluid-be-infobox-state_argument:

..  confval:: state
    :name: typo3-fluid-be-infobox-state
    :type: mixed
    :default: `-2`
    :required: false

    The state of the box, InfoboxViewHelper::STATE_*

.. _typo3-fluid-be-infobox-iconname_argument:

..  confval:: iconName
    :name: typo3-fluid-be-infobox-iconname
    :type: string
    :required: false

    The icon name from font awesome, NULL sets default icon

.. _typo3-fluid-be-infobox-disableicon_argument:

..  confval:: disableIcon
    :name: typo3-fluid-be-infobox-disableicon
    :type: boolean
    :required: false

    If set to TRUE, the icon is not rendered.
