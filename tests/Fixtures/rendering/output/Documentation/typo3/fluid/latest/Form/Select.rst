:navigation-title: form.select
.. include:: /Includes.rst.txt

.. _typo3-fluid-form-select:

========================================
form.select ViewHelper `<f:form.select>`
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


.. _typo3-fluid-form-select_arguments:

Arguments
=========


.. _typo3-fluid-form-select-additionalattributes:

additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-form-select-data:

data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-form-select-aria:

aria
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-form-select-name:

name
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Name of input tag

.. _typo3-fluid-form-select-value:

value
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Value of input tag

.. _typo3-fluid-form-select-property:

property
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Name of Object Property. If used in conjunction with <f:form object="...">, the "name" property will be ignored, while "value" can be used to specify a default field value instead of the object property value.

.. _typo3-fluid-form-select-class:

class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   CSS class(es) for this element

.. _typo3-fluid-form-select-dir:

dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-form-select-id:

id
--

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-form-select-lang:

lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-form-select-style:

style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Individual CSS styles for this element

.. _typo3-fluid-form-select-title:

title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Tooltip text of element

.. _typo3-fluid-form-select-accesskey:

accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Keyboard shortcut to access this element

.. _typo3-fluid-form-select-tabindex:

tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the tab order of this element

.. _typo3-fluid-form-select-onclick:

onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   JavaScript evaluated for the onclick event

.. _typo3-fluid-form-select-size:

size
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Size of select field, a numeric value to show the amount of items to be visible at the same time - equivalent to HTML <select> site attribute

.. _typo3-fluid-form-select-disabled:

disabled
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies that the input element should be disabled when the page loads

.. _typo3-fluid-form-select-options:

options
-------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Associative array with internal IDs as key, and the values are displayed in the select box. Can be combined with or replaced by child f:form.select.* nodes.

.. _typo3-fluid-form-select-optionsaftercontent:

optionsAfterContent
-------------------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   If true, places auto-generated option tags after those rendered in the tag content. If false, automatic options come first.

.. _typo3-fluid-form-select-optionvaluefield:

optionValueField
----------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   If specified, will call the appropriate getter on each object to determine the value.

.. _typo3-fluid-form-select-optionlabelfield:

optionLabelField
----------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   If specified, will call the appropriate getter on each object to determine the label.

.. _typo3-fluid-form-select-sortbyoptionlabel:

sortByOptionLabel
-----------------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   If true, List will be sorted by label.

.. _typo3-fluid-form-select-selectallbydefault:

selectAllByDefault
------------------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   If specified options are selected if none was set before.

.. _typo3-fluid-form-select-errorclass:

errorClass
----------

:aspect:`DataType`
   string

:aspect:`Default`
   'f3-form-error'

:aspect:`Required`
   false
:aspect:`Description`
   CSS class to set if there are errors for this ViewHelper

.. _typo3-fluid-form-select-prependoptionlabel:

prependOptionLabel
------------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   If specified, will provide an option at first position with the specified label.

.. _typo3-fluid-form-select-prependoptionvalue:

prependOptionValue
------------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   If specified, will provide an option at first position with the specified value.

.. _typo3-fluid-form-select-multiple:

multiple
--------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   If set multiple options may be selected.

.. _typo3-fluid-form-select-required:

required
--------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   If set no empty value is allowed.
