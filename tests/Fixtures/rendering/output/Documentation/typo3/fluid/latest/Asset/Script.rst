..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Asset/ScriptViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Asset/ScriptViewHelper.php
:navigation-title: asset.script

.. include:: /Includes.rst.txt

.. _typo3-fluid-asset-script:

==========================================
Asset.script ViewHelper `<f:asset.script>`
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

.. _typo3-fluid-asset-script_source:

Source code
===========

Go to the source code of this ViewHelper: `ScriptViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Asset/ScriptViewHelper.php>`__.

.. _typo3-fluid-asset-script_arguments:

Arguments
=========

The following arguments are available for `<f:asset.script>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3-fluid-asset-script-additionalattributes_argument:

..  confval:: additionalAttributes
    :name: typo3-fluid-asset-script-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-asset-script-data_argument:

..  confval:: data
    :name: typo3-fluid-asset-script-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-asset-script-aria_argument:

..  confval:: aria
    :name: typo3-fluid-asset-script-aria
    :type: mixed
    :required: false

    Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-asset-script-class_argument:

..  confval:: class
    :name: typo3-fluid-asset-script-class
    :type: string
    :required: false

    CSS class(es) for this element

.. _typo3-fluid-asset-script-dir_argument:

..  confval:: dir
    :name: typo3-fluid-asset-script-dir
    :type: string
    :required: false

    Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-asset-script-id_argument:

..  confval:: id
    :name: typo3-fluid-asset-script-id
    :type: string
    :required: false

    Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-asset-script-lang_argument:

..  confval:: lang
    :name: typo3-fluid-asset-script-lang
    :type: string
    :required: false

    Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-asset-script-style_argument:

..  confval:: style
    :name: typo3-fluid-asset-script-style
    :type: string
    :required: false

    Individual CSS styles for this element

.. _typo3-fluid-asset-script-title_argument:

..  confval:: title
    :name: typo3-fluid-asset-script-title
    :type: string
    :required: false

    Tooltip text of element

.. _typo3-fluid-asset-script-accesskey_argument:

..  confval:: accesskey
    :name: typo3-fluid-asset-script-accesskey
    :type: string
    :required: false

    Keyboard shortcut to access this element

.. _typo3-fluid-asset-script-tabindex_argument:

..  confval:: tabindex
    :name: typo3-fluid-asset-script-tabindex
    :type: integer
    :required: false

    Specifies the tab order of this element

.. _typo3-fluid-asset-script-onclick_argument:

..  confval:: onclick
    :name: typo3-fluid-asset-script-onclick
    :type: string
    :required: false

    JavaScript evaluated for the onclick event

.. _typo3-fluid-asset-script-async_argument:

..  confval:: async
    :name: typo3-fluid-asset-script-async
    :type: boolean
    :required: false

    Define that the script will be fetched in parallel to parsing and evaluation.

.. _typo3-fluid-asset-script-crossorigin_argument:

..  confval:: crossorigin
    :name: typo3-fluid-asset-script-crossorigin
    :type: string
    :required: false

    Define how to handle crossorigin requests.

.. _typo3-fluid-asset-script-defer_argument:

..  confval:: defer
    :name: typo3-fluid-asset-script-defer
    :type: boolean
    :required: false

    Define that the script is meant to be executed after the document has been parsed.

.. _typo3-fluid-asset-script-integrity_argument:

..  confval:: integrity
    :name: typo3-fluid-asset-script-integrity
    :type: string
    :required: false

    Define base64-encoded cryptographic hash of the resource that allows browsers to verify what they fetch.

.. _typo3-fluid-asset-script-nomodule_argument:

..  confval:: nomodule
    :name: typo3-fluid-asset-script-nomodule
    :type: boolean
    :required: false

    Define that the script should not be executed in browsers that support ES2015 modules.

.. _typo3-fluid-asset-script-nonce_argument:

..  confval:: nonce
    :name: typo3-fluid-asset-script-nonce
    :type: string
    :required: false

    Define a cryptographic nonce (number used once) used to whitelist inline styles in a style-src Content-Security-Policy.

.. _typo3-fluid-asset-script-referrerpolicy_argument:

..  confval:: referrerpolicy
    :name: typo3-fluid-asset-script-referrerpolicy
    :type: string
    :required: false

    Define which referrer is sent when fetching the resource.

.. _typo3-fluid-asset-script-src_argument:

..  confval:: src
    :name: typo3-fluid-asset-script-src
    :type: string
    :required: false

    Define the URI of the external resource.

.. _typo3-fluid-asset-script-type_argument:

..  confval:: type
    :name: typo3-fluid-asset-script-type
    :type: string
    :required: false

    Define the MIME type (usually 'text/javascript').

.. _typo3-fluid-asset-script-usenonce_argument:

..  confval:: useNonce
    :name: typo3-fluid-asset-script-usenonce
    :type: boolean
    :required: false

    Whether to use the global nonce value

.. _typo3-fluid-asset-script-identifier_argument:

..  confval:: identifier
    :name: typo3-fluid-asset-script-identifier
    :type: string
    :required: true

    Use this identifier within templates to only inject your JS once, even though it is added multiple times.

.. _typo3-fluid-asset-script-priority_argument:

..  confval:: priority
    :name: typo3-fluid-asset-script-priority
    :type: boolean
    :required: false

    Define whether the JavaScript should be put in the <head> tag above-the-fold or somewhere in the body part.
