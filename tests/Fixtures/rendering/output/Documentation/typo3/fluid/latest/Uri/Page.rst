..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Uri/PageViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Uri/PageViewHelper.php
:navigation-title: uri.page
.. include:: /Includes.rst.txt

.. _typo3-fluid-uri-page:

==================================
Uri.page ViewHelper `<f:uri.page>`
==================================



A ViewHelper for creating URIs to TYPO3 pages.

Examples
========

URI to the current page
-----------------------

::

   <f:uri.page>page link</f:uri.page>

``/page/path/name.html``

Depending on current page, routing and page path configuration.

Query parameters
----------------

::

   <f:uri.page pageUid="1" additionalParams="{foo: 'bar'}" />

``/page/path/name.html?foo=bar``

Depending on current page, routing and page path configuration.

Query parameters for extensions
-------------------------------

::

   <f:uri.page pageUid="1" additionalParams="{extension_key: {foo: 'bar'}}" />

``/page/path/name.html?extension_key[foo]=bar``

Depending on current page, routing and page path configuration.

.. _typo3-fluid-uri-page_source:

Source code
===========

Go to the source code of this ViewHelper: `PageViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Uri/PageViewHelper.php>`__.

.. _typo3-fluid-uri-page_arguments:

Arguments
=========

The following arguments are available for `<f:uri.page>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3-fluid-uri-page-pageuid_argument:

..  confval:: pageUid
    :name: typo3-fluid-uri-page-pageuid
    :type: mixed
    :required: false

    Target PID

.. _typo3-fluid-uri-page-additionalparams_argument:

..  confval:: additionalParams
    :name: typo3-fluid-uri-page-additionalparams
    :type: mixed
    :Default: array ()
    :required: false

    Query parameters to be attached to the resulting URI

.. _typo3-fluid-uri-page-pagetype_argument:

..  confval:: pageType
    :name: typo3-fluid-uri-page-pagetype
    :type: mixed
    :required: false

    Type of the target page. See typolink.parameter

.. _typo3-fluid-uri-page-nocache_argument:

..  confval:: noCache
    :name: typo3-fluid-uri-page-nocache
    :type: boolean
    :required: false

    Set this to disable caching for the target page. You should not need this.

.. _typo3-fluid-uri-page-language_argument:

..  confval:: language
    :name: typo3-fluid-uri-page-language
    :type: string
    :required: false

    Link to a specific language - defaults to the current language, use a language ID or "current" to enforce a specific language

.. _typo3-fluid-uri-page-section_argument:

..  confval:: section
    :name: typo3-fluid-uri-page-section
    :type: string
    :required: false

    The anchor to be added to the URI

.. _typo3-fluid-uri-page-linkaccessrestrictedpages_argument:

..  confval:: linkAccessRestrictedPages
    :name: typo3-fluid-uri-page-linkaccessrestrictedpages
    :type: boolean
    :required: false

    If set, links pointing to access restricted pages will still link to the page even though the page cannot be accessed.

.. _typo3-fluid-uri-page-absolute_argument:

..  confval:: absolute
    :name: typo3-fluid-uri-page-absolute
    :type: boolean
    :required: false

    If set, the URI of the rendered link is absolute

.. _typo3-fluid-uri-page-addquerystring_argument:

..  confval:: addQueryString
    :name: typo3-fluid-uri-page-addquerystring
    :type: string
    :required: false

    If set, the current query parameters will be kept in the URL. If set to "untrusted", then ALL query parameters will be added. Be aware, that this might lead to problems when the generated link is cached.

.. _typo3-fluid-uri-page-argumentstobeexcludedfromquerystring_argument:

..  confval:: argumentsToBeExcludedFromQueryString
    :name: typo3-fluid-uri-page-argumentstobeexcludedfromquerystring
    :type: mixed
    :Default: array ()
    :required: false

    Arguments to be removed from the URI. Only active if $addQueryString = TRUE
