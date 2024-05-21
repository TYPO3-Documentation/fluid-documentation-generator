..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Link/FileViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Link/FileViewHelper.php
:navigation-title: link.file

.. include:: /Includes.rst.txt

.. _typo3-fluid-link-file:

====================================
Link.file ViewHelper `<f:link.file>`
====================================



A ViewHelper for creating links to a file (FAL).

Examples
========

Link to a file
--------------

::

   <f:link.file file="{file}" target="_blank">See file</f:link.file>

Output of a public file::

   <a href="https://example.com/fileadmin/path/to/file.jpg" target="_blank">See file</a>

Output of a non-public file::

   <a href="https://example.com/index.php?eID=dumpFile&t=f&f=123&token=79bce812" target="_blank">See file</a>

Link to download a file
-----------------------

::

   <f:link.file file="{file}" download="true" filename="alternative-name.jpg">Download file</f:link.file>

Output of a public file::

   <a href="https://example.com/fileadmin/path/to/file.jpg" download="alternative-name.jpg">Download file</a>

Output of a non-public file::

   <a href="https://example.com/index.php?eID=dumpFile&t=f&f=123&dl=1&fn=alternative-name.jpg&token=79bce812">Download file</a>

.. _typo3-fluid-link-file_source:

Source code
===========

Go to the source code of this ViewHelper: `FileViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Link/FileViewHelper.php>`__.

.. _typo3-fluid-link-file_arguments:

Arguments
=========

The following arguments are available for `<f:link.file>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3-fluid-link-file-additionalattributes_argument:

..  confval:: additionalAttributes
    :name: typo3-fluid-link-file-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-link-file-data_argument:

..  confval:: data
    :name: typo3-fluid-link-file-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-link-file-aria_argument:

..  confval:: aria
    :name: typo3-fluid-link-file-aria
    :type: mixed
    :required: false

    Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-link-file-file_argument:

..  confval:: file
    :name: typo3-fluid-link-file-file
    :type: mixed
    :required: true

    Specifies the file to create a link to

.. _typo3-fluid-link-file-download_argument:

..  confval:: download
    :name: typo3-fluid-link-file-download
    :type: boolean
    :required: false

    Specifies if file should be downloaded instead of displayed

.. _typo3-fluid-link-file-filename_argument:

..  confval:: filename
    :name: typo3-fluid-link-file-filename
    :type: string
    :required: false

    Specifies an alternative filename. If filename contains a file extension, this must be the same as from 'file'.

.. _typo3-fluid-link-file-class_argument:

..  confval:: class
    :name: typo3-fluid-link-file-class
    :type: string
    :required: false

    CSS class(es) for this element

.. _typo3-fluid-link-file-dir_argument:

..  confval:: dir
    :name: typo3-fluid-link-file-dir
    :type: string
    :required: false

    Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-link-file-id_argument:

..  confval:: id
    :name: typo3-fluid-link-file-id
    :type: string
    :required: false

    Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-link-file-lang_argument:

..  confval:: lang
    :name: typo3-fluid-link-file-lang
    :type: string
    :required: false

    Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-link-file-style_argument:

..  confval:: style
    :name: typo3-fluid-link-file-style
    :type: string
    :required: false

    Individual CSS styles for this element

.. _typo3-fluid-link-file-title_argument:

..  confval:: title
    :name: typo3-fluid-link-file-title
    :type: string
    :required: false

    Tooltip text of element

.. _typo3-fluid-link-file-accesskey_argument:

..  confval:: accesskey
    :name: typo3-fluid-link-file-accesskey
    :type: string
    :required: false

    Keyboard shortcut to access this element

.. _typo3-fluid-link-file-tabindex_argument:

..  confval:: tabindex
    :name: typo3-fluid-link-file-tabindex
    :type: integer
    :required: false

    Specifies the tab order of this element

.. _typo3-fluid-link-file-onclick_argument:

..  confval:: onclick
    :name: typo3-fluid-link-file-onclick
    :type: string
    :required: false

    JavaScript evaluated for the onclick event

.. _typo3-fluid-link-file-name_argument:

..  confval:: name
    :name: typo3-fluid-link-file-name
    :type: string
    :required: false

    Specifies the name of an anchor

.. _typo3-fluid-link-file-rel_argument:

..  confval:: rel
    :name: typo3-fluid-link-file-rel
    :type: string
    :required: false

    Specifies the relationship between the current document and the linked document

.. _typo3-fluid-link-file-rev_argument:

..  confval:: rev
    :name: typo3-fluid-link-file-rev
    :type: string
    :required: false

    Specifies the relationship between the linked document and the current document

.. _typo3-fluid-link-file-target_argument:

..  confval:: target
    :name: typo3-fluid-link-file-target
    :type: string
    :required: false

    Specifies where to open the linked document
