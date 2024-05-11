..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/ImageViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/ImageViewHelper.php
:navigation-title: image
.. include:: /Includes.rst.txt

.. _typo3-fluid-image:

============================
Image ViewHelper `<f:image>`
============================



Resizes a given image (if required) and renders the respective img tag.

Note that image operations (cropping, scaling, converting) on
non-FAL files (i.e. extension resources) may be changed in future TYPO3
versions, since those operations are coupled with FAL metadata. Each
non-FAL image operation creates a "fake" FAL record, which may lead to problems.

External URLs are not processed. Only a given width and height will be set on the tag.

Examples
========

Default
-------

::

   <f:image src="EXT:myext/Resources/Public/typo3_logo.png" alt="alt text" />

Output in frontend::

   <img alt="alt text" src="typo3conf/ext/myext/Resources/Public/typo3_logo.png" width="396" height="375" />

or in backend::

   <img alt="alt text" src="../typo3conf/ext/viewhelpertest/Resources/Public/typo3_logo.png" width="396" height="375" />

Image Object
------------

::

   <f:image image="{imageObject}" />

Output::

   <img alt="alt set in image record" src="fileadmin/_processed_/323223424.png" width="396" height="375" />

Inline notation
---------------

::

   {f:image(src: 'EXT:viewhelpertest/Resources/Public/typo3_logo.png', alt: 'alt text', minWidth: 30, maxWidth: 40)}

Output::

   <img alt="alt text" src="../typo3temp/assets/images/f13d79a526.png" width="40" height="38" />

Depending on your TYPO3s encryption key.

Other resource type (e.g. PDF)
------------------------------

::

   <f:image src="fileadmin/user_upload/example.pdf" alt="foo" />

If your graphics processing library is set up correctly then it will output a thumbnail of the first page of your PDF document:
``<img src="fileadmin/_processed_/1/2/csm_example_aabbcc112233.gif" width="200" height="284" alt="foo">``

Non-existent image
------------------

::

   <f:image src="NonExistingImage.png" alt="foo" />

``Could not get image resource for "NonExistingImage.png".``

.. _typo3-fluid-image_source:

Source code
===========

Go to the source code of this ViewHelper: `ImageViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/ImageViewHelper.php>`__.

.. _typo3-fluid-image_arguments:

Arguments
=========

