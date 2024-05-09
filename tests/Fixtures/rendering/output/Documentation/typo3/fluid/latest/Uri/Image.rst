..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Uri/ImageViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Uri/ImageViewHelper.php
:navigation-title: uri.image
.. include:: /Includes.rst.txt

.. _typo3-fluid-uri-image:

====================================
Uri.image ViewHelper `<f:uri.image>`
====================================

Resizes a given image (if required) and returns its relative path.

This ViewHelper should only be used for images within FAL storages,
or where graphical operations shall be performed.

Note that when the contents of a non-FAL image are changed,
an image may not show updated processed contents unless either the
FAL record is updated/removed, or the temporary processed images are
cleared.

Also note that image operations (cropping, scaling, converting) on
non-FAL files may be changed in future TYPO3 versions, since those operations
are coupled with FAL metadata. Each non-FAL image operation creates a
"fake" FAL record, which may lead to problems.

For extension resource files, use :ref:`<f:uri.resource> <typo3-fluid-uri-resource>`
instead.

External URLs are not processed and just returned as is.

Examples
========

Default
-------

::

   <f:uri.image src="EXT:myext/Resources/Public/typo3_logo.png" />

Results in the following output within TYPO3 frontend:

``typo3conf/ext/myext/Resources/Public/typo3_logo.png``

and the following output inside TYPO3 backend:

``../typo3conf/ext/myext/Resources/Public/typo3_logo.png``

Image Object
------------

::

   <f:uri.image image="{imageObject}" />

Results in the following output within TYPO3 frontend:

``fileadmin/images/image.png``

and the following output inside TYPO3 backend:

``fileadmin/images/image.png``

Inline notation
---------------

::

   {f:uri.image(src: 'EXT:myext/Resources/Public/typo3_logo.png', minWidth: 30, maxWidth: 40)}

``typo3temp/assets/images/[b4c0e7ed5c].png``

Depending on your TYPO3s encryption key.

Non existing image
------------------

::

   <f:uri.image src="NonExistingImage.png" />

``Could not get image resource for "NonExistingImage.png".``

.. _typo3-fluid-uri-image_source:

Source code
===========

Go to the source code of this ViewHelper: `ImageViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Uri/ImageViewHelper.php>`__.

.. _typo3-fluid-uri-image_arguments:

Arguments
=========

The following arguments are available for `<f:uri.image>`:

..  contents::
    :local:


.. _typo3-fluid-uri-image-src_argument:

src
---

..  confval:: src
    :name: typo3-fluid-uri-image-src
    :type: string
    :required: false

    Src

.. _typo3-fluid-uri-image-treatidasreference_argument:

treatIdAsReference
------------------

..  confval:: treatIdAsReference
    :name: typo3-fluid-uri-image-treatidasreference
    :type: boolean
    :required: false

    Given src argument is a sys_file_reference record

.. _typo3-fluid-uri-image-image_argument:

image
-----

..  confval:: image
    :name: typo3-fluid-uri-image-image
    :type: mixed
    :required: false

    Image

.. _typo3-fluid-uri-image-crop_argument:

crop
----

..  confval:: crop
    :name: typo3-fluid-uri-image-crop
    :type: mixed
    :required: false

    Overrule cropping of image (setting to FALSE disables the cropping set in FileReference)

.. _typo3-fluid-uri-image-cropvariant_argument:

cropVariant
-----------

..  confval:: cropVariant
    :name: typo3-fluid-uri-image-cropvariant
    :type: string
    :Default: 'default'
    :required: false

    Select a cropping variant, in case multiple croppings have been specified or stored in FileReference

.. _typo3-fluid-uri-image-fileextension_argument:

fileExtension
-------------

..  confval:: fileExtension
    :name: typo3-fluid-uri-image-fileextension
    :type: string
    :required: false

    Custom file extension to use

.. _typo3-fluid-uri-image-width_argument:

width
-----

..  confval:: width
    :name: typo3-fluid-uri-image-width
    :type: string
    :required: false

    Width of the image. This can be a numeric value representing the fixed width of the image in pixels. But you can also perform simple calculations by adding "m" or "c" to the value. See imgResource.width for possible options.

.. _typo3-fluid-uri-image-height_argument:

height
------

..  confval:: height
    :name: typo3-fluid-uri-image-height
    :type: string
    :required: false

    Height of the image. This can be a numeric value representing the fixed height of the image in pixels. But you can also perform simple calculations by adding "m" or "c" to the value. See imgResource.width for possible options.

.. _typo3-fluid-uri-image-minwidth_argument:

minWidth
--------

..  confval:: minWidth
    :name: typo3-fluid-uri-image-minwidth
    :type: mixed
    :required: false

    Minimum width of the image

.. _typo3-fluid-uri-image-minheight_argument:

minHeight
---------

..  confval:: minHeight
    :name: typo3-fluid-uri-image-minheight
    :type: mixed
    :required: false

    Minimum height of the image

.. _typo3-fluid-uri-image-maxwidth_argument:

maxWidth
--------

..  confval:: maxWidth
    :name: typo3-fluid-uri-image-maxwidth
    :type: mixed
    :required: false

    Maximum width of the image

.. _typo3-fluid-uri-image-maxheight_argument:

maxHeight
---------

..  confval:: maxHeight
    :name: typo3-fluid-uri-image-maxheight
    :type: mixed
    :required: false

    Maximum height of the image

.. _typo3-fluid-uri-image-absolute_argument:

absolute
--------

..  confval:: absolute
    :name: typo3-fluid-uri-image-absolute
    :type: boolean
    :required: false

    Force absolute URL
