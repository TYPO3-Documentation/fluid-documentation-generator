..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/Select/OptgroupViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/Select/OptgroupViewHelper.php
:navigation-title: form.select.optgroup
.. include:: /Includes.rst.txt

.. _typo3-fluid-form-select-optgroup:

==========================================================
Form.select.optgroup ViewHelper `<f:form.select.optgroup>`
==========================================================

Adds custom :html:`<optgroup>` tags inside an :ref:`<f:form.select> <typo3-fluid-form-select>`,
supports further child :ref:`<f:form.select.option> <typo3-fluid-form-select-option>` tags.

.. _typo3-fluid-form-select-optgroup_source:

Source code
===========

Go to the source code of this ViewHelper: `OptgroupViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/Select/OptgroupViewHelper.php>`__.

.. _typo3-fluid-form-select-optgroup_arguments:

Arguments
=========

The following arguments are available for `<f:form.select.optgroup>`:

..  contents::
    :local:


.. _typo3-fluid-form-select-optgroup-class_argument:

class
-----

..  confval:: class
    :name: typo3-fluid-form-select-optgroup-class
    :type: string
    :required: false

    CSS class(es) for this element

.. _typo3-fluid-form-select-optgroup-dir_argument:

dir
---

..  confval:: dir
    :name: typo3-fluid-form-select-optgroup-dir
    :type: string
    :required: false

    Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-form-select-optgroup-id_argument:

id
--

..  confval:: id
    :name: typo3-fluid-form-select-optgroup-id
    :type: string
    :required: false

    Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-form-select-optgroup-lang_argument:

lang
----

..  confval:: lang
    :name: typo3-fluid-form-select-optgroup-lang
    :type: string
    :required: false

    Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-form-select-optgroup-style_argument:

style
-----

..  confval:: style
    :name: typo3-fluid-form-select-optgroup-style
    :type: string
    :required: false

    Individual CSS styles for this element

.. _typo3-fluid-form-select-optgroup-title_argument:

title
-----

..  confval:: title
    :name: typo3-fluid-form-select-optgroup-title
    :type: string
    :required: false

    Tooltip text of element

.. _typo3-fluid-form-select-optgroup-accesskey_argument:

accesskey
---------

..  confval:: accesskey
    :name: typo3-fluid-form-select-optgroup-accesskey
    :type: string
    :required: false

    Keyboard shortcut to access this element

.. _typo3-fluid-form-select-optgroup-tabindex_argument:

tabindex
--------

..  confval:: tabindex
    :name: typo3-fluid-form-select-optgroup-tabindex
    :type: integer
    :required: false

    Specifies the tab order of this element

.. _typo3-fluid-form-select-optgroup-onclick_argument:

onclick
-------

..  confval:: onclick
    :name: typo3-fluid-form-select-optgroup-onclick
    :type: string
    :required: false

    JavaScript evaluated for the onclick event

.. _typo3-fluid-form-select-optgroup-additionalattributes_argument:

additionalAttributes
--------------------

..  confval:: additionalAttributes
    :name: typo3-fluid-form-select-optgroup-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-form-select-optgroup-data_argument:

data
----

..  confval:: data
    :name: typo3-fluid-form-select-optgroup-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-form-select-optgroup-label_argument:

label
-----

..  confval:: label
    :name: typo3-fluid-form-select-optgroup-label
    :type: string
    :required: false

    Human-readable label property for the generated optgroup tag

.. _typo3-fluid-form-select-optgroup-disabled_argument:

disabled
--------

..  confval:: disabled
    :name: typo3-fluid-form-select-optgroup-disabled
    :type: boolean
    :required: false

    If true, option group is rendered as disabled
