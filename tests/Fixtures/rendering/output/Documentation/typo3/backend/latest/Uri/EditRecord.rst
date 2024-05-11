..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/Uri/EditRecordViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/backend/Classes/ViewHelpers/Uri/EditRecordViewHelper.php
:navigation-title: uri.editRecord
.. include:: /Includes.rst.txt

.. _typo3-backend-uri-editrecord:

===============================================
Uri.editRecord ViewHelper `<be:uri.editRecord>`
===============================================

..  note::
    This ViewHelper is not available by default.

    :ref:`Import its namespace <t3coreapi:fluid-syntax-viewhelpers-import-namespaces>`
    :fluid:`{namespace be=TYPO3\CMS\Backend\ViewHelpers\}` in the Fluid file or
    :fluid:`xmlns:be="http://typo3.org/ns/TYPO3/CMS/Backend/ViewHelpers/"` in the opening HTML tag.


Use this ViewHelper to provide edit links (only the uri) to records. The ViewHelper will
pass the uid and table to FormEngine.

The uid must be given as a positive integer.
For new records, use the :ref:`<be:uri.newRecord> <typo3-backend-uri-newrecord>`.

Examples
========

URI to the record-edit action passed to FormEngine::

   <be:uri.editRecord uid="42" table="a_table" returnUrl="foo/bar" />

``/typo3/record/edit?edit[a_table][42]=edit&returnUrl=foo/bar``

URI to the edit record action: edit only the fields title and subtitle of
page uid=42 and return to foo/bar::

   <be:uri.editRecord uid="42" table="pages" fields="title,subtitle" returnUrl="foo/bar" />

``<a href="/typo3/record/edit&edit[pages][42]=edit&returnUrl=foo/bar&columnsOnly=title,subtitle">``

.. _typo3-backend-uri-editrecord_source:

Source code
===========

Go to the source code of this ViewHelper: `EditRecordViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/Uri/EditRecordViewHelper.php>`__.

.. _typo3-backend-uri-editrecord_arguments:

Arguments
=========

The following arguments are available for `<be:uri.editRecord>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3-backend-uri-editrecord-uid_argument:

..  confval:: uid
    :name: typo3-backend-uri-editrecord-uid
    :type: mixed
    :required: true

    Uid of record to be edited, 0 for creation

.. _typo3-backend-uri-editrecord-table_argument:

..  confval:: table
    :name: typo3-backend-uri-editrecord-table
    :type: string
    :required: true

    Target database table

.. _typo3-backend-uri-editrecord-fields_argument:

..  confval:: fields
    :name: typo3-backend-uri-editrecord-fields
    :type: string
    :required: false

    Edit only these fields (comma separated list)

.. _typo3-backend-uri-editrecord-returnurl_argument:

..  confval:: returnUrl
    :name: typo3-backend-uri-editrecord-returnurl
    :type: string
    :required: false

    Return to this URL after closing the edit dialog
