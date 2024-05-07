:navigation-title: moduleLayout.menu
.. include:: /Includes.rst.txt

.. _typo3-backend-modulelayout-menu:

==========================================================
moduleLayout.menu ViewHelper `<backend:moduleLayout.menu>`
==========================================================


A view helper for adding a menu to the doc header area.
It must be a child of <be:moduleLayout> and accepts
only <be:moduleLayout.menuItem> view helpers as children.
= Examples =
<code>
<be:moduleLayout>
    <be:moduleLayout.menu identifier="MenuIdentifier">
         <be:moduleLayout.menuItem label="Menu item 1" uri="{f:uri.action(action: 'index')}"/>
    </be:moduleLayout.menu>
</be:moduleLayout>
</code>


.. _typo3-backend-modulelayout-menu_arguments:

Arguments
=========


.. _modulelayout.menu_identifier:

identifier
----------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Identifier of the menu
