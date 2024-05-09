..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/HiddenViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/HiddenViewHelper.php
:navigation-title: form.hidden
.. include:: /Includes.rst.txt

.. _typo3-fluid-form-hidden:

========================================
Form.hidden ViewHelper `<f:form.hidden>`
========================================



Renders an :html:`<input type="hidden" ...>` tag.

Examples
========

Example::

   <f:form.hidden name="myHiddenValue" value="42" />

Output::

   <input type="hidden" name="myHiddenValue" value="42" />

You can also use the "property" attribute if you have bound an object to the form.
See :ref:`<f:form> <typo3-fluid-form>` for more documentation.

.. _typo3-fluid-form-hidden_source:

Source code
===========

Go to the source code of this ViewHelper: `HiddenViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/HiddenViewHelper.php>`__.

.. _typo3-fluid-form-hidden_arguments:

Arguments
=========

The following arguments are available for `<f:form.hidden>`:

..  contents::
    :local:


.. _typo3-fluid-form-hidden-additionalattributes_argument:

additionalAttributes
--------------------

..  confval:: additionalAttributes
    :name: typo3-fluid-form-hidden-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-form-hidden-data_argument:

data
----

..  confval:: data
    :name: typo3-fluid-form-hidden-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-form-hidden-aria_argument:

aria
----

..  confval:: aria
    :name: typo3-fluid-form-hidden-aria
    :type: mixed
    :required: false

    Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-form-hidden-name_argument:

name
----

..  confval:: name
    :name: typo3-fluid-form-hidden-name
    :type: string
    :required: false

    Name of input tag

.. _typo3-fluid-form-hidden-value_argument:

value
-----

..  confval:: value
    :name: typo3-fluid-form-hidden-value
    :type: mixed
    :required: false

    Value of input tag

.. _typo3-fluid-form-hidden-property_argument:

property
--------

..  confval:: property
    :name: typo3-fluid-form-hidden-property
    :type: string
    :required: false

    Name of Object Property. If used in conjunction with <f:form object="...">, the "name" property will be ignored, while "value" can be used to specify a default field value instead of the object property value.

.. _typo3-fluid-form-hidden-class_argument:

class
-----

..  confval:: class
    :name: typo3-fluid-form-hidden-class
    :type: string
    :required: false

    CSS class(es) for this element

.. _typo3-fluid-form-hidden-dir_argument:

dir
---

..  confval:: dir
    :name: typo3-fluid-form-hidden-dir
    :type: string
    :required: false

    Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-form-hidden-id_argument:

id
--

..  confval:: id
    :name: typo3-fluid-form-hidden-id
    :type: string
    :required: false

    Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-form-hidden-lang_argument:

lang
----

..  confval:: lang
    :name: typo3-fluid-form-hidden-lang
    :type: string
    :required: false

    Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-form-hidden-style_argument:

style
-----

..  confval:: style
    :name: typo3-fluid-form-hidden-style
    :type: string
    :required: false

    Individual CSS styles for this element

.. _typo3-fluid-form-hidden-title_argument:

title
-----

..  confval:: title
    :name: typo3-fluid-form-hidden-title
    :type: string
    :required: false

    Tooltip text of element

.. _typo3-fluid-form-hidden-accesskey_argument:

accesskey
---------

..  confval:: accesskey
    :name: typo3-fluid-form-hidden-accesskey
    :type: string
    :required: false

    Keyboard shortcut to access this element

.. _typo3-fluid-form-hidden-tabindex_argument:

tabindex
--------

..  confval:: tabindex
    :name: typo3-fluid-form-hidden-tabindex
    :type: integer
    :required: false

    Specifies the tab order of this element

.. _typo3-fluid-form-hidden-onclick_argument:

onclick
-------

..  confval:: onclick
    :name: typo3-fluid-form-hidden-onclick
    :type: string
    :required: false

    JavaScript evaluated for the onclick event

.. _typo3-fluid-form-hidden-respectsubmitteddatavalue_argument:

respectSubmittedDataValue
-------------------------

..  confval:: respectSubmittedDataValue
    :name: typo3-fluid-form-hidden-respectsubmitteddatavalue
    :type: boolean
    :Default: true
    :required: false

    Enable or disable the usage of the submitted values
