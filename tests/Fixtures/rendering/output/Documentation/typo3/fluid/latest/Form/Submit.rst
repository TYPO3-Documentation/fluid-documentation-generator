..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/SubmitViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/SubmitViewHelper.php
:navigation-title: form.submit

.. include:: /Includes.rst.txt

.. _typo3-fluid-form-submit:

========================================
Form.submit ViewHelper `<f:form.submit>`
========================================



Creates a submit button.

Examples
========

Defaults
--------

::

   <f:form.submit value="Send Mail" />

Output::

   <input type="submit" />

Dummy content for template preview
----------------------------------

::

   <f:form.submit name="mySubmit" value="Send Mail"><button>dummy button</button></f:form.submit>

Output::

   <input type="submit" name="mySubmit" value="Send Mail" />

.. _typo3-fluid-form-submit_source:

Source code
===========

Go to the source code of this ViewHelper: `SubmitViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/SubmitViewHelper.php>`__.

.. _typo3-fluid-form-submit_arguments:

Arguments
=========

The following arguments are available for `<f:form.submit>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3-fluid-form-submit-additionalattributes_argument:

..  confval:: additionalAttributes
    :name: typo3-fluid-form-submit-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-form-submit-data_argument:

..  confval:: data
    :name: typo3-fluid-form-submit-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-form-submit-aria_argument:

..  confval:: aria
    :name: typo3-fluid-form-submit-aria
    :type: mixed
    :required: false

    Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-form-submit-name_argument:

..  confval:: name
    :name: typo3-fluid-form-submit-name
    :type: string
    :required: false

    Name of input tag

.. _typo3-fluid-form-submit-value_argument:

..  confval:: value
    :name: typo3-fluid-form-submit-value
    :type: mixed
    :required: false

    Value of input tag

.. _typo3-fluid-form-submit-property_argument:

..  confval:: property
    :name: typo3-fluid-form-submit-property
    :type: string
    :required: false

    Name of Object Property. If used in conjunction with <f:form object="...">, the "name" property will be ignored, while "value" can be used to specify a default field value instead of the object property value.

.. _typo3-fluid-form-submit-disabled_argument:

..  confval:: disabled
    :name: typo3-fluid-form-submit-disabled
    :type: string
    :required: false

    Specifies that the input element should be disabled when the page loads

.. _typo3-fluid-form-submit-class_argument:

..  confval:: class
    :name: typo3-fluid-form-submit-class
    :type: string
    :required: false

    CSS class(es) for this element

.. _typo3-fluid-form-submit-dir_argument:

..  confval:: dir
    :name: typo3-fluid-form-submit-dir
    :type: string
    :required: false

    Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-form-submit-id_argument:

..  confval:: id
    :name: typo3-fluid-form-submit-id
    :type: string
    :required: false

    Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-form-submit-lang_argument:

..  confval:: lang
    :name: typo3-fluid-form-submit-lang
    :type: string
    :required: false

    Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-form-submit-style_argument:

..  confval:: style
    :name: typo3-fluid-form-submit-style
    :type: string
    :required: false

    Individual CSS styles for this element

.. _typo3-fluid-form-submit-title_argument:

..  confval:: title
    :name: typo3-fluid-form-submit-title
    :type: string
    :required: false

    Tooltip text of element

.. _typo3-fluid-form-submit-accesskey_argument:

..  confval:: accesskey
    :name: typo3-fluid-form-submit-accesskey
    :type: string
    :required: false

    Keyboard shortcut to access this element

.. _typo3-fluid-form-submit-tabindex_argument:

..  confval:: tabindex
    :name: typo3-fluid-form-submit-tabindex
    :type: integer
    :required: false

    Specifies the tab order of this element

.. _typo3-fluid-form-submit-onclick_argument:

..  confval:: onclick
    :name: typo3-fluid-form-submit-onclick
    :type: string
    :required: false

    JavaScript evaluated for the onclick event
