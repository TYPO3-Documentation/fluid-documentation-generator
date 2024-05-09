:navigation-title: be.tableList
.. include:: /Includes.rst.txt

.. _typo3-fluid-be-tablelist:

==========================================
be.tableList ViewHelper `<f:be.tableList>`
==========================================


ViewHelper which renders a record list as known from the TYPO3 list module.

.. note::
   This feature is experimental!

Examples
========

Minimal::

   <f:be.tableList tableName="fe_users" />

List of all "Website user" records stored in the configured storage PID.
Records will be editable, if the current backend user has got edit rights for the table ``fe_users``.

Only the title column (username) will be shown.

Context menu is active.

Full::

   <f:be.tableList tableName="fe_users" fieldList="{0: 'name', 1: 'email'}"
       storagePid="1"
       levels="2"
       filter="foo"
       recordsPerPage="10"
       sortField="name"
       sortDescending="true"
       readOnly="true"
       enableClickMenu="false"
       enableControlPanels="true"
       clickTitleMode="info"
       />

List of "Website user" records with a text property of ``foo`` stored on PID ``1`` and two levels down.
Clicking on a username will open the TYPO3 info popup for the respective record


.. _typo3-fluid-be-tablelist_arguments:

Arguments
=========


.. _typo3-fluid-be-tablelist-tablename:

tableName
---------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Name of the database table

.. _typo3-fluid-be-tablelist-fieldlist:

fieldList
---------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   false
:aspect:`Description`
   List of fields to be displayed. If empty, only the title column (configured in $TCA[$tableName]['ctrl']['title']) is shown

.. _typo3-fluid-be-tablelist-storagepid:

storagePid
----------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   By default, records are fetched from the storage PID configured in persistence.storagePid. With this argument, the storage PID can be overwritten

.. _typo3-fluid-be-tablelist-levels:

levels
------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Corresponds to the level selector of the TYPO3 list module. By default only records from the current storagePid are fetched

.. _typo3-fluid-be-tablelist-filter:

filter
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Corresponds to the "Search String" textbox of the TYPO3 list module. If not empty, only records matching the string will be fetched

.. _typo3-fluid-be-tablelist-recordsperpage:

recordsPerPage
--------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Amount of records to be displayed at once. Defaults to $TCA[$tableName]['interface']['maxSingleDBListItems'] or (if that's not set) to 100

.. _typo3-fluid-be-tablelist-sortfield:

sortField
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Table field to sort the results by

.. _typo3-fluid-be-tablelist-sortdescending:

sortDescending
--------------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   If TRUE records will be sorted in descending order

.. _typo3-fluid-be-tablelist-readonly:

readOnly
--------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   If TRUE, the edit icons won't be shown. Otherwise edit icons will be shown, if the current BE user has edit rights for the specified table!

.. _typo3-fluid-be-tablelist-enableclickmenu:

enableClickMenu
---------------

:aspect:`DataType`
   boolean

:aspect:`Default`
   true

:aspect:`Required`
   false
:aspect:`Description`
   Enables context menu

.. _typo3-fluid-be-tablelist-enablecontrolpanels:

enableControlPanels
-------------------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   Enables control panels

.. _typo3-fluid-be-tablelist-clicktitlemode:

clickTitleMode
--------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   One of "edit", "show" (only pages, tt_content), "info
