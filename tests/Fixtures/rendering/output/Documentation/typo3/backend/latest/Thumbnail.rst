:navigation-title: thumbnail
.. include:: /Includes.rst.txt

.. _typo3-backend-thumbnail:

==========================================
thumbnail ViewHelper `<backend:thumbnail>`
==========================================


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


.. _typo3-backend-thumbnail_arguments:

Arguments
=========


.. _typo3-backend-thumbnail-additionalattributes:

additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-backend-thumbnail-data:

data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-backend-thumbnail-aria:

aria
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-backend-thumbnail-class:

class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   CSS class(es) for this element

.. _typo3-backend-thumbnail-dir:

dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-backend-thumbnail-id:

id
--

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _typo3-backend-thumbnail-lang:

lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _typo3-backend-thumbnail-style:

style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Individual CSS styles for this element

.. _typo3-backend-thumbnail-title:

title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Tooltip text of element

.. _typo3-backend-thumbnail-accesskey:

accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Keyboard shortcut to access this element

.. _typo3-backend-thumbnail-tabindex:

tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the tab order of this element

.. _typo3-backend-thumbnail-onclick:

onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   JavaScript evaluated for the onclick event

.. _typo3-backend-thumbnail-alt:

alt
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies an alternate text for an image

.. _typo3-backend-thumbnail-src:

src
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   A path to a file, a combined FAL identifier or an uid (int). If $treatIdAsReference is set, the integer is considered the uid of the sys_file_reference record. If you already got a FAL object, consider using the $image parameter instead

.. _typo3-backend-thumbnail-treatidasreference:

treatIdAsReference
------------------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   Given src argument is a sys_file_reference record

.. _typo3-backend-thumbnail-image:

image
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   A FAL object (\TYPO3\CMS\Core\Resource\File or \TYPO3\CMS\Core\Resource\FileReference)

.. _typo3-backend-thumbnail-crop:

crop
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Overrule cropping of image (setting to FALSE disables the cropping set in FileReference)

.. _typo3-backend-thumbnail-cropvariant:

cropVariant
-----------

:aspect:`DataType`
   string

:aspect:`Default`
   'default'

:aspect:`Required`
   false
:aspect:`Description`
   Select a cropping variant, in case multiple croppings have been specified or stored in FileReference

.. _typo3-backend-thumbnail-width:

width
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Width of the image. This can be a numeric value representing the fixed width of the image in pixels. But you can also perform simple calculations by adding "m" or "c" to the value. See imgResource.width for possible options.

.. _typo3-backend-thumbnail-height:

height
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Height of the image. This can be a numeric value representing the fixed height of the image in pixels. But you can also perform simple calculations by adding "m" or "c" to the value. See imgResource.width for possible options.

.. _typo3-backend-thumbnail-minwidth:

minWidth
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Minimum width of the image

.. _typo3-backend-thumbnail-minheight:

minHeight
---------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Minimum height of the image

.. _typo3-backend-thumbnail-maxwidth:

maxWidth
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Maximum width of the image

.. _typo3-backend-thumbnail-maxheight:

maxHeight
---------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Maximum height of the image

.. _typo3-backend-thumbnail-context:

context
-------

:aspect:`DataType`
   string

:aspect:`Default`
   'Image.Preview'

:aspect:`Required`
   false
:aspect:`Description`
   Context for image rendering
