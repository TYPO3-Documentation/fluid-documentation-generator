..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/ThumbnailViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/backend/Classes/ViewHelpers/ThumbnailViewHelper.php
:navigation-title: thumbnail
.. include:: /Includes.rst.txt

.. _typo3-backend-thumbnail:

=====================================
Thumbnail ViewHelper `<be:thumbnail>`
=====================================

..  note::
    This ViewHelper is not available by default.

    :ref:`Import its namespace <t3coreapi:fluid-syntax-viewhelpers-import-namespaces>`
    :fluid:`{namespace be=TYPO3\CMS\Backend\ViewHelpers\}` in the Fluid file or
    :fluid:`xmlns:be="http://typo3.org/ns/TYPO3/CMS/Backend/ViewHelpers/"` in the opening HTML tag.


ViewHelper for the backend which generates an :html:`<img>` tag with the special URI to render thumbnails deferred.

Examples
========

Default
-------

::

   <be:thumbnail image="{file.resource}" width="{thumbnail.width}" height="{thumbnail.height}" />

Output::

   <img src="https://www.example.com/typo3/image/process?token=XYZ&id=1160"
        width="64"
        height="64"
        alt="alt set in image record"
        title="title set in image record"/>

Inline notation
---------------

::

   {be:thumbnail(image: file.resource, maxWidth: thumbnail.width, maxHeight: thumbnail.height)}

Output::

   <img src="https://www.example.com/typo3/image/process?token=XYZ&id=1160"
        width="64"
        height="64"
        alt="alt set in image record"
        title="title set in image record"/>

.. _typo3-backend-thumbnail_source:

Source code
===========

Go to the source code of this ViewHelper: `ThumbnailViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/ThumbnailViewHelper.php>`__.

.. _typo3-backend-thumbnail_arguments:

Arguments
=========

The following arguments are available for `<be:thumbnail>`:

..  contents::
    :local:


.. _typo3-backend-thumbnail-additionalattributes_argument:

additionalAttributes
--------------------

..  confval:: additionalAttributes
    :name: typo3-backend-thumbnail-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-backend-thumbnail-data_argument:

data
----

..  confval:: data
    :name: typo3-backend-thumbnail-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-backend-thumbnail-aria_argument:

aria
----

..  confval:: aria
    :name: typo3-backend-thumbnail-aria
    :type: mixed
    :required: false

    Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-backend-thumbnail-class_argument:

class
-----

..  confval:: class
    :name: typo3-backend-thumbnail-class
    :type: string
    :required: false

    CSS class(es) for this element

.. _typo3-backend-thumbnail-dir_argument:

dir
---

..  confval:: dir
    :name: typo3-backend-thumbnail-dir
    :type: string
    :required: false

    Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-backend-thumbnail-id_argument:

id
--

..  confval:: id
    :name: typo3-backend-thumbnail-id
    :type: string
    :required: false

    Unique (in this file) identifier for this HTML element.

.. _typo3-backend-thumbnail-lang_argument:

lang
----

..  confval:: lang
    :name: typo3-backend-thumbnail-lang
    :type: string
    :required: false

    Language for this element. Use short names specified in RFC 1766

.. _typo3-backend-thumbnail-style_argument:

style
-----

..  confval:: style
    :name: typo3-backend-thumbnail-style
    :type: string
    :required: false

    Individual CSS styles for this element

.. _typo3-backend-thumbnail-title_argument:

title
-----

..  confval:: title
    :name: typo3-backend-thumbnail-title
    :type: string
    :required: false

    Tooltip text of element

.. _typo3-backend-thumbnail-accesskey_argument:

accesskey
---------

..  confval:: accesskey
    :name: typo3-backend-thumbnail-accesskey
    :type: string
    :required: false

    Keyboard shortcut to access this element

.. _typo3-backend-thumbnail-tabindex_argument:

tabindex
--------

