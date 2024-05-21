..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Link/ActionViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Link/ActionViewHelper.php
:navigation-title: link.action

.. include:: /Includes.rst.txt

.. _typo3-fluid-link-action:

========================================
Link.action ViewHelper `<f:link.action>`
========================================



A ViewHelper for creating links to extbase actions. Tailored for extbase plugins, uses extbase Request and extbase UriBuilder.

Examples
========

link to the show-action of the current controller::

   <f:link.action action="show">action link</f:link.action>

Output::

   <a href="index.php?id=123&tx_myextension_plugin[action]=show&tx_myextension_plugin[controller]=Standard&cHash=xyz">action link</a>

Depending on the current page and your TypoScript configuration.

.. _typo3-fluid-link-action_source:

Source code
===========

Go to the source code of this ViewHelper: `ActionViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Link/ActionViewHelper.php>`__.

.. _typo3-fluid-link-action_arguments:

Arguments
=========

The following arguments are available for `<f:link.action>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3-fluid-link-action-additionalattributes_argument:

..  confval:: additionalAttributes
    :name: typo3-fluid-link-action-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-link-action-data_argument:

..  confval:: data
    :name: typo3-fluid-link-action-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-link-action-aria_argument:

..  confval:: aria
    :name: typo3-fluid-link-action-aria
    :type: mixed
    :required: false

    Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-link-action-class_argument:

..  confval:: class
    :name: typo3-fluid-link-action-class
    :type: string
    :required: false

    CSS class(es) for this element

.. _typo3-fluid-link-action-dir_argument:

..  confval:: dir
    :name: typo3-fluid-link-action-dir
    :type: string
    :required: false

    Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-link-action-id_argument:

..  confval:: id
    :name: typo3-fluid-link-action-id
    :type: string
    :required: false

    Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-link-action-lang_argument:

..  confval:: lang
    :name: typo3-fluid-link-action-lang
    :type: string
    :required: false

    Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-link-action-style_argument:

..  confval:: style
    :name: typo3-fluid-link-action-style
    :type: string
    :required: false

    Individual CSS styles for this element

.. _typo3-fluid-link-action-title_argument:

..  confval:: title
    :name: typo3-fluid-link-action-title
    :type: string
    :required: false

    Tooltip text of element

.. _typo3-fluid-link-action-accesskey_argument:

..  confval:: accesskey
    :name: typo3-fluid-link-action-accesskey
    :type: string
    :required: false

    Keyboard shortcut to access this element

.. _typo3-fluid-link-action-tabindex_argument:

..  confval:: tabindex
    :name: typo3-fluid-link-action-tabindex
    :type: integer
    :required: false

    Specifies the tab order of this element

.. _typo3-fluid-link-action-onclick_argument:

..  confval:: onclick
    :name: typo3-fluid-link-action-onclick
    :type: string
    :required: false

    JavaScript evaluated for the onclick event

.. _typo3-fluid-link-action-name_argument:

..  confval:: name
    :name: typo3-fluid-link-action-name
    :type: string
    :required: false

    Specifies the name of an anchor

.. _typo3-fluid-link-action-rel_argument:

..  confval:: rel
    :name: typo3-fluid-link-action-rel
    :type: string
    :required: false

    Specifies the relationship between the current document and the linked document

.. _typo3-fluid-link-action-rev_argument:

..  confval:: rev
    :name: typo3-fluid-link-action-rev
    :type: string
    :required: false

    Specifies the relationship between the linked document and the current document

.. _typo3-fluid-link-action-target_argument:

..  confval:: target
    :name: typo3-fluid-link-action-target
    :type: string
    :required: false

    Specifies where to open the linked document

.. _typo3-fluid-link-action-action_argument:

..  confval:: action
    :name: typo3-fluid-link-action-action
    :type: string
    :required: false

    Target action

.. _typo3-fluid-link-action-controller_argument:

..  confval:: controller
    :name: typo3-fluid-link-action-controller
    :type: string
    :required: false

    Target controller. If NULL current controllerName is used

.. _typo3-fluid-link-action-extensionname_argument:

..  confval:: extensionName
    :name: typo3-fluid-link-action-extensionname
    :type: string
    :required: false

    Target Extension Name (without `tx_` prefix and no underscores). If NULL the current extension name is used

.. _typo3-fluid-link-action-pluginname_argument:

..  confval:: pluginName
    :name: typo3-fluid-link-action-pluginname
    :type: string
    :required: false

    Target plugin. If empty, the current plugin name is used

.. _typo3-fluid-link-action-pageuid_argument:

..  confval:: pageUid
    :name: typo3-fluid-link-action-pageuid
    :type: mixed
    :required: false

    Target page. See TypoLink destination

.. _typo3-fluid-link-action-pagetype_argument:

..  confval:: pageType
    :name: typo3-fluid-link-action-pagetype
    :type: mixed
    :required: false

    Type of the target page. See typolink.parameter

.. _typo3-fluid-link-action-nocache_argument:

..  confval:: noCache
    :name: typo3-fluid-link-action-nocache
    :type: boolean
    :required: false

    Set this to disable caching for the target page. You should not need this.

.. _typo3-fluid-link-action-language_argument:

..  confval:: language
    :name: typo3-fluid-link-action-language
    :type: string
    :required: false

    Link to a specific language - defaults to the current language, use a language ID or "current" to enforce a specific language

.. _typo3-fluid-link-action-section_argument:

..  confval:: section
    :name: typo3-fluid-link-action-section
    :type: string
    :required: false

    The anchor to be added to the URI

.. _typo3-fluid-link-action-format_argument:

..  confval:: format
    :name: typo3-fluid-link-action-format
    :type: string
    :required: false

    The requested format, e.g. ".html

.. _typo3-fluid-link-action-linkaccessrestrictedpages_argument:

..  confval:: linkAccessRestrictedPages
    :name: typo3-fluid-link-action-linkaccessrestrictedpages
    :type: boolean
    :required: false

    If set, links pointing to access restricted pages will still link to the page even though the page cannot be accessed.

.. _typo3-fluid-link-action-additionalparams_argument:

..  confval:: additionalParams
    :name: typo3-fluid-link-action-additionalparams
    :type: mixed
    :required: false

    Additional query parameters that won't be prefixed like $arguments (overrule $arguments)

.. _typo3-fluid-link-action-absolute_argument:

..  confval:: absolute
    :name: typo3-fluid-link-action-absolute
    :type: boolean
    :required: false

    If set, the URI of the rendered link is absolute

.. _typo3-fluid-link-action-addquerystring_argument:

..  confval:: addQueryString
    :name: typo3-fluid-link-action-addquerystring
    :type: string
    :required: false

    If set, the current query parameters will be kept in the URL. If set to "untrusted", then ALL query parameters will be added. Be aware, that this might lead to problems when the generated link is cached.

.. _typo3-fluid-link-action-argumentstobeexcludedfromquerystring_argument:

..  confval:: argumentsToBeExcludedFromQueryString
    :name: typo3-fluid-link-action-argumentstobeexcludedfromquerystring
    :type: mixed
    :required: false

    Arguments to be removed from the URI. Only active if $addQueryString = TRUE

.. _typo3-fluid-link-action-arguments_argument:

..  confval:: arguments
    :name: typo3-fluid-link-action-arguments
    :type: mixed
    :required: false

    Arguments for the controller action, associative array
