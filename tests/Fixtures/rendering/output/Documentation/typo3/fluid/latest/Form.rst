..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/FormViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/FormViewHelper.php
:navigation-title: form
.. include:: /Includes.rst.txt

.. _typo3-fluid-form:

==========================
Form ViewHelper `<f:form>`
==========================

Form ViewHelper. Generates a :html:`<form>` Tag. Tailored for extbase plugins, uses extbase Request.

Basic usage
===========

Use :html:`<f:form>` to output an HTML :html:`<form>` tag which is targeted
at the specified action, in the current controller and package.
It will submit the form data via a POST request. If you want to change this,
use :html:`method="get"` as an argument.

Examples
========

A complex form with a specified encoding type
---------------------------------------------

Form with enctype set::

   <f:form action=".." controller="..." package="..." enctype="multipart/form-data">...</f:form>

A Form which should render a domain object
------------------------------------------

Binding a domain object to a form::

   <f:form action="..." name="customer" object="{customer}">
      <f:form.hidden property="id" />
      <f:form.textarea property="name" />
   </f:form>

This automatically inserts the value of ``{customer.name}`` inside the
textarea and adjusts the name of the textarea accordingly.

.. _typo3-fluid-form_source:

Source code
===========

Go to the source code of this ViewHelper: `FormViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/FormViewHelper.php>`__.

.. _typo3-fluid-form_arguments:

Arguments
=========

The following arguments are available for `<f:form>`:

..  contents::
    :local:


.. _typo3-fluid-form-additionalattributes_argument:

additionalAttributes
--------------------

..  confval:: additionalAttributes
    :name: typo3-fluid-form-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-form-data_argument:

data
----

..  confval:: data
    :name: typo3-fluid-form-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-form-aria_argument:

aria
----

..  confval:: aria
    :name: typo3-fluid-form-aria
    :type: mixed
    :required: false

    Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-form-action_argument:

action
------

..  confval:: action
    :name: typo3-fluid-form-action
    :type: string
    :required: false

    Target action

.. _typo3-fluid-form-arguments_argument:

arguments
---------

..  confval:: arguments
    :name: typo3-fluid-form-arguments
    :type: mixed
    :Default: array ()
    :required: false

    Arguments

.. _typo3-fluid-form-controller_argument:

controller
----------

..  confval:: controller
    :name: typo3-fluid-form-controller
    :type: string
    :required: false

    Target controller

.. _typo3-fluid-form-extensionname_argument:

extensionName
-------------

..  confval:: extensionName
    :name: typo3-fluid-form-extensionname
    :type: string
    :required: false

    Target Extension Name (without `tx_` prefix and no underscores). If NULL the current extension name is used

.. _typo3-fluid-form-pluginname_argument:

pluginName
----------

..  confval:: pluginName
    :name: typo3-fluid-form-pluginname
    :type: string
    :required: false

    Target plugin. If empty, the current plugin name is used

.. _typo3-fluid-form-pageuid_argument:

pageUid
-------

..  confval:: pageUid
    :name: typo3-fluid-form-pageuid
    :type: mixed
    :required: false

    Target page uid

.. _typo3-fluid-form-object_argument:

object
------

..  confval:: object
    :name: typo3-fluid-form-object
    :type: mixed
    :required: false

    Object to use for the form. Use in conjunction with the "property" attribute on the sub tags

.. _typo3-fluid-form-pagetype_argument:

pageType
--------

..  confval:: pageType
    :name: typo3-fluid-form-pagetype
    :type: mixed
    :required: false

    Target page type

.. _typo3-fluid-form-nocache_argument:

noCache
-------

..  confval:: noCache
    :name: typo3-fluid-form-nocache
    :type: boolean
    :required: false

    Set this to disable caching for the target page. You should not need this.

.. _typo3-fluid-form-section_argument:

section
-------

..  confval:: section
    :name: typo3-fluid-form-section
    :type: string
    :required: false

    The anchor to be added to the action URI (only active if $actionUri is not set)

.. _typo3-fluid-form-format_argument:

format
------

..  confval:: format
    :name: typo3-fluid-form-format
    :type: string
    :required: false

    The requested format (e.g. ".html") of the target page (only active if $actionUri is not set)

.. _typo3-fluid-form-additionalparams_argument:

additionalParams
----------------

..  confval:: additionalParams
    :name: typo3-fluid-form-additionalparams
    :type: mixed
    :Default: array ()
    :required: false

    Additional action URI query parameters that won't be prefixed like $arguments (overrule $arguments) (only active if $actionUri is not set)

.. _typo3-fluid-form-absolute_argument:

absolute
--------

..  confval:: absolute
    :name: typo3-fluid-form-absolute
    :type: boolean
    :required: false

    If set, an absolute action URI is rendered (only active if $actionUri is not set)

.. _typo3-fluid-form-addquerystring_argument:

addQueryString
--------------

..  confval:: addQueryString
    :name: typo3-fluid-form-addquerystring
    :type: string
    :required: false

    If set, the current query parameters will be kept in the URL. If set to "untrusted", then ALL query parameters will be added. Be aware, that this might lead to problems when the generated link is cached.