The following arguments are available for `<f:image>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3-fluid-image-additionalattributes_argument:

..  confval:: additionalAttributes
    :name: typo3-fluid-image-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-image-data_argument:

..  confval:: data
    :name: typo3-fluid-image-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-image-aria_argument:

..  confval:: aria
    :name: typo3-fluid-image-aria
    :type: mixed
    :required: false

    Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-image-class_argument:

..  confval:: class
    :name: typo3-fluid-image-class
    :type: string
    :required: false

    CSS class(es) for this element

.. _typo3-fluid-image-dir_argument:

..  confval:: dir
    :name: typo3-fluid-image-dir
    :type: string
    :required: false

    Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-image-id_argument:

..  confval:: id
    :name: typo3-fluid-image-id
    :type: string
    :required: false

    Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-image-lang_argument:

..  confval:: lang
    :name: typo3-fluid-image-lang
    :type: string
    :required: false

    Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-image-style_argument:

..  confval:: style
    :name: typo3-fluid-image-style
    :type: string
    :required: false

    Individual CSS styles for this element

.. _typo3-fluid-image-title_argument:

..  confval:: title
    :name: typo3-fluid-image-title
    :type: string
    :required: false

    Tooltip text of element

.. _typo3-fluid-image-accesskey_argument:

..  confval:: accesskey
    :name: typo3-fluid-image-accesskey
    :type: string
    :required: false

    Keyboard shortcut to access this element

.. _typo3-fluid-image-tabindex_argument:

..  confval:: tabindex
    :name: typo3-fluid-image-tabindex
    :type: integer
    :required: false

    Specifies the tab order of this element

.. _typo3-fluid-image-onclick_argument:

..  confval:: onclick
    :name: typo3-fluid-image-onclick
    :type: string
    :required: false

    JavaScript evaluated for the onclick event

.. _typo3-fluid-image-alt_argument:

..  confval:: alt
    :name: typo3-fluid-image-alt
    :type: string
    :required: false

    Specifies an alternate text for an image

.. _typo3-fluid-image-ismap_argument:

..  confval:: ismap
    :name: typo3-fluid-image-ismap
    :type: string
    :required: false

    Specifies an image as a server-side image-map. Rarely used. Look at usemap instead

.. _typo3-fluid-image-longdesc_argument:

..  confval:: longdesc
    :name: typo3-fluid-image-longdesc
    :type: string
    :required: false

    Specifies the URL to a document that contains a long description of an image

.. _typo3-fluid-image-usemap_argument:

..  confval:: usemap
    :name: typo3-fluid-image-usemap
    :type: string
    :required: false

    Specifies an image as a client-side image-map

.. _typo3-fluid-image-loading_argument:

..  confval:: loading
    :name: typo3-fluid-image-loading
    :type: string
    :required: false

    Native lazy-loading for images property. Can be "lazy", "eager" or "auto"

.. _typo3-fluid-image-decoding_argument:

..  confval:: decoding
    :name: typo3-fluid-image-decoding
    :type: string
    :required: false

    Provides an image decoding hint to the browser. Can be "sync", "async" or "auto"

.. _typo3-fluid-image-src_argument:

..  confval:: src
    :name: typo3-fluid-image-src
    :type: string
    :required: false

    A path to a file, a combined FAL identifier or an uid (int). If $treatIdAsReference is set, the integer is considered the uid of the sys_file_reference record. If you already got a FAL object, consider using the $image parameter instead

.. _typo3-fluid-image-treatidasreference_argument:

..  confval:: treatIdAsReference
    :name: typo3-fluid-image-treatidasreference
    :type: boolean
    :required: false

    Given src argument is a sys_file_reference record

.. _typo3-fluid-image-image_argument:

..  confval:: image
    :name: typo3-fluid-image-image
    :type: mixed
    :required: false

    A FAL object (\TYPO3\CMS\Core\Resource\File or \TYPO3\CMS\Core\Resource\FileReference)

.. _typo3-fluid-image-crop_argument:

..  confval:: crop
    :name: typo3-fluid-image-crop
    :type: mixed
    :required: false

    Overrule cropping of image (setting to FALSE disables the cropping set in FileReference)

.. _typo3-fluid-image-cropvariant_argument:

..  confval:: cropVariant
    :name: typo3-fluid-image-cropvariant
    :type: string
    :Default: 'default'
    :required: false

    Select a cropping variant, in case multiple croppings have been specified or stored in FileReference

.. _typo3-fluid-image-fileextension_argument:

..  confval:: fileExtension
    :name: typo3-fluid-image-fileextension
    :type: string
    :required: false

    Custom file extension to use

.. _typo3-fluid-image-width_argument:

..  confval:: width
    :name: typo3-fluid-image-width
    :type: string
    :required: false

    Width of the image. This can be a numeric value representing the fixed width of the image in pixels. But you can also perform simple calculations by adding "m" or "c" to the value. See imgResource.width for possible options.

.. _typo3-fluid-image-height_argument:

..  confval:: height
    :name: typo3-fluid-image-height
    :type: string
    :required: false

    Height of the image. This can be a numeric value representing the fixed height of the image in pixels. But you can also perform simple calculations by adding "m" or "c" to the value. See imgResource.width for possible options.

.. _typo3-fluid-image-minwidth_argument:

..  confval:: minWidth
    :name: typo3-fluid-image-minwidth
    :type: mixed
    :required: false

    Minimum width of the image

.. _typo3-fluid-image-minheight_argument:

..  confval:: minHeight
    :name: typo3-fluid-image-minheight
    :type: mixed
    :required: false

    Minimum height of the image

.. _typo3-fluid-image-maxwidth_argument:

..  confval:: maxWidth
    :name: typo3-fluid-image-maxwidth
    :type: mixed
    :required: false

    Maximum width of the image

.. _typo3-fluid-image-maxheight_argument:

..  confval:: maxHeight
    :name: typo3-fluid-image-maxheight
    :type: mixed
    :required: false

    Maximum height of the image

.. _typo3-fluid-image-absolute_argument:

..  confval:: absolute
    :name: typo3-fluid-image-absolute
    :type: boolean
    :required: false

    Force absolute URL
