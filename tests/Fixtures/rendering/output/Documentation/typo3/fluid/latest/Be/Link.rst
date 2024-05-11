..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/LinkViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/LinkViewHelper.php
:navigation-title: be.link
.. include:: /Includes.rst.txt

.. _typo3-fluid-be-link:

================================
Be.link ViewHelper `<f:be.link>`
================================



A ViewHelper for creating URIs to modules.

Examples
========

URI to the web_ts module on page 92::

   <f:be.link route="web_ts" parameters="{id: 92}">Go to web_ts</f:be.link>

``<a href="/typo3/module/web/ts?token=b6e9c9f&id=92">Go to web_ts</a>``

.. _typo3-fluid-be-link_source:

Source code
===========

Go to the source code of this ViewHelper: `LinkViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/LinkViewHelper.php>`__.

.. _typo3-fluid-be-link_arguments:

Arguments
=========

The following arguments are available for `<f:be.link>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3-fluid-be-link-additionalattributes_argument:

..  confval:: additionalAttributes
    :name: typo3-fluid-be-link-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-be-link-data_argument:

..  confval:: data
    :name: typo3-fluid-be-link-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-be-link-aria_argument:

..  confval:: aria
    :name: typo3-fluid-be-link-aria
    :type: mixed
    :required: false

    Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-be-link-route_argument:

..  confval:: route
    :name: typo3-fluid-be-link-route
    :type: string
    :required: true

    The name of the route

.. _typo3-fluid-be-link-parameters_argument:

..  confval:: parameters
    :name: typo3-fluid-be-link-parameters
    :type: mixed
    :Default: array ()
    :required: false

    An array of parameters

.. _typo3-fluid-be-link-referencetype_argument:

..  confval:: referenceType
    :name: typo3-fluid-be-link-referencetype
    :type: string
    :Default: 'absolute'
    :required: false

    The type of reference to be generated (one of the constants)

.. _typo3-fluid-be-link-name_argument:

..  confval:: name
    :name: typo3-fluid-be-link-name
    :type: string
    :required: false

    Specifies the name of an anchor

.. _typo3-fluid-be-link-rel_argument:

..  confval:: rel
    :name: typo3-fluid-be-link-rel
    :type: string
    :required: false

    Specifies the relationship between the current document and the linked document

.. _typo3-fluid-be-link-rev_argument:

..  confval:: rev
    :name: typo3-fluid-be-link-rev
    :type: string
    :required: false

    Specifies the relationship between the linked document and the current document

.. _typo3-fluid-be-link-target_argument:

..  confval:: target
    :name: typo3-fluid-be-link-target
    :type: string
    :required: false

    Specifies where to open the linked document

.. _typo3-fluid-be-link-class_argument:

..  confval:: class
    :name: typo3-fluid-be-link-class
    :type: string
    :required: false

    CSS class(es) for this element

.. _typo3-fluid-be-link-dir_argument:

..  confval:: dir
    :name: typo3-fluid-be-link-dir
    :type: string
    :required: false

    Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-be-link-id_argument:

..  confval:: id
    :name: typo3-fluid-be-link-id
    :type: string
    :required: false

    Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-be-link-lang_argument:

..  confval:: lang
    :name: typo3-fluid-be-link-lang
    :type: string
    :required: false

    Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-be-link-style_argument:

..  confval:: style
    :name: typo3-fluid-be-link-style
    :type: string
    :required: false

    Individual CSS styles for this element

.. _typo3-fluid-be-link-title_argument:

..  confval:: title
    :name: typo3-fluid-be-link-title
    :type: string
    :required: false

    Tooltip text of element

.. _typo3-fluid-be-link-accesskey_argument:

..  confval:: accesskey
    :name: typo3-fluid-be-link-accesskey
    :type: string
    :required: false

    Keyboard shortcut to access this element

.. _typo3-fluid-be-link-tabindex_argument:

..  confval:: tabindex
    :name: typo3-fluid-be-link-tabindex
    :type: integer
    :required: false

    Specifies the tab order of this element

.. _typo3-fluid-be-link-onclick_argument:

..  confval:: onclick
    :name: typo3-fluid-be-link-onclick
    :type: string
    :required: false

    JavaScript evaluated for the onclick event
