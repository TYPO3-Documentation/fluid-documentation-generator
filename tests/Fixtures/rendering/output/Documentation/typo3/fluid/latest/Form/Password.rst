..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/PasswordViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/PasswordViewHelper.php
:navigation-title: form.password

.. include:: /Includes.rst.txt

.. _typo3-fluid-form-password:

============================================
Form.password ViewHelper `<f:form.password>`
============================================



ViewHelper which creates a simple Password Text Box :html:`<input type="password">`.

Examples
========

Example::

   <f:form.password name="myPassword" />

Output::

   <input type="password" name="myPassword" value="default value" />

.. _typo3-fluid-form-password_source:

Source code
===========

Go to the source code of this ViewHelper: `PasswordViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/PasswordViewHelper.php>`__.

.. _typo3-fluid-form-password_arguments:

Arguments
=========

The following arguments are available for `<f:form.password>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3-fluid-form-password-additionalattributes_argument:

..  confval:: additionalAttributes
    :name: typo3-fluid-form-password-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-form-password-data_argument:

..  confval:: data
    :name: typo3-fluid-form-password-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-form-password-aria_argument:

..  confval:: aria
    :name: typo3-fluid-form-password-aria
    :type: mixed
    :required: false

    Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-form-password-name_argument:

..  confval:: name
    :name: typo3-fluid-form-password-name
    :type: string
    :required: false

    Name of input tag

.. _typo3-fluid-form-password-value_argument:

..  confval:: value
    :name: typo3-fluid-form-password-value
    :type: mixed
    :required: false

    Value of input tag

.. _typo3-fluid-form-password-property_argument:

..  confval:: property
    :name: typo3-fluid-form-password-property
    :type: string
    :required: false

    Name of Object Property. If used in conjunction with <f:form object="...">, the "name" property will be ignored, while "value" can be used to specify a default field value instead of the object property value.

.. _typo3-fluid-form-password-disabled_argument:

..  confval:: disabled
    :name: typo3-fluid-form-password-disabled
    :type: string
    :required: false

    Specifies that the input element should be disabled when the page loads

.. _typo3-fluid-form-password-maxlength_argument:

..  confval:: maxlength
    :name: typo3-fluid-form-password-maxlength
    :type: mixed
    :required: false

    The maxlength attribute of the input field (will not be validated)

.. _typo3-fluid-form-password-placeholder_argument:

..  confval:: placeholder
    :name: typo3-fluid-form-password-placeholder
    :type: string
    :required: false

    The placeholder of the textfield

.. _typo3-fluid-form-password-readonly_argument:

..  confval:: readonly
    :name: typo3-fluid-form-password-readonly
    :type: string
    :required: false

    The readonly attribute of the input field

.. _typo3-fluid-form-password-autocomplete_argument:

..  confval:: autocomplete
    :name: typo3-fluid-form-password-autocomplete
    :type: string
    :required: false

    Specify the autocomplete behaviour for password managers

.. _typo3-fluid-form-password-size_argument:

..  confval:: size
    :name: typo3-fluid-form-password-size
    :type: mixed
    :required: false

    The size of the input field

.. _typo3-fluid-form-password-errorclass_argument:

..  confval:: errorClass
    :name: typo3-fluid-form-password-errorclass
    :type: string
    :default: `'f3-form-error'`
    :required: false

    CSS class to set if there are errors for this ViewHelper

.. _typo3-fluid-form-password-class_argument:

..  confval:: class
    :name: typo3-fluid-form-password-class
    :type: string
    :required: false

    CSS class(es) for this element

.. _typo3-fluid-form-password-dir_argument:

..  confval:: dir
    :name: typo3-fluid-form-password-dir
    :type: string
    :required: false

    Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-form-password-id_argument:

..  confval:: id
    :name: typo3-fluid-form-password-id
    :type: string
    :required: false

    Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-form-password-lang_argument:

..  confval:: lang
    :name: typo3-fluid-form-password-lang
    :type: string
    :required: false

    Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-form-password-style_argument:

..  confval:: style
    :name: typo3-fluid-form-password-style
    :type: string
    :required: false

    Individual CSS styles for this element

.. _typo3-fluid-form-password-title_argument:

..  confval:: title
    :name: typo3-fluid-form-password-title
    :type: string
    :required: false

    Tooltip text of element

.. _typo3-fluid-form-password-accesskey_argument:

..  confval:: accesskey
    :name: typo3-fluid-form-password-accesskey
    :type: string
    :required: false

    Keyboard shortcut to access this element

.. _typo3-fluid-form-password-tabindex_argument:

..  confval:: tabindex
    :name: typo3-fluid-form-password-tabindex
    :type: integer
    :required: false

    Specifies the tab order of this element

.. _typo3-fluid-form-password-onclick_argument:

..  confval:: onclick
    :name: typo3-fluid-form-password-onclick
    :type: string
    :required: false

    JavaScript evaluated for the onclick event
