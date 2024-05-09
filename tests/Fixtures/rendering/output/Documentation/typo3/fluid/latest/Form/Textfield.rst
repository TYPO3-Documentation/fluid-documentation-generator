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

..  contents::
    :local:


.. _typo3-fluid-form-textfield-additionalattributes_argument:

additionalAttributes
--------------------

..  confval:: additionalAttributes
    :name: typo3-fluid-form-textfield-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-form-textfield-data_argument:

data
----

..  confval:: data
    :name: typo3-fluid-form-textfield-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-form-textfield-aria_argument:

aria
----

..  confval:: aria
    :name: typo3-fluid-form-textfield-aria
    :type: mixed
    :required: false

    Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-form-textfield-name_argument:

name
----

..  confval:: name
    :name: typo3-fluid-form-textfield-name
    :type: string
    :required: false

    Name of input tag

.. _typo3-fluid-form-textfield-value_argument:

value
-----

..  confval:: value
    :name: typo3-fluid-form-textfield-value
    :type: mixed
    :required: false

    Value of input tag

.. _typo3-fluid-form-textfield-property_argument:

property
--------

..  confval:: property
    :name: typo3-fluid-form-textfield-property
    :type: string
    :required: false

    Name of Object Property. If used in conjunction with <f:form object="...">, the "name" property will be ignored, while "value" can be used to specify a default field value instead of the object property value.

.. _typo3-fluid-form-textfield-autofocus_argument:

autofocus
---------

..  confval:: autofocus
    :name: typo3-fluid-form-textfield-autofocus
    :type: string
    :required: false

    Specifies that an input should automatically get focus when the page loads

.. _typo3-fluid-form-textfield-disabled_argument:

disabled
--------

..  confval:: disabled
    :name: typo3-fluid-form-textfield-disabled
    :type: string
    :required: false

    Specifies that the input element should be disabled when the page loads

.. _typo3-fluid-form-textfield-maxlength_argument:

maxlength
---------

..  confval:: maxlength
    :name: typo3-fluid-form-textfield-maxlength
    :type: mixed
    :required: false

    The maxlength attribute of the input field (will not be validated)

.. _typo3-fluid-form-textfield-readonly_argument:

readonly
--------

..  confval:: readonly
    :name: typo3-fluid-form-textfield-readonly
    :type: string
    :required: false

    The readonly attribute of the input field

.. _typo3-fluid-form-textfield-size_argument:

size
----

..  confval:: size
    :name: typo3-fluid-form-textfield-size
    :type: mixed
    :required: false

    The size of the input field

.. _typo3-fluid-form-textfield-placeholder_argument:

placeholder
-----------

..  confval:: placeholder
    :name: typo3-fluid-form-textfield-placeholder
    :type: string
    :required: false

    The placeholder of the textfield

.. _typo3-fluid-form-textfield-pattern_argument:

pattern
-------

..  confval:: pattern
    :name: typo3-fluid-form-textfield-pattern
    :type: string
    :required: false

    HTML5 validation pattern

.. _typo3-fluid-form-textfield-errorclass_argument:

errorClass
----------

..  confval:: errorClass
    :name: typo3-fluid-form-textfield-errorclass
    :type: string
    :Default: 'f3-form-error'
    :required: false

    CSS class to set if there are errors for this ViewHelper

.. _typo3-fluid-form-textfield-class_argument:

class
-----

..  confval:: class
    :name: typo3-fluid-form-textfield-class
    :type: string
    :required: false

    CSS class(es) for this element

.. _typo3-fluid-form-textfield-dir_argument:

dir
---

..  confval:: dir
    :name: typo3-fluid-form-textfield-dir
    :type: string
    :required: false

    Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-form-textfield-id_argument:

id
--

..  confval:: id
    :name: typo3-fluid-form-textfield-id
    :type: string
    :required: false

    Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-form-textfield-lang_argument:

lang
----

..  confval:: lang
    :name: typo3-fluid-form-textfield-lang
    :type: string
    :required: false

    Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-form-textfield-style_argument:

style
-----

..  confval:: style
    :name: typo3-fluid-form-textfield-style
    :type: string
    :required: false

    Individual CSS styles for this element

.. _typo3-fluid-form-textfield-title_argument:

title
-----

..  confval:: title
    :name: typo3-fluid-form-textfield-title
    :type: string
    :required: false

    Tooltip text of element

.. _typo3-fluid-form-textfield-accesskey_argument:

accesskey
---------

..  confval:: accesskey
    :name: typo3-fluid-form-textfield-accesskey
    :type: string
    :required: false

    Keyboard shortcut to access this element

.. _typo3-fluid-form-textfield-tabindex_argument:

tabindex
--------

..  confval:: tabindex
    :name: typo3-fluid-form-textfield-tabindex
    :type: integer
    :required: false

    Specifies the tab order of this element

.. _typo3-fluid-form-textfield-onclick_argument:

onclick
-------

..  confval:: onclick
    :name: typo3-fluid-form-textfield-onclick
    :type: string
    :required: false

    JavaScript evaluated for the onclick event

.. _typo3-fluid-form-textfield-required_argument:

required
--------

..  confval:: required
    :name: typo3-fluid-form-textfield-required
    :type: boolean
    :required: false

    If the field is required or not

.. _typo3-fluid-form-textfield-type_argument:

type
----

..  confval:: type
    :name: typo3-fluid-form-textfield-type
    :type: string
    :Default: 'text'
    :required: false

    The field type, e.g. "text", "email", "url" etc.
