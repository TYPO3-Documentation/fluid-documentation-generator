:navigation-title: uri.action
.. include:: /Includes.rst.txt

.. _typo3-fluid-uri-action:

======================================
uri.action ViewHelper `<f:uri.action>`
======================================


A ViewHelper for creating URIs to extbase actions. Tailored for extbase plugins, uses extbase Request and extbase UriBuilder.

Examples
========

URI to the show-action of the current controller::

   <f:uri.action action="show" />

``/page/path/name.html?tx_myextension_plugin[action]=show&tx_myextension_plugin[controller]=Standard&cHash=xyz``

Depending on current page, routing and page path configuration.


.. _typo3-fluid-uri-action_arguments:

Arguments
=========


.. _typo3-fluid-uri-action-action:

action
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Target action

.. _typo3-fluid-uri-action-arguments:

arguments
---------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   false
:aspect:`Description`
   Arguments

.. _typo3-fluid-uri-action-controller:

controller
----------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Target controller. If NULL current controllerName is used

.. _typo3-fluid-uri-action-extensionname:

extensionName
-------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Target Extension Name (without `tx_` prefix and no underscores). If NULL the current extension name is used

.. _typo3-fluid-uri-action-pluginname:

pluginName
----------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Target plugin. If empty, the current plugin name is used

.. _typo3-fluid-uri-action-pageuid:

pageUid
-------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Target page. See TypoLink destination

.. _typo3-fluid-uri-action-pagetype:

pageType
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Type of the target page. See typolink.parameter

.. _typo3-fluid-uri-action-nocache:

noCache
-------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   Set this to disable caching for the target page. You should not need this.

.. _typo3-fluid-uri-action-language:

language
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Link to a specific language - defaults to the current language, use a language ID or "current" to enforce a specific language

.. _typo3-fluid-uri-action-section:

section
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The anchor to be added to the URI

.. _typo3-fluid-uri-action-format:

format
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The requested format, e.g. ".html

.. _typo3-fluid-uri-action-linkaccessrestrictedpages:

linkAccessRestrictedPages
-------------------------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   If set, links pointing to access restricted pages will still link to the page even though the page cannot be accessed.

.. _typo3-fluid-uri-action-additionalparams:

additionalParams
----------------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   false
:aspect:`Description`
   Additional query parameters that won't be prefixed like $arguments (overrule $arguments)

.. _typo3-fluid-uri-action-absolute:

absolute
--------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   If set, an absolute URI is rendered

.. _typo3-fluid-uri-action-addquerystring:

addQueryString
--------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   If set, the current query parameters will be kept in the URL. If set to "untrusted", then ALL query parameters will be added. Be aware, that this might lead to problems when the generated link is cached.

.. _typo3-fluid-uri-action-argumentstobeexcludedfromquerystring:

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
