..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Link/PageViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Link/PageViewHelper.php
:navigation-title: link.page
.. include:: /Includes.rst.txt

.. _typo3-fluid-link-page:

====================================
Link.page ViewHelper `<f:link.page>`
====================================



A ViewHelper for creating links to TYPO3 pages.

Examples
========

Link to the current page
------------------------

::

   <f:link.page>page link</f:link.page>

Output::

   <a href="/page/path/name.html">page link</a>

Depending on current page, routing and page path configuration.

Query parameters
----------------

::

   <f:link.page pageUid="1" additionalParams="{foo: 'bar'}">page link</f:link.page>

Output::

   <a href="/page/path/name.html?foo=bar">page link</a>

Depending on current page, routing and page path configuration.

Query parameters for extensions
-------------------------------

::

   <f:link.page pageUid="1" additionalParams="{extension_key: {foo: 'bar'}}">page link</f:link.page>

Output::

   <a href="/page/path/name.html?extension_key[foo]=bar">page link</a>

Depending on current page, routing and page path configuration.

.. _typo3-fluid-link-page_source:

Source code
===========

Go to the source code of this ViewHelper: `PageViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Link/PageViewHelper.php>`__.

.. _typo3-fluid-link-page_arguments:

Arguments
=========

The following arguments are available for `<f:link.page>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3-fluid-link-page-additionalattributes_argument:

..  confval:: additionalAttributes
    :name: typo3-fluid-link-page-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-link-page-data_argument:

..  confval:: data
    :name: typo3-fluid-link-page-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-link-page-aria_argument:

..  confval:: aria
    :name: typo3-fluid-link-page-aria
    :type: mixed
    :required: false

    Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-link-page-class_argument:

..  confval:: class
    :name: typo3-fluid-link-page-class
    :type: string
    :required: false

    CSS class(es) for this element

.. _typo3-fluid-link-page-dir_argument:

..  confval:: dir
    :name: typo3-fluid-link-page-dir
    :type: string
    :required: false

    Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-link-page-id_argument:

..  confval:: id
    :name: typo3-fluid-link-page-id
    :type: string
    :required: false

    Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-link-page-lang_argument:

..  confval:: lang
    :name: typo3-fluid-link-page-lang
    :type: string
    :required: false

    Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-link-page-style_argument:

..  confval:: style
    :name: typo3-fluid-link-page-style
    :type: string
    :required: false

    Individual CSS styles for this element

.. _typo3-fluid-link-page-title_argument:

..  confval:: title
    :name: typo3-fluid-link-page-title
    :type: string
    :required: false

    Tooltip text of element

.. _typo3-fluid-link-page-accesskey_argument:

..  confval:: accesskey
    :name: typo3-fluid-link-page-accesskey
    :type: string
    :required: false

    Keyboard shortcut to access this element

.. _typo3-fluid-link-page-tabindex_argument:

..  confval:: tabindex
    :name: typo3-fluid-link-page-tabindex
    :type: integer
    :required: false

    Specifies the tab order of this element

.. _typo3-fluid-link-page-onclick_argument:

..  confval:: onclick
    :name: typo3-fluid-link-page-onclick
    :type: string
    :required: false

    JavaScript evaluated for the onclick event

.. _typo3-fluid-link-page-target_argument:

..  confval:: target
    :name: typo3-fluid-link-page-target
    :type: string
    :required: false

    Target of link

.. _typo3-fluid-link-page-rel_argument:

..  confval:: rel
    :name: typo3-fluid-link-page-rel
    :type: string
    :required: false

    Specifies the relationship between the current document and the linked document

.. _typo3-fluid-link-page-pageuid_argument:

..  confval:: pageUid
    :name: typo3-fluid-link-page-pageuid
    :type: mixed
    :required: false

    Target page. See TypoLink destination

.. _typo3-fluid-link-page-pagetype_argument:

..  confval:: pageType
    :name: typo3-fluid-link-page-pagetype
    :type: mixed
    :required: false

    Type of the target page. See typolink.parameter

.. _typo3-fluid-link-page-nocache_argument:

..  confval:: noCache
    :name: typo3-fluid-link-page-nocache
    :type: boolean
    :required: false

    Set this to disable caching for the target page. You should not need this.

.. _typo3-fluid-link-page-language_argument:

..  confval:: language
    :name: typo3-fluid-link-page-language
    :type: string
    :required: false

    Link to a specific language - defaults to the current language, use a language ID or "current" to enforce a specific language

.. _typo3-fluid-link-page-section_argument:

..  confval:: section
    :name: typo3-fluid-link-page-section
    :type: string
    :required: false

    The anchor to be added to the URI

.. _typo3-fluid-link-page-linkaccessrestrictedpages_argument:

..  confval:: linkAccessRestrictedPages
    :name: typo3-fluid-link-page-linkaccessrestrictedpages
    :type: boolean
    :required: false

    If set, links pointing to access restricted pages will still link to the page even though the page cannot be accessed.

.. _typo3-fluid-link-page-additionalparams_argument:

..  confval:: additionalParams
    :name: typo3-fluid-link-page-additionalparams
    :type: mixed
    :required: false

    Additional query parameters that won't be prefixed like $arguments (overrule $arguments)

.. _typo3-fluid-link-page-absolute_argument:

..  confval:: absolute
    :name: typo3-fluid-link-page-absolute
    :type: boolean
    :required: false

    If set, the URI of the rendered link is absolute

.. _typo3-fluid-link-page-addquerystring_argument:

..  confval:: addQueryString
    :name: typo3-fluid-link-page-addquerystring
    :type: string
    :required: false

    If set, the current query parameters will be kept in the URL. If set to "untrusted", then ALL query parameters will be added. Be aware, that this might lead to problems when the generated link is cached.

.. _typo3-fluid-link-page-argumentstobeexcludedfromquerystring_argument:

..  confval:: argumentsToBeExcludedFromQueryString
    :name: typo3-fluid-link-page-argumentstobeexcludedfromquerystring
    :type: mixed
    :required: false

    Arguments to be removed from the URI. Only active if $addQueryString = TRUE
