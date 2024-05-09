:navigation-title: uri.editRecord
.. include:: /Includes.rst.txt

.. _typo3-backend-uri-editrecord:

====================================================
uri.editRecord ViewHelper `<backend:uri.editRecord>`
====================================================


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


.. _typo3-backend-uri-editrecord_arguments:

Arguments
=========


.. _typo3-backend-uri-editrecord-uid:

uid
---

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Uid of record to be edited, 0 for creation

.. _typo3-backend-uri-editrecord-table:

table
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Target database table

.. _typo3-backend-uri-editrecord-fields:

fields
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Edit only these fields (comma separated list)

.. _typo3-backend-uri-editrecord-returnurl:

returnUrl
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Return to this URL after closing the edit dialog
