.. include:: /Includes.rst.txt

.. _typo3-backend-uri-editrecord:

====================================================
uri.editRecord ViewHelper `<backend:uri.editRecord>`
====================================================


Use this ViewHelper to provide edit links (only the uri) to records. The ViewHelper will
pass the uid and table to FormEngine.

The uid must be given as a positive integer.
For new records, use the newRecordViewHelper

= Examples =

<code title="URI to the record-edit action passed to FormEngine">
<be:uri.editRecord uid="42" table="a_table" returnUrl="foo/bar" />
</code>
<output>
/typo3/index.php?route=/record/edit&edit[a_table][42]=edit&returnUrl=foo/bar
</output>


.. _typo3-backend-uri-editrecord_arguments:

Arguments
=========


.. _uri.editrecord_uid:

uid
---

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Uid of record to be edited, 0 for creation

.. _uri.editrecord_table:

table
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Target database table

.. _uri.editrecord_returnurl:

returnUrl
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
