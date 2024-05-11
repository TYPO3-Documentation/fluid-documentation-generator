..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/Select/OptionViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/Select/OptionViewHelper.php
:navigation-title: form.select.option
.. include:: /Includes.rst.txt

.. _typo3-fluid-form-select-option:

======================================================
Form.select.option ViewHelper `<f:form.select.option>`
======================================================



Adds custom :html:`<option>` tags inside an :ref:`<f:form.select> <typo3-fluid-form-select>`.

.. _typo3-fluid-form-select-option_source:

Source code
===========

Go to the source code of this ViewHelper: `OptionViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/Select/OptionViewHelper.php>`__.

.. _typo3-fluid-form-select-option_arguments:

Arguments
=========

The following arguments are available for `<f:form.select.option>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3-fluid-form-select-option-class_argument:

..  confval:: class
    :name: typo3-fluid-form-select-option-class
    :type: string
    :required: false

    CSS class(es) for this element

.. _typo3-fluid-form-select-option-dir_argument:

..  confval:: dir
    :name: typo3-fluid-form-select-option-dir
    :type: string
    :required: false

    Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-form-select-option-id_argument:

..  confval:: id
    :name: typo3-fluid-form-select-option-id
    :type: string
    :required: false

    Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-form-select-option-lang_argument:

..  confval:: lang
    :name: typo3-fluid-form-select-option-lang
    :type: string
    :required: false

    Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-form-select-option-style_argument:

..  confval:: style
    :name: typo3-fluid-form-select-option-style
    :type: string
    :required: false

    Individual CSS styles for this element

.. _typo3-fluid-form-select-option-title_argument:

..  confval:: title
    :name: typo3-fluid-form-select-option-title
    :type: string
    :required: false

    Tooltip text of element

.. _typo3-fluid-form-select-option-accesskey_argument:

..  confval:: accesskey
    :name: typo3-fluid-form-select-option-accesskey
    :type: string
    :required: false

    Keyboard shortcut to access this element

.. _typo3-fluid-form-select-option-tabindex_argument:

..  confval:: tabindex
    :name: typo3-fluid-form-select-option-tabindex
    :type: integer
    :required: false

    Specifies the tab order of this element

.. _typo3-fluid-form-select-option-onclick_argument:

..  confval:: onclick
    :name: typo3-fluid-form-select-option-onclick
    :type: string
    :required: false

    JavaScript evaluated for the onclick event

.. _typo3-fluid-form-select-option-selected_argument:

..  confval:: selected
    :name: typo3-fluid-form-select-option-selected
    :type: boolean
    :required: false

    If set, overrides automatic detection of selected state for this option.

.. _typo3-fluid-form-select-option-additionalattributes_argument:

..  confval:: additionalAttributes
    :name: typo3-fluid-form-select-option-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-form-select-option-data_argument:

..  confval:: data
    :name: typo3-fluid-form-select-option-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-form-select-option-value_argument:

..  confval:: value
    :name: typo3-fluid-form-select-option-value
    :type: mixed
    :required: false

    Value to be inserted in HTML tag - must be convertible to string!
