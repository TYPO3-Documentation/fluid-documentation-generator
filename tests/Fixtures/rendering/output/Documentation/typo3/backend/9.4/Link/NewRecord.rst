:navigation-title: link.newRecord
.. include:: /Includes.rst.txt

.. _typo3-backend-link-newrecord:

====================================================
link.newRecord ViewHelper `<backend:link.newRecord>`
====================================================


Use this ViewHelper to provide 'create new record' links.
The ViewHelper will pass the command to FormEngine.

The table argument is mandatory, it decides what record is to be created.

The pid argument will put the new record on this page, if 0 given it will
be placed to the root page.

The uid argument accepts only negative values. If this is given, the new
record will be placed (by sorting field) behind the record with the uid.
It will end up on the same pid as this given record, so the pid must not
be given explicitly by pid argument.

An exception will be thrown, if both uid and pid are given.
An exception will be thrown, if the uid argument is not a negative integer.

To edit records, use the editRecordViewHelper

= Examples =

<code title="Link to create a new record of a_table after record 17 on the same pid">
<be:link.newRecord table="a_table" returnUrl="foo/bar" uid="-17"/>
</code>
<output>
<a href="/typo3/index.php?route=/record/edit&edit[a_table][-17]=new&returnUrl=foo/bar">
  Edit record
</a>
</output>

<code title="Link to create a new record of a_table on root page">
<be:link.newRecord table="a_table" returnUrl="foo/bar""/>
</code>
<output>
<a href="/typo3/index.php?route=/record/edit&edit[a_table][]=new&returnUrl=foo/bar">
  Edit record
</a>
</output>

<code title="Link to create a new record of a_table on page 17">
<be:link.newRecord table="a_table" returnUrl="foo/bar" pid="17"/>
</code>
<output>
<a href="/typo3/index.php?route=/record/edit&edit[a_table][-17]=new&returnUrl=foo/bar">
  Edit record
</a>
</output>


.. _typo3-backend-link-newrecord_arguments:

Arguments
=========


.. _link.newrecord_additionalattributes:

additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _link.newrecord_data:

data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _link.newrecord_class:

class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   CSS class(es) for this element

.. _link.newrecord_dir:

dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _link.newrecord_id:

id
--

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _link.newrecord_lang:

lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _link.newrecord_style:

style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Individual CSS styles for this element

.. _link.newrecord_title:

title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Tooltip text of element

.. _link.newrecord_accesskey:

accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Keyboard shortcut to access this element

.. _link.newrecord_tabindex:

tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the tab order of this element

.. _link.newrecord_onclick:

onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   JavaScript evaluated for the onclick event

.. _link.newrecord_uid:

uid
---

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Uid < 0 will insert the record after the given uid

.. _link.newrecord_pid:

pid
---

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   The page id where the record will be created

.. _link.newrecord_table:

table
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Target database table

.. _link.newrecord_returnurl:

returnUrl
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
