..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/CheckboxViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/CheckboxViewHelper.php
:navigation-title: form.checkbox
.. include:: /Includes.rst.txt

.. _typo3-fluid-form-checkbox:

============================================
Form.checkbox ViewHelper `<f:form.checkbox>`
============================================

ViewHelper which creates a simple checkbox :html:`<input type="checkbox">`.

Examples
========

Simple one
----------

::

   <f:form.checkbox name="myCheckBox" value="someValue" />

Output::

   <input type="checkbox" name="myCheckBox" value="someValue" />

Preselect
---------

::

   <f:form.checkbox name="myCheckBox" value="someValue" checked="{object.value} == 5" />

Output::

   <input type="checkbox" name="myCheckBox" value="someValue" checked="checked" />

Depending on bound ``object`` to surrounding :ref:`f:form <typo3-fluid-form>`.

Bind to object property
-----------------------

::

   <f:form.checkbox property="interests" value="TYPO3" multiple="1" />

Output::

   <input type="checkbox" name="user[interests][]" value="TYPO3" checked="checked" />

Depending on property ``interests``.

.. _typo3-fluid-form-checkbox_source:

Source code
===========

Go to the source code of this ViewHelper: `CheckboxViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/CheckboxViewHelper.php>`__.

.. _typo3-fluid-form-checkbox_arguments:

Arguments
=========

The following arguments are available for `<f:form.checkbox>`:

..  contents::
    :local:


.. _typo3-fluid-form-checkbox-additionalattributes_argument:

additionalAttributes
--------------------

..  confval:: additionalAttributes
    :name: typo3-fluid-form-checkbox-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-form-checkbox-data_argument:

data
----

..  confval:: data
    :name: typo3-fluid-form-checkbox-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-form-checkbox-aria_argument:

aria
----

..  confval:: aria
    :name: typo3-fluid-form-checkbox-aria
    :type: mixed
    :required: false

    Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-form-checkbox-name_argument:

name
----

..  confval:: name
    :name: typo3-fluid-form-checkbox-name
    :type: string
    :required: false

    Name of input tag

.. _typo3-fluid-form-checkbox-value_argument:

value
-----

..  confval:: value
    :name: typo3-fluid-form-checkbox-value
    :type: string
    :required: true

    Value of input tag. Required for checkboxes

.. _typo3-fluid-form-checkbox-property_argument:

property
--------

..  confval:: property
    :name: typo3-fluid-form-checkbox-property
    :type: string
    :required: false

    Name of Object Property. If used in conjunction with <f:form object="...">, the "name" property will be ignored, while "value" can be used to specify a default field value instead of the object property value.

.. _typo3-fluid-form-checkbox-disabled_argument:

disabled
--------

..  confval:: disabled
    :name: typo3-fluid-form-checkbox-disabled
    :type: string
    :required: false

    Specifies that the input element should be disabled when the page loads

.. _typo3-fluid-form-checkbox-errorclass_argument:

errorClass
----------

..  confval:: errorClass
    :name: typo3-fluid-form-checkbox-errorclass
    :type: string
    :Default: 'f3-form-error'
    :required: false

    CSS class to set if there are errors for this ViewHelper

.. _typo3-fluid-form-checkbox-class_argument:

class
-----

..  confval:: class
    :name: typo3-fluid-form-checkbox-class
    :type: string
    :required: false

    CSS class(es) for this element

.. _typo3-fluid-form-checkbox-dir_argument:

dir
---

..  confval:: dir
    :name: typo3-fluid-form-checkbox-dir
    :type: string
    :required: false

    Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-form-checkbox-id_argument:

id
--

..  confval:: id
    :name: typo3-fluid-form-checkbox-id
    :type: string
    :required: false

    Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-form-checkbox-lang_argument:

lang
----

..  confval:: lang
    :name: typo3-fluid-form-checkbox-lang
    :type: string
    :required: false

    Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-form-checkbox-style_argument:

style
-----

..  confval:: style
    :name: typo3-fluid-form-checkbox-style
    :type: string
    :required: false

    Individual CSS styles for this element

.. _typo3-fluid-form-checkbox-title_argument:

title
-----

..  confval:: title
    :name: typo3-fluid-form-checkbox-title
    :type: string
    :required: false

    Tooltip text of element

.. _typo3-fluid-form-checkbox-accesskey_argument:

accesskey
---------

..  confval:: accesskey
    :name: typo3-fluid-form-checkbox-accesskey
    :type: string
    :required: false

    Keyboard shortcut to access this element

.. _typo3-fluid-form-checkbox-tabindex_argument:

tabindex
--------

..  confval:: tabindex
    :name: typo3-fluid-form-checkbox-tabindex
    :type: integer
    :required: false

    Specifies the tab order of this element

.. _typo3-fluid-form-checkbox-onclick_argument:

onclick
-------

..  confval:: onclick
    :name: typo3-fluid-form-checkbox-onclick
    :type: string
    :required: false

    JavaScript evaluated for the onclick event

.. _typo3-fluid-form-checkbox-checked_argument:

checked
-------

..  confval:: checked
    :name: typo3-fluid-form-checkbox-checked
    :type: boolean
    :required: false

    Specifies that the input element should be preselected

.. _typo3-fluid-form-checkbox-multiple_argument:

multiple
--------

..  confval:: multiple
    :name: typo3-fluid-form-checkbox-multiple
    :type: boolean
    :required: false

    Specifies whether this checkbox belongs to a multivalue (is part of a checkbox group)
