..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/TextfieldViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/TextfieldViewHelper.php
:navigation-title: form.textfield
.. include:: /Includes.rst.txt

.. _typo3-fluid-form-textfield:

==============================================
Form.textfield ViewHelper `<f:form.textfield>`
==============================================



ViewHelper which creates a text field :html:`<input type="text">`.

Examples
========

Example::

   <f:form.textfield name="myTextBox" value="default value" />

Output::

   <input type="text" name="myTextBox" value="default value" />

.. _typo3-fluid-form-textfield_source:

Source code
===========

Go to the source code of this ViewHelper: `TextfieldViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/TextfieldViewHelper.php>`__.

.. _typo3-fluid-form-textfield_arguments:

Arguments
=========

The following arguments are available for `<f:form.textfield>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3-fluid-form-textfield-additionalattributes_argument:

..  confval:: additionalAttributes
    :name: typo3-fluid-form-textfield-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-form-textfield-data_argument:

..  confval:: data
    :name: typo3-fluid-form-textfield-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-form-textfield-aria_argument:

..  confval:: aria
    :name: typo3-fluid-form-textfield-aria
    :type: mixed
    :required: false

    Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-form-textfield-name_argument:

..  confval:: name
    :name: typo3-fluid-form-textfield-name
    :type: string
    :required: false

    Name of input tag

.. _typo3-fluid-form-textfield-value_argument:

..  confval:: value
    :name: typo3-fluid-form-textfield-value
    :type: mixed
    :required: false

    Value of input tag

.. _typo3-fluid-form-textfield-property_argument:

..  confval:: property
    :name: typo3-fluid-form-textfield-property
    :type: string
    :required: false

    Name of Object Property. If used in conjunction with <f:form object="...">, the "name" property will be ignored, while "value" can be used to specify a default field value instead of the object property value.

.. _typo3-fluid-form-textfield-autofocus_argument:

..  confval:: autofocus
    :name: typo3-fluid-form-textfield-autofocus
    :type: string
    :required: false

    Specifies that an input should automatically get focus when the page loads

.. _typo3-fluid-form-textfield-disabled_argument:

..  confval:: disabled
    :name: typo3-fluid-form-textfield-disabled
    :type: string
    :required: false

    Specifies that the input element should be disabled when the page loads

.. _typo3-fluid-form-textfield-maxlength_argument:

..  confval:: maxlength
    :name: typo3-fluid-form-textfield-maxlength
    :type: mixed
    :required: false

    The maxlength attribute of the input field (will not be validated)

.. _typo3-fluid-form-textfield-readonly_argument:

..  confval:: readonly
    :name: typo3-fluid-form-textfield-readonly
    :type: string
    :required: false

    The readonly attribute of the input field

.. _typo3-fluid-form-textfield-size_argument:

..  confval:: size
    :name: typo3-fluid-form-textfield-size
    :type: mixed
    :required: false

    The size of the input field

.. _typo3-fluid-form-textfield-placeholder_argument:

..  confval:: placeholder
    :name: typo3-fluid-form-textfield-placeholder
    :type: string
    :required: false

    The placeholder of the textfield

.. _typo3-fluid-form-textfield-pattern_argument:

..  confval:: pattern
    :name: typo3-fluid-form-textfield-pattern
    :type: string
    :required: false

    HTML5 validation pattern

.. _typo3-fluid-form-textfield-errorclass_argument:

..  confval:: errorClass
    :name: typo3-fluid-form-textfield-errorclass
    :type: string
    :Default: 'f3-form-error'
    :required: false

    CSS class to set if there are errors for this ViewHelper

.. _typo3-fluid-form-textfield-class_argument:

..  confval:: class
    :name: typo3-fluid-form-textfield-class
    :type: string
    :required: false

    CSS class(es) for this element

.. _typo3-fluid-form-textfield-dir_argument:

..  confval:: dir
    :name: typo3-fluid-form-textfield-dir
    :type: string
    :required: false

    Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-form-textfield-id_argument:

..  confval:: id
    :name: typo3-fluid-form-textfield-id
    :type: string
    :required: false

    Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-form-textfield-lang_argument:

..  confval:: lang
    :name: typo3-fluid-form-textfield-lang
    :type: string
    :required: false

    Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-form-textfield-style_argument:

..  confval:: style
    :name: typo3-fluid-form-textfield-style
    :type: string
    :required: false

    Individual CSS styles for this element

.. _typo3-fluid-form-textfield-title_argument:

..  confval:: title
    :name: typo3-fluid-form-textfield-title
    :type: string
    :required: false

    Tooltip text of element

.. _typo3-fluid-form-textfield-accesskey_argument:

..  confval:: accesskey
    :name: typo3-fluid-form-textfield-accesskey
    :type: string
    :required: false

    Keyboard shortcut to access this element

.. _typo3-fluid-form-textfield-tabindex_argument:

..  confval:: tabindex
    :name: typo3-fluid-form-textfield-tabindex
    :type: integer
    :required: false

    Specifies the tab order of this element

.. _typo3-fluid-form-textfield-onclick_argument:

..  confval:: onclick
    :name: typo3-fluid-form-textfield-onclick
    :type: string
    :required: false

    JavaScript evaluated for the onclick event

.. _typo3-fluid-form-textfield-required_argument:

..  confval:: required
    :name: typo3-fluid-form-textfield-required
    :type: boolean
    :required: false

    If the field is required or not

.. _typo3-fluid-form-textfield-type_argument:

..  confval:: type
    :name: typo3-fluid-form-textfield-type
    :type: string
    :Default: 'text'
    :required: false

    The field type, e.g. "text", "email", "url" etc.
