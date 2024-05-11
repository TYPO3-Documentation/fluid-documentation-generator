..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/Link/EditRecordViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/backend/Classes/ViewHelpers/Link/EditRecordViewHelper.php
:navigation-title: link.editRecord
.. include:: /Includes.rst.txt

.. _typo3-backend-link-editrecord:

=================================================
Link.editRecord ViewHelper `<be:link.editRecord>`
=================================================

..  note::
    This ViewHelper is not available by default.

    :ref:`Import its namespace <t3coreapi:fluid-syntax-viewhelpers-import-namespaces>`
    :fluid:`{namespace be=TYPO3\CMS\Backend\ViewHelpers\}` in the Fluid file or
    :fluid:`xmlns:be="http://typo3.org/ns/TYPO3/CMS/Backend/ViewHelpers/"` in the opening HTML tag.


Use this ViewHelper to provide edit links to records. The ViewHelper will
pass the uid and table to FormEngine.

The uid must be given as a positive integer.
For new records, use the :ref:`<be:link.newRecordViewHelper> <typo3-backend-link-newrecord>`.

Examples
========

Link to the record-edit action passed to FormEngine::

   <be:link.editRecord uid="42" table="a_table" returnUrl="foo/bar" />

Output::

   <a href="/typo3/record/edit?edit[a_table][42]=edit&returnUrl=foo/bar">
       Edit record
   </a>

Link to edit page uid=3 and then return back to the BE module "web_MyextensionList"::

   <be:link.editRecord uid="3" table="pages" returnUrl="{f:be.uri(route: 'web_MyextensionList')}">

Link to edit only the fields title and subtitle of page uid=42 and return to foo/bar::

   <be:link.editRecord uid="42" table="pages" fields="title,subtitle" returnUrl="foo/bar">
       Edit record
   </be:link.editRecord>

Output::

   <a href="/typo3/record/edit?edit[pages][42]=edit&returnUrl=foo/bar&columnsOnly=title,subtitle">
       Edit record
   </a>

.. _typo3-backend-link-editrecord_source:

Source code
===========

Go to the source code of this ViewHelper: `EditRecordViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/Link/EditRecordViewHelper.php>`__.

.. _typo3-backend-link-editrecord_arguments:

Arguments
=========

The following arguments are available for `<be:link.editRecord>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3-backend-link-editrecord-additionalattributes_argument:

..  confval:: additionalAttributes
    :name: typo3-backend-link-editrecord-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-backend-link-editrecord-data_argument:

..  confval:: data
    :name: typo3-backend-link-editrecord-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-backend-link-editrecord-aria_argument:

..  confval:: aria
    :name: typo3-backend-link-editrecord-aria
    :type: mixed
    :required: false

    Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-backend-link-editrecord-class_argument:

..  confval:: class
    :name: typo3-backend-link-editrecord-class
    :type: string
    :required: false

    CSS class(es) for this element

.. _typo3-backend-link-editrecord-dir_argument:

..  confval:: dir
    :name: typo3-backend-link-editrecord-dir
    :type: string
    :required: false

    Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-backend-link-editrecord-id_argument:

..  confval:: id
    :name: typo3-backend-link-editrecord-id
    :type: string
    :required: false

    Unique (in this file) identifier for this HTML element.

.. _typo3-backend-link-editrecord-lang_argument:

..  confval:: lang
    :name: typo3-backend-link-editrecord-lang
    :type: string
    :required: false

    Language for this element. Use short names specified in RFC 1766

.. _typo3-backend-link-editrecord-style_argument:

..  confval:: style
    :name: typo3-backend-link-editrecord-style
    :type: string
    :required: false

    Individual CSS styles for this element

.. _typo3-backend-link-editrecord-title_argument:

..  confval:: title
    :name: typo3-backend-link-editrecord-title
    :type: string
    :required: false

    Tooltip text of element

.. _typo3-backend-link-editrecord-accesskey_argument:

..  confval:: accesskey
    :name: typo3-backend-link-editrecord-accesskey
    :type: string
    :required: false

    Keyboard shortcut to access this element

.. _typo3-backend-link-editrecord-tabindex_argument:

..  confval:: tabindex
    :name: typo3-backend-link-editrecord-tabindex
    :type: integer
    :required: false

    Specifies the tab order of this element

.. _typo3-backend-link-editrecord-onclick_argument:

..  confval:: onclick
    :name: typo3-backend-link-editrecord-onclick
    :type: string
    :required: false

    JavaScript evaluated for the onclick event

.. _typo3-backend-link-editrecord-uid_argument:

..  confval:: uid
    :name: typo3-backend-link-editrecord-uid
    :type: mixed
    :required: true

    Uid of record to be edited

.. _typo3-backend-link-editrecord-table_argument:

..  confval:: table
    :name: typo3-backend-link-editrecord-table
    :type: string
    :required: true

    Target database table

.. _typo3-backend-link-editrecord-fields_argument:

..  confval:: fields
    :name: typo3-backend-link-editrecord-fields
    :type: string
    :required: false

    Edit only these fields (comma separated list)

.. _typo3-backend-link-editrecord-returnurl_argument:

..  confval:: returnUrl
    :name: typo3-backend-link-editrecord-returnurl
    :type: string
    :required: false

    Return to this URL after closing the edit dialog
