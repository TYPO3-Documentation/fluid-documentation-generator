:navigation-title: image
.. include:: /Includes.rst.txt

.. _typo3-fluid-image:

============================
image ViewHelper `<f:image>`
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


.. _typo3-fluid-image_arguments:

Arguments
=========


.. _typo3-fluid-image-additionalattributes:

additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-image-data:

data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-image-aria:

aria
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-image-class:

class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   CSS class(es) for this element

.. _typo3-fluid-image-dir:

dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-image-id:

id
--

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-image-lang:

lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-image-style:

style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Individual CSS styles for this element

.. _typo3-fluid-image-title:

title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Tooltip text of element

.. _typo3-fluid-image-accesskey:

accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Keyboard shortcut to access this element

.. _typo3-fluid-image-tabindex:

tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the tab order of this element

.. _typo3-fluid-image-onclick:

onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   JavaScript evaluated for the onclick event

.. _typo3-fluid-image-alt:

alt
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies an alternate text for an image

.. _typo3-fluid-image-ismap:

ismap
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies an image as a server-side image-map. Rarely used. Look at usemap instead

.. _typo3-fluid-image-longdesc:

longdesc
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the URL to a document that contains a long description of an image

.. _typo3-fluid-image-usemap:

usemap
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies an image as a client-side image-map

.. _typo3-fluid-image-loading:

loading
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Native lazy-loading for images property. Can be "lazy", "eager" or "auto"

.. _typo3-fluid-image-decoding:

decoding
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Provides an image decoding hint to the browser. Can be "sync", "async" or "auto"

.. _typo3-fluid-image-src:

src
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   A path to a file, a combined FAL identifier or an uid (int). If $treatIdAsReference is set, the integer is considered the uid of the sys_file_reference record. If you already got a FAL object, consider using the $image parameter instead

.. _typo3-fluid-image-treatidasreference:

treatIdAsReference
------------------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   Given src argument is a sys_file_reference record

.. _typo3-fluid-image-image:

image
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   A FAL object (\TYPO3\CMS\Core\Resource\File or \TYPO3\CMS\Core\Resource\FileReference)

.. _typo3-fluid-image-crop:

crop
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Overrule cropping of image (setting to FALSE disables the cropping set in FileReference)

.. _typo3-fluid-image-cropvariant:

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

.. _typo3-fluid-image-fileextension:

fileExtension
-------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Custom file extension to use

.. _typo3-fluid-image-width:

width
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Width of the image. This can be a numeric value representing the fixed width of the image in pixels. But you can also perform simple calculations by adding "m" or "c" to the value. See imgResource.width for possible options.

.. _typo3-fluid-image-height:

height
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Height of the image. This can be a numeric value representing the fixed height of the image in pixels. But you can also perform simple calculations by adding "m" or "c" to the value. See imgResource.width for possible options.

.. _typo3-fluid-image-minwidth:

minWidth
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Minimum width of the image

.. _typo3-fluid-image-minheight:

minHeight
---------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Minimum height of the image

.. _typo3-fluid-image-maxwidth:

maxWidth
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Maximum width of the image

.. _typo3-fluid-image-maxheight:

maxHeight
---------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Maximum height of the image

.. _typo3-fluid-image-absolute:

absolute
--------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   Force absolute URL
