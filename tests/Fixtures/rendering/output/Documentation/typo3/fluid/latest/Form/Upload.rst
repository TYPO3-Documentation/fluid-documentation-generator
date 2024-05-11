..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/UploadViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/UploadViewHelper.php
:navigation-title: form.upload
.. include:: /Includes.rst.txt

.. _typo3-fluid-form-upload:

========================================
Form.upload ViewHelper `<f:form.upload>`
========================================



A ViewHelper which generates an :html:`<input type="file">` HTML element.
Make sure to set ``enctype="multipart/form-data"`` on the form!

Examples
========

Example::

   <f:form.upload name="file" />

Output::

   <input type="file" name="file" />

.. _typo3-fluid-form-upload_source:

Source code
===========

Go to the source code of this ViewHelper: `UploadViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/UploadViewHelper.php>`__.

.. _typo3-fluid-form-upload_arguments:

Arguments
=========

The following arguments are available for `<f:form.upload>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3-fluid-form-upload-additionalattributes_argument:

..  confval:: additionalAttributes
    :name: typo3-fluid-form-upload-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-form-upload-data_argument:

..  confval:: data
    :name: typo3-fluid-form-upload-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-form-upload-aria_argument:

..  confval:: aria
    :name: typo3-fluid-form-upload-aria
    :type: mixed
    :required: false

    Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-form-upload-name_argument:

..  confval:: name
    :name: typo3-fluid-form-upload-name
    :type: string
    :required: false

    Name of input tag

.. _typo3-fluid-form-upload-value_argument:

..  confval:: value
    :name: typo3-fluid-form-upload-value
    :type: mixed
    :required: false

    Value of input tag

.. _typo3-fluid-form-upload-property_argument:

..  confval:: property
    :name: typo3-fluid-form-upload-property
    :type: string
    :required: false

    Name of Object Property. If used in conjunction with <f:form object="...">, the "name" property will be ignored, while "value" can be used to specify a default field value instead of the object property value.

.. _typo3-fluid-form-upload-disabled_argument:

..  confval:: disabled
    :name: typo3-fluid-form-upload-disabled
    :type: string
    :required: false

    Specifies that the input element should be disabled when the page loads

.. _typo3-fluid-form-upload-multiple_argument:

..  confval:: multiple
    :name: typo3-fluid-form-upload-multiple
    :type: string
    :required: false

    Specifies that the file input element should allow multiple selection of files

.. _typo3-fluid-form-upload-accept_argument:

..  confval:: accept
    :name: typo3-fluid-form-upload-accept
    :type: string
    :required: false

    Specifies the allowed file extensions to upload via comma-separated list, example ".png,.gif"

.. _typo3-fluid-form-upload-errorclass_argument:

..  confval:: errorClass
    :name: typo3-fluid-form-upload-errorclass
    :type: string
    :Default: 'f3-form-error'
    :required: false

    CSS class to set if there are errors for this ViewHelper

.. _typo3-fluid-form-upload-class_argument:

..  confval:: class
    :name: typo3-fluid-form-upload-class
    :type: string
    :required: false

    CSS class(es) for this element

.. _typo3-fluid-form-upload-dir_argument:

..  confval:: dir
    :name: typo3-fluid-form-upload-dir
    :type: string
    :required: false

    Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-form-upload-id_argument:

..  confval:: id
    :name: typo3-fluid-form-upload-id
    :type: string
    :required: false

    Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-form-upload-lang_argument:

..  confval:: lang
    :name: typo3-fluid-form-upload-lang
    :type: string
    :required: false

    Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-form-upload-style_argument:

..  confval:: style
    :name: typo3-fluid-form-upload-style
    :type: string
    :required: false

    Individual CSS styles for this element

.. _typo3-fluid-form-upload-title_argument:

..  confval:: title
    :name: typo3-fluid-form-upload-title
    :type: string
    :required: false

    Tooltip text of element

.. _typo3-fluid-form-upload-accesskey_argument:

..  confval:: accesskey
    :name: typo3-fluid-form-upload-accesskey
    :type: string
    :required: false

    Keyboard shortcut to access this element

.. _typo3-fluid-form-upload-tabindex_argument:

..  confval:: tabindex
    :name: typo3-fluid-form-upload-tabindex
    :type: integer
    :required: false

    Specifies the tab order of this element

.. _typo3-fluid-form-upload-onclick_argument:

..  confval:: onclick
    :name: typo3-fluid-form-upload-onclick
    :type: string
    :required: false

    JavaScript evaluated for the onclick event
