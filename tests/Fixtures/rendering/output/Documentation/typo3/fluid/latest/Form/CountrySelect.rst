..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/CountrySelectViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/CountrySelectViewHelper.php
:navigation-title: form.countrySelect
.. include:: /Includes.rst.txt

.. _typo3-fluid-form-countryselect:

======================================================
Form.countrySelect ViewHelper `<f:form.countrySelect>`
======================================================



Renders a :html:`<select>` tag with all available countries as options.

Examples
========

Basic usage
-----------

::

   <f:form.countrySelect name="country" value="{defaultCountry}" />

Output::

   <select name="country">
     <option value="BE">Belgium</option>
     <option value="FR">France</option>
     ....
   </select>

Prioritize countries
--------------------

Define a list of countries which should be listed as first options in the
form element::

   <f:form.countrySelect
     name="country"
     value="AT"
     prioritizedCountries="{0: 'DE', 1: 'AT', 2: 'CH'}"
   />

 Additionally, Austria is pre-selected.

Display another language
------------------------

A combination of optionLabelField and alternativeLanguage is possible. For
instance, if you want to show the localized official names but not in your
default language but in French. You can achieve this by using the following
combination::

   <f:form.countrySelect
     name="country"
     optionLabelField="localizedOfficialName"
     alternativeLanguage="fr"
     sortByOptionLabel="true"
   />

Bind an object
--------------

You can also use the "property" attribute if you have bound an object to the form.
See :ref:`<f:form> <typo3-fluid-form>` for more documentation.

.. _typo3-fluid-form-countryselect_source:

Source code
===========

Go to the source code of this ViewHelper: `CountrySelectViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/CountrySelectViewHelper.php>`__.

.. _typo3-fluid-form-countryselect_arguments:

Arguments
=========

