:navigation-title: icon
.. include:: /Includes.rst.txt

.. _typo3-core-icon:

=============================
icon ViewHelper `<core:icon>`
=============================


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


.. _typo3-core-icon_arguments:

Arguments
=========


.. _typo3-core-icon-identifier:

identifier
----------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Identifier of the icon as registered in the Icon Registry.

.. _typo3-core-icon-size:

size
----

:aspect:`DataType`
   string

:aspect:`Default`
   'small'

:aspect:`Required`
   false
:aspect:`Description`
   Desired size of the icon. All values of the IconSize enum are allowed, these are: "small", "default", "medium", "large" and "mega".

.. _typo3-core-icon-overlay:

overlay
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Identifier of an overlay icon as registered in the Icon Registry.

.. _typo3-core-icon-state:

state
-----

:aspect:`DataType`
   string

:aspect:`Default`
   'default'

:aspect:`Required`
   false
:aspect:`Description`
   Sets the state of the icon. All values of the Icons.states enum are allowed, these are: "default" and "disabled".

.. _typo3-core-icon-alternativemarkupidentifier:

alternativeMarkupIdentifier
---------------------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Alternative icon identifier. Takes precedence over the identifier if supported by the IconProvider.

.. _typo3-core-icon-title:

title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Title for the icon
