:navigation-title: link.newRecord
.. include:: /Includes.rst.txt

.. _typo3-backend-link-newrecord:

====================================================
link.newRecord ViewHelper `<backend:link.newRecord>`
====================================================


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

To edit records, use the :ref:`<be:link.editRecordViewHelper> <typo3-backend-link-editrecord>`.

Examples
========

Link to create a new record of a_table after record 17 on the same pid::

   <be:link.newRecord table="a_table" returnUrl="foo/bar" uid="-17"/>

Output::

   <a href="/typo3/record/edit?edit[a_table][-17]=new&returnUrl=foo/bar">
       New record
   </a>

Link to create a new record of a_table on root page::

   <be:link.newRecord table="a_table" returnUrl="foo/bar""/>

Output::

   <a href="/typo3/record/edit?edit[a_table][]=new&returnUrl=foo/bar">
       New record
   </a>

Link to create a new record of a_table on page 17::

   <be:link.newRecord table="a_table" returnUrl="foo/bar" pid="17"/>

Output::

   <a href="/typo3/record/edit?edit[a_table][17]=new&returnUrl=foo/bar">
       New record
   </a>

Link to create a new record then return back to the BE module "web_MyextensionList"::

   <be:link.newRecord table="a_table" returnUrl="{f:be.uri(route: 'web_MyextensionList')}" pid="17">

Output::

   <a href="/typo3/record/edit?edit[a_table][17]=new&returnUrl=/typo3/module/web/MyextensionList">
       New record
   </a>

Link to create a new record of a_table on page 17 with a default value::

   <be:link.newRecord table="a_table" returnUrl="foo/bar" pid="17" defaultValues="{a_table: {a_field: 'value'}}">

Output::

   <a href="/typo3/record/edit?edit[a_table][17]=new&returnUrl=foo/bar&defVals[a_table][a_field]=value">
       New record
   </a>


.. _typo3-backend-link-newrecord_arguments:

Arguments
=========


.. _typo3-backend-link-newrecord-additionalattributes:

additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-backend-link-newrecord-data:

data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-backend-link-newrecord-aria:

aria
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-backend-link-newrecord-class:

class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   CSS class(es) for this element

.. _typo3-backend-link-newrecord-dir:

dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-backend-link-newrecord-id:

id
--

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _typo3-backend-link-newrecord-lang:

lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _typo3-backend-link-newrecord-style:

style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Individual CSS styles for this element

.. _typo3-backend-link-newrecord-title:

title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Tooltip text of element

.. _typo3-backend-link-newrecord-accesskey:

accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Keyboard shortcut to access this element

.. _typo3-backend-link-newrecord-tabindex:

tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the tab order of this element

.. _typo3-backend-link-newrecord-onclick:

onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   JavaScript evaluated for the onclick event

.. _typo3-backend-link-newrecord-uid:

uid
---

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Uid < 0 will insert the record after the given uid

.. _typo3-backend-link-newrecord-pid:

pid
---

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   The page id where the record will be created

.. _typo3-backend-link-newrecord-table:

table
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Target database table

.. _typo3-backend-link-newrecord-returnurl:

returnUrl
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Return to this URL after closing the new record dialog

.. _typo3-backend-link-newrecord-defaultvalues:

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
