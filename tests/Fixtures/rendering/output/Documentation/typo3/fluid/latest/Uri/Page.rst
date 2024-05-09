:navigation-title: uri.page
.. include:: /Includes.rst.txt

.. _typo3-fluid-uri-page:

==================================
uri.page ViewHelper `<f:uri.page>`
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


.. _typo3-fluid-uri-page_arguments:

Arguments
=========


.. _typo3-fluid-uri-page-pageuid:

pageUid
-------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Target PID

.. _typo3-fluid-uri-page-additionalparams:

additionalParams
----------------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   false
:aspect:`Description`
   Query parameters to be attached to the resulting URI

.. _typo3-fluid-uri-page-pagetype:

pageType
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Type of the target page. See typolink.parameter

.. _typo3-fluid-uri-page-nocache:

noCache
-------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   Set this to disable caching for the target page. You should not need this.

.. _typo3-fluid-uri-page-language:

language
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Link to a specific language - defaults to the current language, use a language ID or "current" to enforce a specific language

.. _typo3-fluid-uri-page-section:

section
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The anchor to be added to the URI

.. _typo3-fluid-uri-page-linkaccessrestrictedpages:

linkAccessRestrictedPages
-------------------------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   If set, links pointing to access restricted pages will still link to the page even though the page cannot be accessed.

.. _typo3-fluid-uri-page-absolute:

absolute
--------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   If set, the URI of the rendered link is absolute

.. _typo3-fluid-uri-page-addquerystring:

addQueryString
--------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   If set, the current query parameters will be kept in the URL. If set to "untrusted", then ALL query parameters will be added. Be aware, that this might lead to problems when the generated link is cached.

.. _typo3-fluid-uri-page-argumentstobeexcludedfromquerystring:

argumentsToBeExcludedFromQueryString
------------------------------------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   false
:aspect:`Description`
   Arguments to be removed from the URI. Only active if $addQueryString = TRUE
