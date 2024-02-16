.. include:: /Includes.rst.txt

.. _typo3-backend-modulelayout-button-shortcutbutton:

============================================================================================
moduleLayout.button.shortcutButton ViewHelper `<backend:moduleLayout.button.shortcutButton>`
============================================================================================


A view helper for adding a shortcut button to the doc header area.
It must be a child of <be:moduleLayout>
= Examples =
<code>
<be:moduleLayout>
     <be:moduleLayout.button.shortcutButton displayName="Shortcut label" />
</be:moduleLayout>
</code>


.. _typo3-backend-modulelayout-button-shortcutbutton_arguments:

Arguments
=========


.. _modulelayout.button.shortcutbutton_icon:

icon
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Icon identifier for the button

.. _modulelayout.button.shortcutbutton_title:

title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Title of the button

.. _modulelayout.button.shortcutbutton_disabled:

disabled
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Whether the button is disabled

.. _modulelayout.button.shortcutbutton_showlabel:

showLabel
---------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Defines whether to show the title as a label within the button

.. _modulelayout.button.shortcutbutton_position:

position
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Position of the button (left or right)

.. _modulelayout.button.shortcutbutton_group:

group
-----

:aspect:`DataType`
   integer

:aspect:`Required`
   false
:aspect:`Description`
   Button group of the button

.. _modulelayout.button.shortcutbutton_displayname:

displayName
-----------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Name for the shortcut

.. _modulelayout.button.shortcutbutton_getvars:

getVars
-------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   false
:aspect:`Description`
   List of additional GET variables to store. The current id, module and all module arguments will always be stored
