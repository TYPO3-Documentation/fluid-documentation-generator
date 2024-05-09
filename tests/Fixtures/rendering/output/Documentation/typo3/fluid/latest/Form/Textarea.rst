..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/TextareaViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/TextareaViewHelper.php
:navigation-title: form.textarea
.. include:: /Includes.rst.txt

.. _typo3-fluid-form-textarea:

============================================
Form.textarea ViewHelper `<f:form.textarea>`
============================================

Generates an :html:`<textarea>`.

The value of the text area needs to be set via the ``value`` attribute, as with all other form ViewHelpers.

Examples
========

Example::

   <f:form.textarea name="myTextArea" value="This is shown inside the textarea" />

Output::

   <textarea name="myTextArea">This is shown inside the textarea</textarea>

.. _typo3-fluid-form-textarea_source:

Source code
===========

Go to the source code of this ViewHelper: `TextareaViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/TextareaViewHelper.php>`__.

.. _typo3-fluid-form-textarea_arguments:

Arguments
=========

The following arguments are available for `<f:form.textarea>`:

..  contents::
    :local:


.. _typo3-fluid-form-textarea-additionalattributes_argument:

additionalAttributes
--------------------

..  confval:: additionalAttributes
    :name: typo3-fluid-form-textarea-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-form-textarea-data_argument:

data
----

..  confval:: data
    :name: typo3-fluid-form-textarea-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-form-textarea-aria_argument:

aria
----

..  confval:: aria
    :name: typo3-fluid-form-textarea-aria
    :type: mixed
    :required: false

    Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-form-textarea-name_argument:

name
----

..  confval:: name
    :name: typo3-fluid-form-textarea-name
    :type: string
    :required: false

    Name of input tag

.. _typo3-fluid-form-textarea-value_argument:

value
-----

..  confval:: value
    :name: typo3-fluid-form-textarea-value
    :type: mixed
    :required: false

    Value of input tag

.. _typo3-fluid-form-textarea-property_argument:

property
--------

..  confval:: property
    :name: typo3-fluid-form-textarea-property
    :type: string
    :required: false

    Name of Object Property. If used in conjunction with <f:form object="...">, the "name" property will be ignored, while "value" can be used to specify a default field value instead of the object property value.

.. _typo3-fluid-form-textarea-autofocus_argument:

autofocus
---------

..  confval:: autofocus
    :name: typo3-fluid-form-textarea-autofocus
    :type: string
    :required: false

    Specifies that a text area should automatically get focus when the page loads

.. _typo3-fluid-form-textarea-rows_argument:

rows
----

..  confval:: rows
    :name: typo3-fluid-form-textarea-rows
    :type: mixed
    :required: false

    The number of rows of a text area

.. _typo3-fluid-form-textarea-cols_argument:

cols
----

..  confval:: cols
    :name: typo3-fluid-form-textarea-cols
    :type: mixed
    :required: false

    The number of columns of a text area

.. _typo3-fluid-form-textarea-disabled_argument:

disabled
--------

..  confval:: disabled
    :name: typo3-fluid-form-textarea-disabled
    :type: string
    :required: false

    Specifies that the input element should be disabled when the page loads

.. _typo3-fluid-form-textarea-placeholder_argument:

placeholder
-----------

..  confval:: placeholder
    :name: typo3-fluid-form-textarea-placeholder
    :type: string
    :required: false

    The placeholder of the textarea

.. _typo3-fluid-form-textarea-errorclass_argument:

errorClass
----------

..  confval:: errorClass
    :name: typo3-fluid-form-textarea-errorclass
    :type: string
    :Default: 'f3-form-error'
    :required: false

    CSS class to set if there are errors for this ViewHelper

.. _typo3-fluid-form-textarea-readonly_argument:

readonly
--------

..  confval:: readonly
    :name: typo3-fluid-form-textarea-readonly
    :type: string
    :required: false

    The readonly attribute of the textarea

.. _typo3-fluid-form-textarea-required_argument:

required
--------

..  confval:: required
    :name: typo3-fluid-form-textarea-required
    :type: boolean
    :required: false

    Specifies whether the textarea is required

.. _typo3-fluid-form-textarea-class_argument:

class
-----

..  confval:: class
    :name: typo3-fluid-form-textarea-class
    :type: string
    :required: false

    CSS class(es) for this element

.. _typo3-fluid-form-textarea-dir_argument:

dir
---

..  confval:: dir
    :name: typo3-fluid-form-textarea-dir
    :type: string
    :required: false

    Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-form-textarea-id_argument:

id
--

..  confval:: id
    :name: typo3-fluid-form-textarea-id
    :type: string
    :required: false

    Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-form-textarea-lang_argument:

lang
----

..  confval:: lang
    :name: typo3-fluid-form-textarea-lang
    :type: string
    :required: false

    Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-form-textarea-style_argument:

style
-----

..  confval:: style
    :name: typo3-fluid-form-textarea-style
    :type: string
    :required: false

    Individual CSS styles for this element

.. _typo3-fluid-form-textarea-title_argument:

title
-----

..  confval:: title
    :name: typo3-fluid-form-textarea-title
    :type: string
    :required: false

    Tooltip text of element

.. _typo3-fluid-form-textarea-accesskey_argument:

accesskey
---------

..  confval:: accesskey
    :name: typo3-fluid-form-textarea-accesskey
    :type: string
    :required: false

    Keyboard shortcut to access this element

.. _typo3-fluid-form-textarea-tabindex_argument:

tabindex
--------

..  confval:: tabindex
    :name: typo3-fluid-form-textarea-tabindex
    :type: integer
    :required: false

    Specifies the tab order of this element

.. _typo3-fluid-form-textarea-onclick_argument:

onclick
-------

..  confval:: onclick
    :name: typo3-fluid-form-textarea-onclick
    :type: string
    :required: false

    JavaScript evaluated for the onclick event