..  confval:: tabindex
    :name: typo3-backend-thumbnail-tabindex
    :type: integer
    :required: false

    Specifies the tab order of this element

.. _typo3-backend-thumbnail-onclick_argument:

onclick
-------

..  confval:: onclick
    :name: typo3-backend-thumbnail-onclick
    :type: string
    :required: false

    JavaScript evaluated for the onclick event

.. _typo3-backend-thumbnail-alt_argument:

alt
---

..  confval:: alt
    :name: typo3-backend-thumbnail-alt
    :type: string
    :required: false

    Specifies an alternate text for an image

.. _typo3-backend-thumbnail-src_argument:

src
---

..  confval:: src
    :name: typo3-backend-thumbnail-src
    :type: string
    :required: false

    A path to a file, a combined FAL identifier or an uid (int). If $treatIdAsReference is set, the integer is considered the uid of the sys_file_reference record. If you already got a FAL object, consider using the $image parameter instead

.. _typo3-backend-thumbnail-treatidasreference_argument:

treatIdAsReference
------------------

..  confval:: treatIdAsReference
    :name: typo3-backend-thumbnail-treatidasreference
    :type: boolean
    :required: false

    Given src argument is a sys_file_reference record

.. _typo3-backend-thumbnail-image_argument:

image
-----

..  confval:: image
    :name: typo3-backend-thumbnail-image
    :type: mixed
    :required: false

    A FAL object (\TYPO3\CMS\Core\Resource\File or \TYPO3\CMS\Core\Resource\FileReference)

.. _typo3-backend-thumbnail-crop_argument:

crop
----

..  confval:: crop
    :name: typo3-backend-thumbnail-crop
    :type: mixed
    :required: false

    Overrule cropping of image (setting to FALSE disables the cropping set in FileReference)

.. _typo3-backend-thumbnail-cropvariant_argument:

cropVariant
-----------

..  confval:: cropVariant
    :name: typo3-backend-thumbnail-cropvariant
    :type: string
    :Default: 'default'
    :required: false

    Select a cropping variant, in case multiple croppings have been specified or stored in FileReference

.. _typo3-backend-thumbnail-width_argument:

width
-----

..  confval:: width
    :name: typo3-backend-thumbnail-width
    :type: string
    :required: false

    Width of the image. This can be a numeric value representing the fixed width of the image in pixels. But you can also perform simple calculations by adding "m" or "c" to the value. See imgResource.width for possible options.

.. _typo3-backend-thumbnail-height_argument:

height
------

..  confval:: height
    :name: typo3-backend-thumbnail-height
    :type: string
    :required: false

    Height of the image. This can be a numeric value representing the fixed height of the image in pixels. But you can also perform simple calculations by adding "m" or "c" to the value. See imgResource.width for possible options.

.. _typo3-backend-thumbnail-minwidth_argument:

minWidth
--------

..  confval:: minWidth
    :name: typo3-backend-thumbnail-minwidth
    :type: mixed
    :required: false

    Minimum width of the image

.. _typo3-backend-thumbnail-minheight_argument:

minHeight
---------

..  confval:: minHeight
    :name: typo3-backend-thumbnail-minheight
    :type: mixed
    :required: false

    Minimum height of the image

.. _typo3-backend-thumbnail-maxwidth_argument:

maxWidth
--------

..  confval:: maxWidth
    :name: typo3-backend-thumbnail-maxwidth
    :type: mixed
    :required: false

    Maximum width of the image

.. _typo3-backend-thumbnail-maxheight_argument:

maxHeight
---------

..  confval:: maxHeight
    :name: typo3-backend-thumbnail-maxheight
    :type: mixed
    :required: false

    Maximum height of the image

.. _typo3-backend-thumbnail-context_argument:

context
-------

..  confval:: context
    :name: typo3-backend-thumbnail-context
    :type: string
    :Default: 'Image.Preview'
    :required: false

    Context for image rendering
