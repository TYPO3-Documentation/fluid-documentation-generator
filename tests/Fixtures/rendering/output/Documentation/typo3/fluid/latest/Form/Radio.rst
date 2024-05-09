..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/RadioViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/RadioViewHelper.php
:navigation-title: form.radio
.. include:: /Includes.rst.txt

.. _typo3-fluid-form-radio:

======================================
Form.radio ViewHelper `<f:form.radio>`
======================================



ViewHelper which creates a simple radio button :html:`<input type="radio">`.

Examples
========

Simple
------

::

   <f:form.radio name="myRadioButton" value="someValue" />

Output::

   <input type="radio" name="myRadioButton" value="someValue" />

Preselect
---------

::

   <f:form.radio name="myRadioButton" value="someValue" checked="{object.value} == 5" />

Output::

   <input type="radio" name="myRadioButton" value="someValue" checked="checked" />

Depending on bound ``object`` to surrounding :ref:`f:form <typo3-fluid-form>`.

Bind to object property
-----------------------

::

   <f:form.radio property="newsletter" value="1" /> yes
   <f:form.radio property="newsletter" value="0" /> no

Output::

   <input type="radio" name="user[newsletter]" value="1" checked="checked" /> yes
   <input type="radio" name="user[newsletter]" value="0" /> no

Depending on property ``newsletter``.

.. _typo3-fluid-form-radio_source:

Source code
===========

Go to the source code of this ViewHelper: `RadioViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/RadioViewHelper.php>`__.

.. _typo3-fluid-form-radio_arguments:

Arguments
=========

The following arguments are available for `<f:form.radio>`:

..  contents::
    :local:


.. _typo3-fluid-form-radio-additionalattributes_argument:

additionalAttributes
--------------------

..  confval:: additionalAttributes
    :name: typo3-fluid-form-radio-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-form-radio-data_argument:

data
----

..  confval:: data
    :name: typo3-fluid-form-radio-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-form-radio-aria_argument:

aria
----

..  confval:: aria
    :name: typo3-fluid-form-radio-aria
    :type: mixed
    :required: false

    Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-form-radio-name_argument:

name
----

..  confval:: name
    :name: typo3-fluid-form-radio-name
    :type: string
    :required: false

    Name of input tag

.. _typo3-fluid-form-radio-value_argument:

value
-----

..  confval:: value
    :name: typo3-fluid-form-radio-value
    :type: string
    :required: true

    Value of input tag. Required for radio buttons

.. _typo3-fluid-form-radio-property_argument:

property
--------

..  confval:: property
    :name: typo3-fluid-form-radio-property
    :type: string
    :required: false

    Name of Object Property. If used in conjunction with <f:form object="...">, the "name" property will be ignored, while "value" can be used to specify a default field value instead of the object property value.

.. _typo3-fluid-form-radio-errorclass_argument:

errorClass
----------

..  confval:: errorClass
    :name: typo3-fluid-form-radio-errorclass
    :type: string
    :Default: 'f3-form-error'
    :required: false

    CSS class to set if there are errors for this ViewHelper

.. _typo3-fluid-form-radio-checked_argument:

checked
-------

..  confval:: checked
    :name: typo3-fluid-form-radio-checked
    :type: boolean
    :required: false

    Specifies that the input element should be preselected

.. _typo3-fluid-form-radio-class_argument:

class
-----

..  confval:: class
    :name: typo3-fluid-form-radio-class
    :type: string
    :required: false

    CSS class(es) for this element

.. _typo3-fluid-form-radio-dir_argument:

dir
---

..  confval:: dir
    :name: typo3-fluid-form-radio-dir
    :type: string
    :required: false

    Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-form-radio-id_argument:

id
--

..  confval:: id
    :name: typo3-fluid-form-radio-id
    :type: string
    :required: false

    Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-form-radio-lang_argument:

lang
----

..  confval:: lang
    :name: typo3-fluid-form-radio-lang
    :type: string
    :required: false

    Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-form-radio-style_argument:

style
-----

..  confval:: style
    :name: typo3-fluid-form-radio-style
    :type: string
    :required: false

    Individual CSS styles for this element

.. _typo3-fluid-form-radio-title_argument:

title
-----

..  confval:: title
    :name: typo3-fluid-form-radio-title
    :type: string
    :required: false

    Tooltip text of element

.. _typo3-fluid-form-radio-accesskey_argument:

accesskey
---------

..  confval:: accesskey
    :name: typo3-fluid-form-radio-accesskey
    :type: string
    :required: false

    Keyboard shortcut to access this element

.. _typo3-fluid-form-radio-tabindex_argument:

tabindex
--------

..  confval:: tabindex
    :name: typo3-fluid-form-radio-tabindex
    :type: integer
    :required: false

    Specifies the tab order of this element

.. _typo3-fluid-form-radio-onclick_argument:

onclick
-------

..  confval:: onclick
    :name: typo3-fluid-form-radio-onclick
    :type: string
    :required: false

    JavaScript evaluated for the onclick event

.. _typo3-fluid-form-radio-disabled_argument:

disabled
--------

..  confval:: disabled
    :name: typo3-fluid-form-radio-disabled
    :type: string
    :required: false

    Specifies that the input element should be disabled when the page loads
