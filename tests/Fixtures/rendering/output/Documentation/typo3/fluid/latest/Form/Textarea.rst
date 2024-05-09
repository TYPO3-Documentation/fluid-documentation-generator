:navigation-title: form.textarea
.. include:: /Includes.rst.txt

.. _typo3-fluid-form-textarea:

============================================
form.textarea ViewHelper `<f:form.textarea>`
============================================


Generates an :html:`<textarea>`.

The value of the text area needs to be set via the ``value`` attribute, as with all other form ViewHelpers.

Examples
========

Example::

   <f:form.textarea name="myTextArea" value="This is shown inside the textarea" />

Output::

   <textarea name="myTextArea">This is shown inside the textarea</textarea>


.. _typo3-fluid-form-textarea_arguments:

Arguments
=========


.. _typo3-fluid-form-textarea-additionalattributes:

additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-form-textarea-data:

data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-form-textarea-aria:

aria
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-form-textarea-name:

name
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Name of input tag

.. _typo3-fluid-form-textarea-value:

value
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Value of input tag

.. _typo3-fluid-form-textarea-property:

property
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Name of Object Property. If used in conjunction with <f:form object="...">, the "name" property will be ignored, while "value" can be used to specify a default field value instead of the object property value.

.. _typo3-fluid-form-textarea-autofocus:

autofocus
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies that a text area should automatically get focus when the page loads

.. _typo3-fluid-form-textarea-rows:

rows
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   The number of rows of a text area

.. _typo3-fluid-form-textarea-cols:

cols
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   The number of columns of a text area

.. _typo3-fluid-form-textarea-disabled:

disabled
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies that the input element should be disabled when the page loads

.. _typo3-fluid-form-textarea-placeholder:

placeholder
-----------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The placeholder of the textarea

.. _typo3-fluid-form-textarea-errorclass:

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

.. _typo3-fluid-form-textarea-readonly:

readonly
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The readonly attribute of the textarea

.. _typo3-fluid-form-textarea-required:

required
--------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   Specifies whether the textarea is required

.. _typo3-fluid-form-textarea-class:

class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   CSS class(es) for this element

.. _typo3-fluid-form-textarea-dir:

dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-form-textarea-id:

id
--

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-form-textarea-lang:

lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-form-textarea-style:

style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Individual CSS styles for this element

.. _typo3-fluid-form-textarea-title:

title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Tooltip text of element

.. _typo3-fluid-form-textarea-accesskey:

accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Keyboard shortcut to access this element

.. _typo3-fluid-form-textarea-tabindex:

tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the tab order of this element

.. _typo3-fluid-form-textarea-onclick:

onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   JavaScript evaluated for the onclick event