The following arguments are available for `<f:form.countrySelect>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3-fluid-form-countryselect-additionalattributes_argument:

..  confval:: additionalAttributes
    :name: typo3-fluid-form-countryselect-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-form-countryselect-data_argument:

..  confval:: data
    :name: typo3-fluid-form-countryselect-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-form-countryselect-aria_argument:

..  confval:: aria
    :name: typo3-fluid-form-countryselect-aria
    :type: mixed
    :required: false

    Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-form-countryselect-name_argument:

..  confval:: name
    :name: typo3-fluid-form-countryselect-name
    :type: string
    :required: false

    Name of input tag

.. _typo3-fluid-form-countryselect-value_argument:

..  confval:: value
    :name: typo3-fluid-form-countryselect-value
    :type: mixed
    :required: false

    Value of input tag

.. _typo3-fluid-form-countryselect-property_argument:

..  confval:: property
    :name: typo3-fluid-form-countryselect-property
    :type: string
    :required: false

    Name of Object Property. If used in conjunction with <f:form object="...">, the "name" property will be ignored, while "value" can be used to specify a default field value instead of the object property value.

.. _typo3-fluid-form-countryselect-class_argument:

..  confval:: class
    :name: typo3-fluid-form-countryselect-class
    :type: string
    :required: false

    CSS class(es) for this element

.. _typo3-fluid-form-countryselect-dir_argument:

..  confval:: dir
    :name: typo3-fluid-form-countryselect-dir
    :type: string
    :required: false

    Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-form-countryselect-id_argument:

..  confval:: id
    :name: typo3-fluid-form-countryselect-id
    :type: string
    :required: false

    Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-form-countryselect-lang_argument:

..  confval:: lang
    :name: typo3-fluid-form-countryselect-lang
    :type: string
    :required: false

    Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-form-countryselect-style_argument:

..  confval:: style
    :name: typo3-fluid-form-countryselect-style
    :type: string
    :required: false

    Individual CSS styles for this element

.. _typo3-fluid-form-countryselect-title_argument:

..  confval:: title
    :name: typo3-fluid-form-countryselect-title
    :type: string
    :required: false

    Tooltip text of element

.. _typo3-fluid-form-countryselect-accesskey_argument:

..  confval:: accesskey
    :name: typo3-fluid-form-countryselect-accesskey
    :type: string
    :required: false

    Keyboard shortcut to access this element

.. _typo3-fluid-form-countryselect-tabindex_argument:

..  confval:: tabindex
    :name: typo3-fluid-form-countryselect-tabindex
    :type: integer
    :required: false

    Specifies the tab order of this element

.. _typo3-fluid-form-countryselect-onclick_argument:

..  confval:: onclick
    :name: typo3-fluid-form-countryselect-onclick
    :type: string
    :required: false

    JavaScript evaluated for the onclick event

.. _typo3-fluid-form-countryselect-size_argument:

..  confval:: size
    :name: typo3-fluid-form-countryselect-size
    :type: string
    :required: false

    Size of select field, a numeric value to show the amount of items to be visible at the same time - equivalent to HTML <select> site attribute

.. _typo3-fluid-form-countryselect-disabled_argument:

..  confval:: disabled
    :name: typo3-fluid-form-countryselect-disabled
    :type: string
    :required: false

    Specifies that the input element should be disabled when the page loads

.. _typo3-fluid-form-countryselect-excludecountries_argument:

..  confval:: excludeCountries
    :name: typo3-fluid-form-countryselect-excludecountries
    :type: mixed
    :Default: array ()
    :required: false

    Array with country codes that should not be shown.

.. _typo3-fluid-form-countryselect-onlycountries_argument:

..  confval:: onlyCountries
    :name: typo3-fluid-form-countryselect-onlycountries
    :type: mixed
    :Default: array ()
    :required: false

    If set, only the country codes in the list are rendered.

.. _typo3-fluid-form-countryselect-optionlabelfield_argument:

..  confval:: optionLabelField
    :name: typo3-fluid-form-countryselect-optionlabelfield
    :type: string
    :Default: 'localizedName'
    :required: false

    If specified, will call the appropriate getter on each object to determine the label. Use "name", "localizedName", "officialName" or "localizedOfficialName"

.. _typo3-fluid-form-countryselect-sortbyoptionlabel_argument:

..  confval:: sortByOptionLabel
    :name: typo3-fluid-form-countryselect-sortbyoptionlabel
    :type: boolean
    :required: false

    If true, List will be sorted by label.

.. _typo3-fluid-form-countryselect-errorclass_argument:

..  confval:: errorClass
    :name: typo3-fluid-form-countryselect-errorclass
    :type: string
    :Default: 'f3-form-error'
    :required: false

    CSS class to set if there are errors for this ViewHelper

.. _typo3-fluid-form-countryselect-prependoptionlabel_argument:

..  confval:: prependOptionLabel
    :name: typo3-fluid-form-countryselect-prependoptionlabel
    :type: string
    :required: false

    If specified, will provide an option at first position with the specified label.

.. _typo3-fluid-form-countryselect-prependoptionvalue_argument:

..  confval:: prependOptionValue
    :name: typo3-fluid-form-countryselect-prependoptionvalue
    :type: string
    :required: false

    If specified, will provide an option at first position with the specified value.

.. _typo3-fluid-form-countryselect-multiple_argument:

..  confval:: multiple
    :name: typo3-fluid-form-countryselect-multiple
    :type: boolean
    :required: false

    If set multiple options may be selected.

.. _typo3-fluid-form-countryselect-required_argument:

..  confval:: required
    :name: typo3-fluid-form-countryselect-required
    :type: boolean
    :required: false

    If set no empty value is allowed.

.. _typo3-fluid-form-countryselect-prioritizedcountries_argument:

..  confval:: prioritizedCountries
    :name: typo3-fluid-form-countryselect-prioritizedcountries
    :type: mixed
    :Default: array ()
    :required: false

    A list of country codes which should be listed on top of the list.

.. _typo3-fluid-form-countryselect-alternativelanguage_argument:

..  confval:: alternativeLanguage
    :name: typo3-fluid-form-countryselect-alternativelanguage
    :type: string
    :required: false

    If specified, the country list will be shown in the given language.
