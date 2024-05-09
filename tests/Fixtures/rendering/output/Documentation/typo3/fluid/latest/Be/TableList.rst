..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/TableListViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/TableListViewHelper.php
:navigation-title: be.tableList
.. include:: /Includes.rst.txt

.. _typo3-fluid-be-tablelist:

==========================================
Be.tableList ViewHelper `<f:be.tableList>`
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

.. _typo3-fluid-be-tablelist_source:

Source code
===========

Go to the source code of this ViewHelper: `TableListViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/TableListViewHelper.php>`__.

.. _typo3-fluid-be-tablelist_arguments:

Arguments
=========

The following arguments are available for `<f:be.tableList>`:

..  contents::
    :local:


.. _typo3-fluid-be-tablelist-tablename_argument:

tableName
---------

..  confval:: tableName
    :name: typo3-fluid-be-tablelist-tablename
    :type: string
    :required: true

    Name of the database table

.. _typo3-fluid-be-tablelist-fieldlist_argument:

fieldList
---------

..  confval:: fieldList
    :name: typo3-fluid-be-tablelist-fieldlist
    :type: mixed
    :Default: array ()
    :required: false

    List of fields to be displayed. If empty, only the title column (configured in $TCA[$tableName]['ctrl']['title']) is shown

.. _typo3-fluid-be-tablelist-storagepid_argument:

storagePid
----------

..  confval:: storagePid
    :name: typo3-fluid-be-tablelist-storagepid
    :type: mixed
    :required: false

    By default, records are fetched from the storage PID configured in persistence.storagePid. With this argument, the storage PID can be overwritten

.. _typo3-fluid-be-tablelist-levels_argument:

levels
------

..  confval:: levels
    :name: typo3-fluid-be-tablelist-levels
    :type: mixed
    :required: false

    Corresponds to the level selector of the TYPO3 list module. By default only records from the current storagePid are fetched

.. _typo3-fluid-be-tablelist-filter_argument:

filter
------

..  confval:: filter
    :name: typo3-fluid-be-tablelist-filter
    :type: string
    :required: false

    Corresponds to the "Search String" textbox of the TYPO3 list module. If not empty, only records matching the string will be fetched

.. _typo3-fluid-be-tablelist-recordsperpage_argument:

recordsPerPage
--------------

..  confval:: recordsPerPage
    :name: typo3-fluid-be-tablelist-recordsperpage
    :type: mixed
    :required: false

    Amount of records to be displayed at once. Defaults to $TCA[$tableName]['interface']['maxSingleDBListItems'] or (if that's not set) to 100

.. _typo3-fluid-be-tablelist-sortfield_argument:

sortField
---------

..  confval:: sortField
    :name: typo3-fluid-be-tablelist-sortfield
    :type: string
    :required: false

    Table field to sort the results by

.. _typo3-fluid-be-tablelist-sortdescending_argument:

sortDescending
--------------

..  confval:: sortDescending
    :name: typo3-fluid-be-tablelist-sortdescending
    :type: boolean
    :required: false

    If TRUE records will be sorted in descending order

.. _typo3-fluid-be-tablelist-readonly_argument:

readOnly
--------

..  confval:: readOnly
    :name: typo3-fluid-be-tablelist-readonly
    :type: boolean
    :required: false

    If TRUE, the edit icons won't be shown. Otherwise edit icons will be shown, if the current BE user has edit rights for the specified table!

.. _typo3-fluid-be-tablelist-enableclickmenu_argument:

enableClickMenu
---------------

..  confval:: enableClickMenu
    :name: typo3-fluid-be-tablelist-enableclickmenu
    :type: boolean
    :Default: true
    :required: false

    Enables context menu

.. _typo3-fluid-be-tablelist-enablecontrolpanels_argument:

enableControlPanels
-------------------

..  confval:: enableControlPanels
    :name: typo3-fluid-be-tablelist-enablecontrolpanels
    :type: boolean
    :required: false

    Enables control panels

.. _typo3-fluid-be-tablelist-clicktitlemode_argument:

clickTitleMode
--------------

..  confval:: clickTitleMode
    :name: typo3-fluid-be-tablelist-clicktitlemode
    :type: string
    :required: false

    One of "edit", "show" (only pages, tt_content), "info
