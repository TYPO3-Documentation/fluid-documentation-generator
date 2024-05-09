..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/SelectViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/SelectViewHelper.php
:navigation-title: form.select
.. include:: /Includes.rst.txt

.. _typo3-fluid-form-select:

========================================
Form.select ViewHelper `<f:form.select>`
========================================



This ViewHelper generates a :html:`<select>` dropdown list for the use with a form.

Basic usage
===========

The most straightforward way is to supply an associative array as the ``options`` parameter.
The array key is used as option key, and the value is used as human-readable name.

Basic usage::

   <f:form.select name="paymentOptions" options="{payPal: 'PayPal International Services', visa: 'VISA Card'}" />

Pre select a value
------------------

To pre select a value, set ``value`` to the option key which should be selected.
Default value::

   <f:form.select name="paymentOptions" options="{payPal: 'PayPal International Services', visa: 'VISA Card'}" value="visa" />

Generates a dropdown box like above, except that "VISA Card" is selected.

If the select box is a multi-select box :html:`multiple="1"`, then "value" can be an array as well.

Custom options and option group rendering
-----------------------------------------

Child nodes can be used to create a completely custom set of
:html:`<option>` and :html:`<optgroup>` tags in a way compatible with the
HMAC generation.
To do so, leave out the ``options`` argument and use child ViewHelpers:

Custom options and optgroup::

   <f:form.select name="myproperty">
      <f:form.select.option value="1">Option one</f:form.select.option>
      <f:form.select.option value="2">Option two</f:form.select.option>
      <f:form.select.optgroup>
         <f:form.select.option value="3">Grouped option one</f:form.select.option>
         <f:form.select.option value="4">Grouped option twi</f:form.select.option>
      </f:form.select.optgroup>
   </f:form.select>

.. note::
   Do not use vanilla :html:`<option>` or :html:`<optgroup>` tags!
   They will invalidate the HMAC generation!

Usage on domain objects
-----------------------

If you want to output domain objects, you can just pass them as array into the ``options`` parameter.
To define what domain object value should be used as option key, use the ``optionValueField`` variable. Same goes for ``optionLabelField``.
If neither is given, the Identifier (UID/uid) and the :php:`__toString()` method are tried as fallbacks.

If the ``optionValueField`` variable is set, the getter named after that value is used to retrieve the option key.
If the ``optionLabelField`` variable is set, the getter named after that value is used to retrieve the option value.

If the ``prependOptionLabel`` variable is set, an option item is added in first position, bearing an empty string or -
if provided, the value of the ``prependOptionValue`` variable as value.

Domain objects::

   <f:form.select name="users" options="{userArray}" optionValueField="id" optionLabelField="firstName" />

In the above example, the ``userArray`` is an array of "User" domain objects, with no array key specified.

So, in the above example, the method :php:`$user->getId()` is called to
retrieve the key, and :php:`$user->getFirstName()` to retrieve the displayed
value of each entry.

The ``value`` property now expects a domain object, and tests for object equivalence.

.. _typo3-fluid-form-select_source:

Source code
===========

Go to the source code of this ViewHelper: `SelectViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/SelectViewHelper.php>`__.

.. _typo3-fluid-form-select_arguments:

Arguments
=========

The following arguments are available for `<f:form.select>`:

..  contents::
    :local:


.. _typo3-fluid-form-select-additionalattributes_argument:

additionalAttributes
--------------------

..  confval:: additionalAttributes
    :name: typo3-fluid-form-select-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-form-select-data_argument:

data
----

..  confval:: data
    :name: typo3-fluid-form-select-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-form-select-aria_argument:

aria
----

..  confval:: aria
    :name: typo3-fluid-form-select-aria
    :type: mixed
    :required: false

    Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-form-select-name_argument:

name
----

..  confval:: name
    :name: typo3-fluid-form-select-name
    :type: string
    :required: false

    Name of input tag

.. _typo3-fluid-form-select-value_argument:

value
-----

..  confval:: value
    :name: typo3-fluid-form-select-value
    :type: mixed
    :required: false

    Value of input tag

.. _typo3-fluid-form-select-property_argument:

property
--------

..  confval:: property
    :name: typo3-fluid-form-select-property
    :type: string
    :required: false

    Name of Object Property. If used in conjunction with <f:form object="...">, the "name" property will be ignored, while "value" can be used to specify a default field value instead of the object property value.

.. _typo3-fluid-form-select-class_argument:

class
-----

..  confval:: class
    :name: typo3-fluid-form-select-class
    :type: string
    :required: false

    CSS class(es) for this element

.. _typo3-fluid-form-select-dir_argument:

dir
---

..  confval:: dir
    :name: typo3-fluid-form-select-dir
    :type: string
    :required: false

    Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-form-select-id_argument:

id
--

