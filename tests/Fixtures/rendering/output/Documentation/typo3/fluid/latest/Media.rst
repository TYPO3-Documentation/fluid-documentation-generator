..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/MediaViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/MediaViewHelper.php
:navigation-title: media

.. include:: /Includes.rst.txt

.. _typo3-fluid-media:

============================
Media ViewHelper `<f:media>`
============================



Render a given media file with the correct html tag.

It asks the :php:`RendererRegistry` for the correct Renderer class and if not found it falls
back to the :php:`ImageViewHelper` as that is the "Renderer" class for images in Fluid context.

Examples
========

Image Object
------------

::

   <f:media file="{file}" width="400" height="375" />

Output::

   <img alt="alt set in image record" src="fileadmin/_processed_/323223424.png" width="396" height="375" />

MP4 Video Object
----------------

::

   <f:media file="{file}" width="400" height="375" />

Output::

   <video width="400" height="375" controls><source src="fileadmin/user_upload/my-video.mp4" type="video/mp4"></video>

MP4 Video Object with loop and autoplay option set
--------------------------------------------------

::

   <f:media file="{file}" width="400" height="375" additionalConfig="{loop: '1', autoplay: '1'}" />

Output::

   <video width="400" height="375" controls loop><source src="fileadmin/user_upload/my-video.mp4" type="video/mp4"></video>

.. _typo3-fluid-media_source:

Source code
===========

Go to the source code of this ViewHelper: `MediaViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/MediaViewHelper.php>`__.

.. _typo3-fluid-media_arguments:

Arguments
=========

The following arguments are available for `<f:media>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3-fluid-media-additionalattributes_argument:

..  confval:: additionalAttributes
    :name: typo3-fluid-media-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-media-data_argument:

..  confval:: data
    :name: typo3-fluid-media-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-media-aria_argument:

..  confval:: aria
    :name: typo3-fluid-media-aria
    :type: mixed
    :required: false

    Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-media-class_argument:

..  confval:: class
    :name: typo3-fluid-media-class
    :type: string
    :required: false

    CSS class(es) for this element

.. _typo3-fluid-media-dir_argument:

..  confval:: dir
    :name: typo3-fluid-media-dir
    :type: string
    :required: false

    Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-media-id_argument:

..  confval:: id
    :name: typo3-fluid-media-id
    :type: string
    :required: false

    Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-media-lang_argument:

..  confval:: lang
    :name: typo3-fluid-media-lang
    :type: string
    :required: false

    Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-media-style_argument:

..  confval:: style
    :name: typo3-fluid-media-style
    :type: string
    :required: false

    Individual CSS styles for this element

.. _typo3-fluid-media-title_argument:

..  confval:: title
    :name: typo3-fluid-media-title
    :type: string
    :required: false

    Tooltip text of element

.. _typo3-fluid-media-accesskey_argument:

..  confval:: accesskey
    :name: typo3-fluid-media-accesskey
    :type: string
    :required: false

    Keyboard shortcut to access this element

.. _typo3-fluid-media-tabindex_argument:

..  confval:: tabindex
    :name: typo3-fluid-media-tabindex
    :type: integer
    :required: false

    Specifies the tab order of this element

.. _typo3-fluid-media-onclick_argument:

..  confval:: onclick
    :name: typo3-fluid-media-onclick
    :type: string
    :required: false

    JavaScript evaluated for the onclick event

.. _typo3-fluid-media-alt_argument:

..  confval:: alt
    :name: typo3-fluid-media-alt
    :type: string
    :required: false

    Specifies an alternate text for an image

.. _typo3-fluid-media-file_argument:

..  confval:: file
    :name: typo3-fluid-media-file
    :type: mixed
    :required: true

    File

.. _typo3-fluid-media-additionalconfig_argument:

..  confval:: additionalConfig
    :name: typo3-fluid-media-additionalconfig
    :type: mixed
    :default: `array ()`
    :required: false

    This array can hold additional configuration that is passed though to the Renderer object

.. _typo3-fluid-media-width_argument:

..  confval:: width
    :name: typo3-fluid-media-width
    :type: string
    :required: false

    This can be a numeric value representing the fixed width of in pixels. But you can also perform simple calculations by adding "m" or "c" to the value. See imgResource.width for possible options.

.. _typo3-fluid-media-height_argument:

..  confval:: height
    :name: typo3-fluid-media-height
    :type: string
    :required: false

    This can be a numeric value representing the fixed height in pixels. But you can also perform simple calculations by adding "m" or "c" to the value. See imgResource.width for possible options.

.. _typo3-fluid-media-cropvariant_argument:

..  confval:: cropVariant
    :name: typo3-fluid-media-cropvariant
    :type: string
    :default: `'default'`
    :required: false

    Select a cropping variant, in case multiple croppings have been specified or stored in FileReference

.. _typo3-fluid-media-fileextension_argument:

..  confval:: fileExtension
    :name: typo3-fluid-media-fileextension
    :type: string
    :required: false

    Custom file extension to use for images

.. _typo3-fluid-media-loading_argument:

..  confval:: loading
    :name: typo3-fluid-media-loading
    :type: string
    :required: false

    Native lazy-loading for images property. Can be "lazy", "eager" or "auto". Used on image files only.

.. _typo3-fluid-media-decoding_argument:

..  confval:: decoding
    :name: typo3-fluid-media-decoding
    :type: string
    :required: false

    Provides an image decoding hint to the browser. Can be "sync", "async" or "auto"
