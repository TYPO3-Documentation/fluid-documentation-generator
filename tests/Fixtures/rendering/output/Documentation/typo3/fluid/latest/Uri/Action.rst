..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Uri/ActionViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Uri/ActionViewHelper.php
:navigation-title: uri.action
.. include:: /Includes.rst.txt

.. _typo3-fluid-uri-action:

======================================
Uri.action ViewHelper `<f:uri.action>`
======================================



A ViewHelper for creating URIs to extbase actions. Tailored for extbase plugins, uses extbase Request and extbase UriBuilder.

Examples
========

URI to the show-action of the current controller::

   <f:uri.action action="show" />

``/page/path/name.html?tx_myextension_plugin[action]=show&tx_myextension_plugin[controller]=Standard&cHash=xyz``

Depending on current page, routing and page path configuration.

.. _typo3-fluid-uri-action_source:

Source code
===========

Go to the source code of this ViewHelper: `ActionViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Uri/ActionViewHelper.php>`__.

.. _typo3-fluid-uri-action_arguments:

Arguments
=========

The following arguments are available for `<f:uri.action>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3-fluid-uri-action-action_argument:

..  confval:: action
    :name: typo3-fluid-uri-action-action
    :type: string
    :required: false

    Target action

.. _typo3-fluid-uri-action-arguments_argument:

..  confval:: arguments
    :name: typo3-fluid-uri-action-arguments
    :type: mixed
    :Default: array ()
    :required: false

    Arguments

.. _typo3-fluid-uri-action-controller_argument:

..  confval:: controller
    :name: typo3-fluid-uri-action-controller
    :type: string
    :required: false

    Target controller. If NULL current controllerName is used

.. _typo3-fluid-uri-action-extensionname_argument:

..  confval:: extensionName
    :name: typo3-fluid-uri-action-extensionname
    :type: string
    :required: false

    Target Extension Name (without `tx_` prefix and no underscores). If NULL the current extension name is used

.. _typo3-fluid-uri-action-pluginname_argument:

..  confval:: pluginName
    :name: typo3-fluid-uri-action-pluginname
    :type: string
    :required: false

    Target plugin. If empty, the current plugin name is used

.. _typo3-fluid-uri-action-pageuid_argument:

..  confval:: pageUid
    :name: typo3-fluid-uri-action-pageuid
    :type: mixed
    :required: false

    Target page. See TypoLink destination

.. _typo3-fluid-uri-action-pagetype_argument:

..  confval:: pageType
    :name: typo3-fluid-uri-action-pagetype
    :type: mixed
    :required: false

    Type of the target page. See typolink.parameter

.. _typo3-fluid-uri-action-nocache_argument:

..  confval:: noCache
    :name: typo3-fluid-uri-action-nocache
    :type: boolean
    :required: false

    Set this to disable caching for the target page. You should not need this.

.. _typo3-fluid-uri-action-language_argument:

..  confval:: language
    :name: typo3-fluid-uri-action-language
    :type: string
    :required: false

    Link to a specific language - defaults to the current language, use a language ID or "current" to enforce a specific language

.. _typo3-fluid-uri-action-section_argument:

..  confval:: section
    :name: typo3-fluid-uri-action-section
    :type: string
    :required: false

    The anchor to be added to the URI

.. _typo3-fluid-uri-action-format_argument:

..  confval:: format
    :name: typo3-fluid-uri-action-format
    :type: string
    :required: false

    The requested format, e.g. ".html

.. _typo3-fluid-uri-action-linkaccessrestrictedpages_argument:

..  confval:: linkAccessRestrictedPages
    :name: typo3-fluid-uri-action-linkaccessrestrictedpages
    :type: boolean
    :required: false

    If set, links pointing to access restricted pages will still link to the page even though the page cannot be accessed.

.. _typo3-fluid-uri-action-additionalparams_argument:

..  confval:: additionalParams
    :name: typo3-fluid-uri-action-additionalparams
    :type: mixed
    :Default: array ()
    :required: false

    Additional query parameters that won't be prefixed like $arguments (overrule $arguments)

.. _typo3-fluid-uri-action-absolute_argument:

..  confval:: absolute
    :name: typo3-fluid-uri-action-absolute
    :type: boolean
    :required: false

    If set, an absolute URI is rendered

.. _typo3-fluid-uri-action-addquerystring_argument:

..  confval:: addQueryString
    :name: typo3-fluid-uri-action-addquerystring
    :type: string
    :required: false

    If set, the current query parameters will be kept in the URL. If set to "untrusted", then ALL query parameters will be added. Be aware, that this might lead to problems when the generated link is cached.

.. _typo3-fluid-uri-action-argumentstobeexcludedfromquerystring_argument:

..  confval:: argumentsToBeExcludedFromQueryString
    :name: typo3-fluid-uri-action-argumentstobeexcludedfromquerystring
    :type: mixed
    :Default: array ()
    :required: false

    Arguments to be removed from the URI. Only active if $addQueryString = TRUE