..  confval:: id
    :name: typo3-fluid-form-select-id
    :type: string
    :required: false

    Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-form-select-lang_argument:

lang
----

..  confval:: lang
    :name: typo3-fluid-form-select-lang
    :type: string
    :required: false

    Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-form-select-style_argument:

style
-----

..  confval:: style
    :name: typo3-fluid-form-select-style
    :type: string
    :required: false

    Individual CSS styles for this element

.. _typo3-fluid-form-select-title_argument:

title
-----

..  confval:: title
    :name: typo3-fluid-form-select-title
    :type: string
    :required: false

    Tooltip text of element

.. _typo3-fluid-form-select-accesskey_argument:

accesskey
---------

..  confval:: accesskey
    :name: typo3-fluid-form-select-accesskey
    :type: string
    :required: false

    Keyboard shortcut to access this element

.. _typo3-fluid-form-select-tabindex_argument:

tabindex
--------

..  confval:: tabindex
    :name: typo3-fluid-form-select-tabindex
    :type: integer
    :required: false

    Specifies the tab order of this element

.. _typo3-fluid-form-select-onclick_argument:

onclick
-------

..  confval:: onclick
    :name: typo3-fluid-form-select-onclick
    :type: string
    :required: false

    JavaScript evaluated for the onclick event

.. _typo3-fluid-form-select-size_argument:

size
----

..  confval:: size
    :name: typo3-fluid-form-select-size
    :type: string
    :required: false

    Size of select field, a numeric value to show the amount of items to be visible at the same time - equivalent to HTML <select> site attribute

.. _typo3-fluid-form-select-disabled_argument:

disabled
--------

..  confval:: disabled
    :name: typo3-fluid-form-select-disabled
    :type: string
    :required: false

    Specifies that the input element should be disabled when the page loads

.. _typo3-fluid-form-select-options_argument:

options
-------

..  confval:: options
    :name: typo3-fluid-form-select-options
    :type: mixed
    :required: false

    Associative array with internal IDs as key, and the values are displayed in the select box. Can be combined with or replaced by child f:form.select.* nodes.

.. _typo3-fluid-form-select-optionsaftercontent_argument:

optionsAfterContent
-------------------

..  confval:: optionsAfterContent
    :name: typo3-fluid-form-select-optionsaftercontent
    :type: boolean
    :required: false

    If true, places auto-generated option tags after those rendered in the tag content. If false, automatic options come first.

.. _typo3-fluid-form-select-optionvaluefield_argument:

optionValueField
----------------

..  confval:: optionValueField
    :name: typo3-fluid-form-select-optionvaluefield
    :type: string
    :required: false

    If specified, will call the appropriate getter on each object to determine the value.

.. _typo3-fluid-form-select-optionlabelfield_argument:

optionLabelField
----------------

..  confval:: optionLabelField
    :name: typo3-fluid-form-select-optionlabelfield
    :type: string
    :required: false

    If specified, will call the appropriate getter on each object to determine the label.

.. _typo3-fluid-form-select-sortbyoptionlabel_argument:

sortByOptionLabel
-----------------

..  confval:: sortByOptionLabel
    :name: typo3-fluid-form-select-sortbyoptionlabel
    :type: boolean
    :required: false

    If true, List will be sorted by label.

.. _typo3-fluid-form-select-selectallbydefault_argument:

selectAllByDefault
------------------

..  confval:: selectAllByDefault
    :name: typo3-fluid-form-select-selectallbydefault
    :type: boolean
    :required: false

    If specified options are selected if none was set before.

.. _typo3-fluid-form-select-errorclass_argument:

errorClass
----------

..  confval:: errorClass
    :name: typo3-fluid-form-select-errorclass
    :type: string
    :Default: 'f3-form-error'
    :required: false

    CSS class to set if there are errors for this ViewHelper

.. _typo3-fluid-form-select-prependoptionlabel_argument:

prependOptionLabel
------------------

..  confval:: prependOptionLabel
    :name: typo3-fluid-form-select-prependoptionlabel
    :type: string
    :required: false

    If specified, will provide an option at first position with the specified label.

.. _typo3-fluid-form-select-prependoptionvalue_argument:

prependOptionValue
------------------

..  confval:: prependOptionValue
    :name: typo3-fluid-form-select-prependoptionvalue
    :type: string
    :required: false

    If specified, will provide an option at first position with the specified value.

.. _typo3-fluid-form-select-multiple_argument:

multiple
--------

..  confval:: multiple
    :name: typo3-fluid-form-select-multiple
    :type: boolean
    :required: false

    If set multiple options may be selected.

.. _typo3-fluid-form-select-required_argument:

required
--------

..  confval:: required
    :name: typo3-fluid-form-select-required
    :type: boolean
    :required: false

    If set no empty value is allowed.
