:navigation-title: form.countrySelect
.. include:: /Includes.rst.txt

.. _typo3-fluid-form-countryselect:

======================================================
form.countrySelect ViewHelper `<f:form.countrySelect>`
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


.. _typo3-fluid-form-countryselect_arguments:

Arguments
=========


.. _typo3-fluid-form-countryselect-additionalattributes:

additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-form-countryselect-data:

data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-form-countryselect-aria:

aria
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-form-countryselect-name:

name
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Name of input tag

.. _typo3-fluid-form-countryselect-value:

value
-----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Value of input tag

.. _typo3-fluid-form-countryselect-property:

property
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Name of Object Property. If used in conjunction with <f:form object="...">, the "name" property will be ignored, while "value" can be used to specify a default field value instead of the object property value.

.. _typo3-fluid-form-countryselect-class:

class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   CSS class(es) for this element

.. _typo3-fluid-form-countryselect-dir:

dir
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-form-countryselect-id:

id
--

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-form-countryselect-lang:

lang
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-form-countryselect-style:

style
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Individual CSS styles for this element

.. _typo3-fluid-form-countryselect-title:

title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Tooltip text of element

.. _typo3-fluid-form-countryselect-accesskey:

accesskey
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Keyboard shortcut to access this element

.. _typo3-fluid-form-countryselect-tabindex:

tabindex
--------

:aspect:`DataType`
   integer

:aspect:`Required`
   false
:aspect:`Description`
   Specifies the tab order of this element

.. _typo3-fluid-form-countryselect-onclick:

onclick
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   JavaScript evaluated for the onclick event

.. _typo3-fluid-form-countryselect-size:

size
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Size of select field, a numeric value to show the amount of items to be visible at the same time - equivalent to HTML <select> site attribute

.. _typo3-fluid-form-countryselect-disabled:

disabled
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Specifies that the input element should be disabled when the page loads

.. _typo3-fluid-form-countryselect-excludecountries:

excludeCountries
----------------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   false
:aspect:`Description`
   Array with country codes that should not be shown.

.. _typo3-fluid-form-countryselect-onlycountries:

onlyCountries
-------------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   false
:aspect:`Description`
   If set, only the country codes in the list are rendered.

.. _typo3-fluid-form-countryselect-optionlabelfield:

optionLabelField
----------------

:aspect:`DataType`
   string

:aspect:`Default`
   'localizedName'

:aspect:`Required`
   false
:aspect:`Description`
   If specified, will call the appropriate getter on each object to determine the label. Use "name", "localizedName", "officialName" or "localizedOfficialName"

.. _typo3-fluid-form-countryselect-sortbyoptionlabel:

sortByOptionLabel
-----------------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   If true, List will be sorted by label.

.. _typo3-fluid-form-countryselect-errorclass:

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

.. _typo3-fluid-form-countryselect-prependoptionlabel:

prependOptionLabel
------------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   If specified, will provide an option at first position with the specified label.

.. _typo3-fluid-form-countryselect-prependoptionvalue:

prependOptionValue
------------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   If specified, will provide an option at first position with the specified value.

.. _typo3-fluid-form-countryselect-multiple:

multiple
--------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   If set multiple options may be selected.

.. _typo3-fluid-form-countryselect-required:

required
--------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   If set no empty value is allowed.

.. _typo3-fluid-form-countryselect-prioritizedcountries:

prioritizedCountries
--------------------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   false
:aspect:`Description`
   A list of country codes which should be listed on top of the list.

.. _typo3-fluid-form-countryselect-alternativelanguage:

alternativeLanguage
-------------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   If specified, the country list will be shown in the given language.
