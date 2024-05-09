:navigation-title: asset.css
.. include:: /Includes.rst.txt

.. _typo3-fluid-asset-css:

====================================
asset.css ViewHelper `<f:asset.css>`
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


.. _typo3-fluid-asset-css_arguments:

Arguments
=========


.. _typo3-fluid-asset-css-additionalattributes:

additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-asset-css-data:

data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-asset-css-aria:

aria
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-asset-css-class:

class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   CSS class(es) for this element

.. _typo3-fluid-asset-css-dir:

dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-asset-css-id:

id
--

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-asset-css-lang:

lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-asset-css-style:

style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Individual CSS styles for this element

.. _typo3-fluid-asset-css-title:

title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Tooltip text of element

.. _typo3-fluid-asset-css-accesskey:

accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Keyboard shortcut to access this element

.. _typo3-fluid-asset-css-tabindex:

tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the tab order of this element

.. _typo3-fluid-asset-css-onclick:

onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   JavaScript evaluated for the onclick event

.. _typo3-fluid-asset-css-as:

as
--

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define the type of content being loaded (For rel="preload" or rel="prefetch" only).

.. _typo3-fluid-asset-css-crossorigin:

crossorigin
-----------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define how to handle crossorigin requests.

.. _typo3-fluid-asset-css-disabled:

disabled
--------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   Define whether or not the described stylesheet should be loaded and applied to the document.

.. _typo3-fluid-asset-css-href:

href
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define the URL of the resource (absolute or relative).

.. _typo3-fluid-asset-css-hreflang:

hreflang
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define the language of the resource (Only to be used if 'href' is set).

.. _typo3-fluid-asset-css-importance:

importance
----------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define the relative fetch priority of the resource.

.. _typo3-fluid-asset-css-integrity:

integrity
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define base64-encoded cryptographic hash of the resource that allows browsers to verify what they fetch.

.. _typo3-fluid-asset-css-media:

media
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define which media type the resources applies to.

.. _typo3-fluid-asset-css-referrerpolicy:

referrerpolicy
--------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define which referrer is sent when fetching the resource.

.. _typo3-fluid-asset-css-rel:

rel
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define the relationship of the target object to the link object.

.. _typo3-fluid-asset-css-sizes:

sizes
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define the icon size of the resource.

.. _typo3-fluid-asset-css-type:

type
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define the MIME type (usually 'text/css').

.. _typo3-fluid-asset-css-nonce:

nonce
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define a cryptographic nonce (number used once) used to whitelist inline styles in a style-src Content-Security-Policy.

.. _typo3-fluid-asset-css-usenonce:

useNonce
--------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   Whether to use the global nonce value

.. _typo3-fluid-asset-css-identifier:

identifier
----------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Use this identifier within templates to only inject your CSS once, even though it is added multiple times.

.. _typo3-fluid-asset-css-priority:

priority
--------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   Define whether the CSS should be included before other CSS. CSS will always be output in the <head> tag.
