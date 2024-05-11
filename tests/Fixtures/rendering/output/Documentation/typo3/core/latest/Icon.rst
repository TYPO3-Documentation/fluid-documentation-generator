..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/core/Classes/ViewHelpers/IconViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/core/Classes/ViewHelpers/IconViewHelper.php
:navigation-title: icon
.. include:: /Includes.rst.txt

.. _typo3-core-icon:

=============================
Icon ViewHelper `<core:icon>`
=============================

..  note::
    This ViewHelper is not available by default.

    :ref:`Import its namespace <t3coreapi:fluid-syntax-viewhelpers-import-namespaces>`
    :fluid:`{namespace core=TYPO3\CMS\Core\ViewHelpers\}` in the Fluid file or
    :fluid:`xmlns:core="http://typo3.org/ns/TYPO3/CMS/Core/ViewHelpers/"` in the opening HTML tag.


Displays icon identified by icon identifier.

Examples
========

Default::

   <core:icon title="Open actions menu" identifier="actions-menu" />

Output::

    <span title="Open actions menu" class="t3js-icon icon icon-size-small icon-state-default icon-actions-menu" data-identifier="actions-menu" aria-hidden="true">
        <span class="icon-markup">
            <img src="/typo3/sysext/core/Resources/Public/Icons/T3Icons/actions/actions-menu.svg" width="16" height="16">
        </span>
    </span>

Inline::

   <core:icon identifier="actions-menu" alternativeMarkupIdentifier="inline" />

Output::

    <span class="t3js-icon icon icon-size-small icon-state-default icon-actions-menu" data-identifier="actions-menu" aria-hidden="true">
        <span class="icon-markup">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><g class="icon-color"><path d="M9 12v2H7v-2h2m.5-1h-3c-.3 0-.5.2-.5.5v3c0 .3.2.5.5.5h3c.3 0 .5-.2.5-.5v-3c0-.3-.2-.5-.5-.5zM9 7v2H7V7h2m.5-1h-3c-.3 0-.5.2-.5.5v3c0 .3.2.5.5.5h3c.3 0 .5-.2.5-.5v-3c0-.3-.2-.5-.5-.5zM9 2v2H7V2h2m.5-1h-3c-.3 0-.5.2-.5.5v3c0 .3.2.5.5.5h3c.3 0 .5-.2.5-.5v-3c0-.3-.2-.5-.5-.5zM4 7v2H2V7h2m.5-1h-3c-.3 0-.5.2-.5.5v3c0 .3.2.5.5.5h3c.3 0 .5-.2.5-.5v-3c0-.3-.2-.5-.5-.5zM4 2v2H2V2h2m.5-1h-3c-.3 0-.5.2-.5.5v3c0 .3.2.5.5.5h3c.3 0 .5-.2.5-.5v-3c0-.3-.2-.5-.5-.5zM4 12v2H2v-2h2m.5-1h-3c-.3 0-.5.2-.5.5v3c0 .3.2.5.5.5h3c.3 0 .5-.2.5-.5v-3c0-.3-.2-.5-.5-.5zM14 7v2h-2V7h2m.5-1h-3c-.3 0-.5.2-.5.5v3c0 .3.2.5.5.5h3c.3 0 .5-.2.5-.5v-3c0-.3-.2-.5-.5-.5zM14 2v2h-2V2h2m.5-1h-3c-.3 0-.5.2-.5.5v3c0 .3.2.5.5.5h3c.3 0 .5-.2.5-.5v-3c0-.3-.2-.5-.5-.5zM14 12v2h-2v-2h2m.5-1h-3c-.3 0-.5.2-.5.5v3c0 .3.2.5.5.5h3c.3 0 .5-.2.5-.5v-3c0-.3-.2-.5-.5-.5z"/></g></svg>
        </span>
    </span>

.. _typo3-core-icon_source:

Source code
===========

Go to the source code of this ViewHelper: `IconViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/core/Classes/ViewHelpers/IconViewHelper.php>`__.

.. _typo3-core-icon_arguments:

Arguments
=========

The following arguments are available for `<core:icon>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3-core-icon-identifier_argument:

..  confval:: identifier
    :name: typo3-core-icon-identifier
    :type: string
    :required: true

    Identifier of the icon as registered in the Icon Registry.

.. _typo3-core-icon-size_argument:

..  confval:: size
    :name: typo3-core-icon-size
    :type: string
    :Default: 'small'
    :required: false

    Desired size of the icon. All values of the IconSize enum are allowed, these are: "small", "default", "medium", "large" and "mega".

.. _typo3-core-icon-overlay_argument:

..  confval:: overlay
    :name: typo3-core-icon-overlay
    :type: string
    :required: false

    Identifier of an overlay icon as registered in the Icon Registry.

.. _typo3-core-icon-state_argument:

..  confval:: state
    :name: typo3-core-icon-state
    :type: string
    :Default: 'default'
    :required: false

    Sets the state of the icon. All values of the Icons.states enum are allowed, these are: "default" and "disabled".

.. _typo3-core-icon-alternativemarkupidentifier_argument:

..  confval:: alternativeMarkupIdentifier
    :name: typo3-core-icon-alternativemarkupidentifier
    :type: string
    :required: false

    Alternative icon identifier. Takes precedence over the identifier if supported by the IconProvider.

.. _typo3-core-icon-title_argument:

..  confval:: title
    :name: typo3-core-icon-title
    :type: string
    :required: false

    Title for the icon