.. _typo3-fluid-form-argumentstobeexcludedfromquerystring_argument:

argumentsToBeExcludedFromQueryString
------------------------------------

..  confval:: argumentsToBeExcludedFromQueryString
    :name: typo3-fluid-form-argumentstobeexcludedfromquerystring
    :type: mixed
    :Default: array ()
    :required: false

    Arguments to be removed from the action URI. Only active if $addQueryString = TRUE and $actionUri is not set

.. _typo3-fluid-form-fieldnameprefix_argument:

fieldNamePrefix
---------------

..  confval:: fieldNamePrefix
    :name: typo3-fluid-form-fieldnameprefix
    :type: string
    :required: false

    Prefix that will be added to all field names within this form. If not set the prefix will be tx_yourExtension_plugin

.. _typo3-fluid-form-actionuri_argument:

actionUri
---------

..  confval:: actionUri
    :name: typo3-fluid-form-actionuri
    :type: string
    :required: false

    Can be used to overwrite the "action" attribute of the form tag

.. _typo3-fluid-form-objectname_argument:

objectName
----------

..  confval:: objectName
    :name: typo3-fluid-form-objectname
    :type: string
    :required: false

    Name of the object that is bound to this form. If this argument is not specified, the name attribute of this form is used to determine the FormObjectName

.. _typo3-fluid-form-hiddenfieldclassname_argument:

hiddenFieldClassName
--------------------

..  confval:: hiddenFieldClassName
    :name: typo3-fluid-form-hiddenfieldclassname
    :type: string
    :required: false

    HiddenFieldClassName

.. _typo3-fluid-form-requesttoken_argument:

requestToken
------------

..  confval:: requestToken
    :name: typo3-fluid-form-requesttoken
    :type: mixed
    :required: false

    Whether to add that request token to the form

.. _typo3-fluid-form-signingtype_argument:

signingType
-----------

..  confval:: signingType
    :name: typo3-fluid-form-signingtype
    :type: string
    :required: false

    Which signing type to be used on the request token (falls back to "nonce")

.. _typo3-fluid-form-enctype_argument:

enctype
-------

..  confval:: enctype
    :name: typo3-fluid-form-enctype
    :type: string
    :required: false

    MIME type with which the form is submitted

.. _typo3-fluid-form-method_argument:

method
------

..  confval:: method
    :name: typo3-fluid-form-method
    :type: string
    :Default: 'post'
    :required: false

    Transfer type (get or post)

.. _typo3-fluid-form-name_argument:

name
----

..  confval:: name
    :name: typo3-fluid-form-name
    :type: string
    :required: false

    Name of form

.. _typo3-fluid-form-onreset_argument:

onreset
-------

..  confval:: onreset
    :name: typo3-fluid-form-onreset
    :type: string
    :required: false

    JavaScript: On reset of the form

.. _typo3-fluid-form-onsubmit_argument:

onsubmit
--------

..  confval:: onsubmit
    :name: typo3-fluid-form-onsubmit
    :type: string
    :required: false

    JavaScript: On submit of the form

.. _typo3-fluid-form-target_argument:

target
------

..  confval:: target
    :name: typo3-fluid-form-target
    :type: string
    :required: false

    Target attribute of the form

.. _typo3-fluid-form-novalidate_argument:

novalidate
----------

..  confval:: novalidate
    :name: typo3-fluid-form-novalidate
    :type: boolean
    :required: false

    Indicate that the form is not to be validated on submit.

.. _typo3-fluid-form-class_argument:

class
-----

..  confval:: class
    :name: typo3-fluid-form-class
    :type: string
    :required: false

    CSS class(es) for this element

.. _typo3-fluid-form-dir_argument:

dir
---

..  confval:: dir
    :name: typo3-fluid-form-dir
    :type: string
    :required: false

    Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-form-id_argument:

id
--

..  confval:: id
    :name: typo3-fluid-form-id
    :type: string
    :required: false

    Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-form-lang_argument:

lang
----

..  confval:: lang
    :name: typo3-fluid-form-lang
    :type: string
    :required: false

    Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-form-style_argument:

style
-----

..  confval:: style
    :name: typo3-fluid-form-style
    :type: string
    :required: false

    Individual CSS styles for this element

.. _typo3-fluid-form-title_argument:

title
-----

..  confval:: title
    :name: typo3-fluid-form-title
    :type: string
    :required: false

    Tooltip text of element

.. _typo3-fluid-form-accesskey_argument:

accesskey
---------

..  confval:: accesskey
    :name: typo3-fluid-form-accesskey
    :type: string
    :required: false

    Keyboard shortcut to access this element

.. _typo3-fluid-form-tabindex_argument:

tabindex
--------

..  confval:: tabindex
    :name: typo3-fluid-form-tabindex
    :type: integer
    :required: false

    Specifies the tab order of this element

.. _typo3-fluid-form-onclick_argument:

onclick
-------

..  confval:: onclick
    :name: typo3-fluid-form-onclick
    :type: string
    :required: false

    JavaScript evaluated for the onclick event
