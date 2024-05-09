..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Asset/CssViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Asset/CssViewHelper.php
:navigation-title: asset.css
.. include:: /Includes.rst.txt

.. _typo3-fluid-asset-css:

====================================
Asset.css ViewHelper `<f:asset.css>`
====================================



ViewHelper to add CSS to the TYPO3 AssetCollector. Either a file or inline CSS can be added.

Examples
========

::

   <f:asset.css identifier="identifier123" href="EXT:my_ext/Resources/Public/Css/foo.css" />
   <f:asset.css identifier="identifier123">
      .foo { color: black; }
   </f:asset.css>

Details
=======

In the AssetCollector, the "identifier" attribute is used as a unique identifier. Thus, if assets are added multiple
times using the same identifier, the asset will only be served once (the last added overrides previous assets).

Some available attributes are defaults but do not make sense for this ViewHelper. Relevant attributes specific
for this ViewHelper are: as, crossorigin, disabled, href, hreflang, importance, integrity, media, referrerpolicy,
sizes, type, nonce.

.. _typo3-fluid-asset-css_source:

Source code
===========

Go to the source code of this ViewHelper: `CssViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Asset/CssViewHelper.php>`__.

.. _typo3-fluid-asset-css_arguments:

Arguments
=========

The following arguments are available for `<f:asset.css>`:

..  contents::
    :local:


.. _typo3-fluid-asset-css-additionalattributes_argument:

additionalAttributes
--------------------

..  confval:: additionalAttributes
    :name: typo3-fluid-asset-css-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-asset-css-data_argument:

data
----

..  confval:: data
    :name: typo3-fluid-asset-css-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-asset-css-aria_argument:

aria
----

..  confval:: aria
    :name: typo3-fluid-asset-css-aria
    :type: mixed
    :required: false

    Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-asset-css-class_argument:

class
-----

..  confval:: class
    :name: typo3-fluid-asset-css-class
    :type: string
    :required: false

    CSS class(es) for this element

.. _typo3-fluid-asset-css-dir_argument:

dir
---

..  confval:: dir
    :name: typo3-fluid-asset-css-dir
    :type: string
    :required: false

    Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-asset-css-id_argument:

id
--

..  confval:: id
    :name: typo3-fluid-asset-css-id
    :type: string
    :required: false

    Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-asset-css-lang_argument:

lang
----

..  confval:: lang
    :name: typo3-fluid-asset-css-lang
    :type: string
    :required: false

    Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-asset-css-style_argument:

style
-----

..  confval:: style
    :name: typo3-fluid-asset-css-style
    :type: string
    :required: false

    Individual CSS styles for this element

.. _typo3-fluid-asset-css-title_argument:

title
-----

..  confval:: title
    :name: typo3-fluid-asset-css-title
    :type: string
    :required: false

    Tooltip text of element

.. _typo3-fluid-asset-css-accesskey_argument:

accesskey
---------

..  confval:: accesskey
    :name: typo3-fluid-asset-css-accesskey
    :type: string
    :required: false

    Keyboard shortcut to access this element

.. _typo3-fluid-asset-css-tabindex_argument:

tabindex
--------

..  confval:: tabindex
    :name: typo3-fluid-asset-css-tabindex
    :type: integer
    :required: false

    Specifies the tab order of this element

.. _typo3-fluid-asset-css-onclick_argument:

onclick
-------

..  confval:: onclick
    :name: typo3-fluid-asset-css-onclick
    :type: string
    :required: false

    JavaScript evaluated for the onclick event

.. _typo3-fluid-asset-css-as_argument:

as
--

..  confval:: as
    :name: typo3-fluid-asset-css-as
    :type: string
    :required: false

    Define the type of content being loaded (For rel="preload" or rel="prefetch" only).

.. _typo3-fluid-asset-css-crossorigin_argument:

crossorigin
-----------

..  confval:: crossorigin
    :name: typo3-fluid-asset-css-crossorigin
    :type: string
    :required: false

    Define how to handle crossorigin requests.

.. _typo3-fluid-asset-css-disabled_argument:

disabled
--------

..  confval:: disabled
    :name: typo3-fluid-asset-css-disabled
    :type: boolean
    :required: false

    Define whether or not the described stylesheet should be loaded and applied to the document.

.. _typo3-fluid-asset-css-href_argument:

href
----

..  confval:: href
    :name: typo3-fluid-asset-css-href
    :type: string
    :required: false

    Define the URL of the resource (absolute or relative).

.. _typo3-fluid-asset-css-hreflang_argument:

hreflang
--------

..  confval:: hreflang
    :name: typo3-fluid-asset-css-hreflang
    :type: string
    :required: false

    Define the language of the resource (Only to be used if 'href' is set).

.. _typo3-fluid-asset-css-importance_argument:

importance
----------

..  confval:: importance
    :name: typo3-fluid-asset-css-importance
    :type: string
    :required: false

    Define the relative fetch priority of the resource.

.. _typo3-fluid-asset-css-integrity_argument:

integrity
---------

..  confval:: integrity
    :name: typo3-fluid-asset-css-integrity
    :type: string
    :required: false

    Define base64-encoded cryptographic hash of the resource that allows browsers to verify what they fetch.

.. _typo3-fluid-asset-css-media_argument:

media
-----

..  confval:: media
    :name: typo3-fluid-asset-css-media
    :type: string
    :required: false

    Define which media type the resources applies to.

.. _typo3-fluid-asset-css-referrerpolicy_argument:

referrerpolicy
--------------

..  confval:: referrerpolicy
    :name: typo3-fluid-asset-css-referrerpolicy
    :type: string
    :required: false

    Define which referrer is sent when fetching the resource.

.. _typo3-fluid-asset-css-rel_argument:

rel
---

..  confval:: rel
    :name: typo3-fluid-asset-css-rel
    :type: string
    :required: false

    Define the relationship of the target object to the link object.

.. _typo3-fluid-asset-css-sizes_argument:

sizes
-----

..  confval:: sizes
    :name: typo3-fluid-asset-css-sizes
    :type: string
    :required: false

    Define the icon size of the resource.

.. _typo3-fluid-asset-css-type_argument:

type
----

..  confval:: type
    :name: typo3-fluid-asset-css-type
    :type: string
    :required: false

    Define the MIME type (usually 'text/css').

.. _typo3-fluid-asset-css-nonce_argument:

nonce
-----

..  confval:: nonce
    :name: typo3-fluid-asset-css-nonce
    :type: string
    :required: false

    Define a cryptographic nonce (number used once) used to whitelist inline styles in a style-src Content-Security-Policy.

.. _typo3-fluid-asset-css-usenonce_argument:

useNonce
--------

..  confval:: useNonce
    :name: typo3-fluid-asset-css-usenonce
    :type: boolean
    :required: false

    Whether to use the global nonce value

.. _typo3-fluid-asset-css-identifier_argument:

identifier
----------

..  confval:: identifier
    :name: typo3-fluid-asset-css-identifier
    :type: string
    :required: true

    Use this identifier within templates to only inject your CSS once, even though it is added multiple times.

.. _typo3-fluid-asset-css-priority_argument:

priority
--------

..  confval:: priority
    :name: typo3-fluid-asset-css-priority
    :type: boolean
    :required: false

    Define whether the CSS should be included before other CSS. CSS will always be output in the <head> tag.
