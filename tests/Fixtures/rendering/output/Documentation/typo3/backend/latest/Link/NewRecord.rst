..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/Link/NewRecordViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/backend/Classes/ViewHelpers/Link/NewRecordViewHelper.php
:navigation-title: link.newRecord
.. include:: /Includes.rst.txt

.. _typo3-backend-link-newrecord:

===============================================
Link.newRecord ViewHelper `<be:link.newRecord>`
===============================================

..  note::
    This ViewHelper is not available by default.

    :ref:`Import its namespace <t3coreapi:fluid-syntax-viewhelpers-import-namespaces>`
    :fluid:`{namespace be=TYPO3\CMS\Backend\ViewHelpers\}` in the Fluid file or
    :fluid:`xmlns:be="http://typo3.org/ns/TYPO3/CMS/Backend/ViewHelpers/"` in the opening HTML tag.


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

.. _typo3-backend-link-newrecord_source:

Source code
===========

Go to the source code of this ViewHelper: `NewRecordViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/Link/NewRecordViewHelper.php>`__.

.. _typo3-backend-link-newrecord_arguments:

Arguments
=========

The following arguments are available for `<be:link.newRecord>`:

..  contents::
    :local:


.. _typo3-backend-link-newrecord-additionalattributes_argument:

additionalAttributes
--------------------

..  confval:: additionalAttributes
    :name: typo3-backend-link-newrecord-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-backend-link-newrecord-data_argument:

data
----

..  confval:: data
    :name: typo3-backend-link-newrecord-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-backend-link-newrecord-aria_argument:

aria
----

..  confval:: aria
    :name: typo3-backend-link-newrecord-aria
    :type: mixed
    :required: false

    Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-backend-link-newrecord-class_argument:

class
-----

..  confval:: class
    :name: typo3-backend-link-newrecord-class
    :type: string
    :required: false

    CSS class(es) for this element

.. _typo3-backend-link-newrecord-dir_argument:

dir
---

..  confval:: dir
    :name: typo3-backend-link-newrecord-dir
    :type: string
    :required: false

    Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-backend-link-newrecord-id_argument:

id
--

..  confval:: id
    :name: typo3-backend-link-newrecord-id
    :type: string
    :required: false

    Unique (in this file) identifier for this HTML element.

.. _typo3-backend-link-newrecord-lang_argument:

lang
----

..  confval:: lang
    :name: typo3-backend-link-newrecord-lang
    :type: string
    :required: false

    Language for this element. Use short names specified in RFC 1766

.. _typo3-backend-link-newrecord-style_argument:

style
-----

..  confval:: style
    :name: typo3-backend-link-newrecord-style
    :type: string
    :required: false

    Individual CSS styles for this element

.. _typo3-backend-link-newrecord-title_argument:

title
-----

..  confval:: title
    :name: typo3-backend-link-newrecord-title
    :type: string
    :required: false

    Tooltip text of element

.. _typo3-backend-link-newrecord-accesskey_argument:

accesskey
---------

..  confval:: accesskey
    :name: typo3-backend-link-newrecord-accesskey
    :type: string
    :required: false

    Keyboard shortcut to access this element

.. _typo3-backend-link-newrecord-tabindex_argument:

tabindex
--------

..  confval:: tabindex
    :name: typo3-backend-link-newrecord-tabindex
    :type: integer
    :required: false

    Specifies the tab order of this element

.. _typo3-backend-link-newrecord-onclick_argument:

onclick
-------

..  confval:: onclick
    :name: typo3-backend-link-newrecord-onclick
    :type: string
    :required: false

    JavaScript evaluated for the onclick event

.. _typo3-backend-link-newrecord-uid_argument:

uid
---

..  confval:: uid
    :name: typo3-backend-link-newrecord-uid
    :type: mixed
    :required: false

    Uid < 0 will insert the record after the given uid

.. _typo3-backend-link-newrecord-pid_argument:

pid
---

..  confval:: pid
    :name: typo3-backend-link-newrecord-pid
    :type: mixed
    :required: false

    The page id where the record will be created

.. _typo3-backend-link-newrecord-table_argument:

table
-----

..  confval:: table
    :name: typo3-backend-link-newrecord-table
    :type: string
    :required: true

    Target database table

.. _typo3-backend-link-newrecord-returnurl_argument:

returnUrl
---------

..  confval:: returnUrl
    :name: typo3-backend-link-newrecord-returnurl
    :type: string
    :required: false

    Return to this URL after closing the new record dialog

.. _typo3-backend-link-newrecord-defaultvalues_argument:

defaultValues
-------------

..  confval:: defaultValues
    :name: typo3-backend-link-newrecord-defaultvalues
    :type: mixed
    :Default: array ()
    :required: false

    Default values for fields of the new record
