:navigation-title: uri.newRecord
.. include:: /Includes.rst.txt

.. _typo3-backend-uri-newrecord:

==================================================
uri.newRecord ViewHelper `<backend:uri.newRecord>`
==================================================


Use this ViewHelper to provide 'create new record' links.
The ViewHelper will pass the command to FormEngine.

The table argument is mandatory, it decides what record is to be created.

The pid argument will put the new record on this page, if ``0`` given it will
be placed to the root page.

The uid argument accepts only negative values. If this is given, the new
record will be placed (by sorting field) behind the record with the uid.
It will end up on the same pid as this given record, so the pid must not
be given explicitly by pid argument.

An exception will be thrown, if both uid and pid are given.
An exception will be thrown, if the uid argument is not a negative integer.

To edit records, use the :ref:`<be:uri.editRecord> <typo3-backend-uri-editrecord>`.

Examples
========

Uri to create a new record of a_table after record 17 on the same pid::

   <be:uri.newRecord table="a_table" returnUrl="foo/bar" uid="-17"/>

``/typo3/record/edit?edit[a_table][-17]=new&returnUrl=foo/bar``

Uri to create a new record of a_table on root page::

   <be:uri.newRecord table="a_table" returnUrl="foo/bar""/>

``/typo3/record/edit?edit[a_table][]=new&returnUrl=foo/bar``

Uri to create a new record of a_table on page 17::

   <be:uri.newRecord table="a_table" returnUrl="foo/bar" pid="17"/>

``/typo3/record/edit?edit[a_table][17]=new&returnUrl=foo/bar``

Uri to create a new record of a_table on page 17 with a default value::

   <be:uri.newRecord table="a_table" returnUrl="foo/bar" pid="17" defaultValues="{a_table: {a_field: 'value'}}"/>

``/typo3/record/edit?edit[a_table][17]=new&returnUrl=foo/bar&defVals[a_table][a_field]=value``


.. _typo3-backend-uri-newrecord_arguments:

Arguments
=========


.. _typo3-backend-uri-newrecord-uid:

uid
---

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Uid < 0 will insert the record after the given uid

.. _typo3-backend-uri-newrecord-pid:

pid
---

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   The page id where the record will be created

.. _typo3-backend-uri-newrecord-table:

table
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Target database table

.. _typo3-backend-uri-newrecord-returnurl:

returnUrl
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Return to this URL after closing the edit dialog

.. _typo3-backend-uri-newrecord-defaultvalues:

defaultValues
-------------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   false
:aspect:`Description`
   Default values for fields of the new record
