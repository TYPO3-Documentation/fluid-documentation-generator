..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Link/ExternalViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Link/ExternalViewHelper.php
:navigation-title: link.external
.. include:: /Includes.rst.txt

.. _typo3-fluid-link-external:

============================================
Link.external ViewHelper `<f:link.external>`
============================================

A ViewHelper for creating links to external targets.

Examples
========

Default
-------

::

   <f:link.external uri="https://www.typo3.org" target="_blank">external link</f:link.external>

Output::

   <a href="https://www.typo3.org" target="_blank">external link</a>

Custom default scheme
---------------------

::

   <f:link.external uri="typo3.org" defaultScheme="ftp">external ftp link</f:link.external>

Output::

   <a href="ftp://typo3.org">external ftp link</a>

.. _typo3-fluid-link-external_source:

Source code
===========

Go to the source code of this ViewHelper: `ExternalViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Link/ExternalViewHelper.php>`__.

.. _typo3-fluid-link-external_arguments:

Arguments
=========

The following arguments are available for `<f:link.external>`:

..  contents::
    :local:


.. _typo3-fluid-link-external-additionalattributes_argument:

additionalAttributes
--------------------

..  confval:: additionalAttributes
    :name: typo3-fluid-link-external-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-link-external-data_argument:

data
----

..  confval:: data
    :name: typo3-fluid-link-external-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-link-external-aria_argument:

aria
----

..  confval:: aria
    :name: typo3-fluid-link-external-aria
    :type: mixed
    :required: false

    Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-link-external-uri_argument:

uri
---

..  confval:: uri
    :name: typo3-fluid-link-external-uri
    :type: string
    :required: true

    The URI that will be put in the href attribute of the rendered link tag

.. _typo3-fluid-link-external-defaultscheme_argument:

defaultScheme
-------------

..  confval:: defaultScheme
    :name: typo3-fluid-link-external-defaultscheme
    :type: string
    :Default: 'https'
    :required: false

    Scheme the href attribute will be prefixed with if specified $uri does not contain a scheme already

.. _typo3-fluid-link-external-class_argument:

class
-----

..  confval:: class
    :name: typo3-fluid-link-external-class
    :type: string
    :required: false

    CSS class(es) for this element

.. _typo3-fluid-link-external-dir_argument:

dir
---

..  confval:: dir
    :name: typo3-fluid-link-external-dir
    :type: string
    :required: false

    Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-link-external-id_argument:

id
--

..  confval:: id
    :name: typo3-fluid-link-external-id
    :type: string
    :required: false

    Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-link-external-lang_argument:

lang
----

..  confval:: lang
    :name: typo3-fluid-link-external-lang
    :type: string
    :required: false

    Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-link-external-style_argument:

style
-----

..  confval:: style
    :name: typo3-fluid-link-external-style
    :type: string
    :required: false

    Individual CSS styles for this element

.. _typo3-fluid-link-external-title_argument:

title
-----

..  confval:: title
    :name: typo3-fluid-link-external-title
    :type: string
    :required: false

    Tooltip text of element

.. _typo3-fluid-link-external-accesskey_argument:

accesskey
---------

..  confval:: accesskey
    :name: typo3-fluid-link-external-accesskey
    :type: string
    :required: false

    Keyboard shortcut to access this element

.. _typo3-fluid-link-external-tabindex_argument:

tabindex
--------

..  confval:: tabindex
    :name: typo3-fluid-link-external-tabindex
    :type: integer
    :required: false

    Specifies the tab order of this element

.. _typo3-fluid-link-external-onclick_argument:

onclick
-------

..  confval:: onclick
    :name: typo3-fluid-link-external-onclick
    :type: string
    :required: false

    JavaScript evaluated for the onclick event

.. _typo3-fluid-link-external-name_argument:

name
----

..  confval:: name
    :name: typo3-fluid-link-external-name
    :type: string
    :required: false

    Specifies the name of an anchor

.. _typo3-fluid-link-external-rel_argument:

rel
---

..  confval:: rel
    :name: typo3-fluid-link-external-rel
    :type: string
    :required: false

    Specifies the relationship between the current document and the linked document

.. _typo3-fluid-link-external-rev_argument:

rev
---

..  confval:: rev
    :name: typo3-fluid-link-external-rev
    :type: string
    :required: false

    Specifies the relationship between the linked document and the current document

.. _typo3-fluid-link-external-target_argument:

target
------

..  confval:: target
    :name: typo3-fluid-link-external-target
    :type: string
    :required: false

    Specifies where to open the linked document
