:navigation-title: form.password
.. include:: /Includes.rst.txt

.. _typo3-fluid-form-password:

============================================
form.password ViewHelper `<f:form.password>`
============================================


ViewHelper which creates a simple Password Text Box :html:`<input type="password">`.

Examples
========

Example::

   <f:form.password name="myPassword" />

Output::

   <input type="password" name="myPassword" value="default value" />


.. _typo3-fluid-form-password_arguments:

Arguments
=========


.. _typo3-fluid-form-password-additionalattributes:

additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-form-password-data:

data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-form-password-aria:

aria
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-form-password-name:

name
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Name of input tag

.. _typo3-fluid-form-password-value:

value
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Value of input tag

.. _typo3-fluid-form-password-property:

property
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Name of Object Property. If used in conjunction with <f:form object="...">, the "name" property will be ignored, while "value" can be used to specify a default field value instead of the object property value.

.. _typo3-fluid-form-password-disabled:

disabled
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies that the input element should be disabled when the page loads

.. _typo3-fluid-form-password-maxlength:

maxlength
---------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   The maxlength attribute of the input field (will not be validated)

.. _typo3-fluid-form-password-placeholder:

placeholder
-----------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The placeholder of the textfield

.. _typo3-fluid-form-password-readonly:

readonly
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The readonly attribute of the input field

.. _typo3-fluid-form-password-autocomplete:

autocomplete
------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specify the autocomplete behaviour for password managers

.. _typo3-fluid-form-password-size:

size
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   The size of the input field

.. _typo3-fluid-form-password-errorclass:

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

.. _typo3-fluid-form-password-class:

class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   CSS class(es) for this element

.. _typo3-fluid-form-password-dir:

dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-form-password-id:

id
--

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-form-password-lang:

lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-form-password-style:

style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Individual CSS styles for this element

.. _typo3-fluid-form-password-title:

title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Tooltip text of element

.. _typo3-fluid-form-password-accesskey:

accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Keyboard shortcut to access this element

.. _typo3-fluid-form-password-tabindex:

tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the tab order of this element

.. _typo3-fluid-form-password-onclick:

onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   JavaScript evaluated for the onclick event
