:navigation-title: asset.script
.. include:: /Includes.rst.txt

.. _typo3-fluid-asset-script:

==========================================
asset.script ViewHelper `<f:asset.script>`
==========================================


ViewHelper to add JavaScript to the TYPO3 AssetCollector. Either a file or inline JavaScript can be added.

Examples
========

::

   <f:asset.script identifier="identifier123" src="EXT:my_ext/Resources/Public/JavaScript/foo.js" />
   <f:asset.script identifier="identifier123">
      alert('hello world');
   </f:asset.script>

Details
=======

In the AssetCollector, the "identifier" attribute is used as a unique identifier. Thus, if assets are added multiple
times using the same identifier, the asset will only be served once (the last added overrides previous assets).

Some available attributes are defaults but do not make sense for this ViewHelper. Relevant attributes specific
for this ViewHelper are: async, crossorigin, defer, integrity, nomodule, nonce, referrerpolicy, src, type.


.. _typo3-fluid-asset-script_arguments:

Arguments
=========


.. _typo3-fluid-asset-script-additionalattributes:

additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-asset-script-data:

data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-asset-script-aria:

aria
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-asset-script-class:

class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   CSS class(es) for this element

.. _typo3-fluid-asset-script-dir:

dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-asset-script-id:

id
--

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-asset-script-lang:

lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-asset-script-style:

style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Individual CSS styles for this element

.. _typo3-fluid-asset-script-title:

title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Tooltip text of element

.. _typo3-fluid-asset-script-accesskey:

accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Keyboard shortcut to access this element

.. _typo3-fluid-asset-script-tabindex:

tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the tab order of this element

.. _typo3-fluid-asset-script-onclick:

onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   JavaScript evaluated for the onclick event

.. _typo3-fluid-asset-script-async:

async
-----

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   Define that the script will be fetched in parallel to parsing and evaluation.

.. _typo3-fluid-asset-script-crossorigin:

crossorigin
-----------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define how to handle crossorigin requests.

.. _typo3-fluid-asset-script-defer:

defer
-----

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   Define that the script is meant to be executed after the document has been parsed.

.. _typo3-fluid-asset-script-integrity:

integrity
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define base64-encoded cryptographic hash of the resource that allows browsers to verify what they fetch.

.. _typo3-fluid-asset-script-nomodule:

nomodule
--------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   Define that the script should not be executed in browsers that support ES2015 modules.

.. _typo3-fluid-asset-script-nonce:

nonce
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define a cryptographic nonce (number used once) used to whitelist inline styles in a style-src Content-Security-Policy.

.. _typo3-fluid-asset-script-referrerpolicy:

referrerpolicy
--------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define which referrer is sent when fetching the resource.

.. _typo3-fluid-asset-script-src:

src
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define the URI of the external resource.

.. _typo3-fluid-asset-script-type:

type
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define the MIME type (usually 'text/javascript').

.. _typo3-fluid-asset-script-usenonce:

useNonce
--------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   Whether to use the global nonce value

.. _typo3-fluid-asset-script-identifier:

identifier
----------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   Use this identifier within templates to only inject your JS once, even though it is added multiple times.

.. _typo3-fluid-asset-script-priority:

priority
--------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   Define whether the JavaScript should be put in the <head> tag above-the-fold or somewhere in the body part.
