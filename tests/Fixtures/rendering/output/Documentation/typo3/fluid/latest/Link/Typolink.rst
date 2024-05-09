..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Link/TypolinkViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Link/TypolinkViewHelper.php
:navigation-title: link.typolink
.. include:: /Includes.rst.txt

.. _typo3-fluid-link-typolink:

============================================
Link.typolink ViewHelper `<f:link.typolink>`
============================================

A ViewHelper to create links from fields supported by the link wizard

Example
=======

``{link}`` contains: ``t3://page?uid=2&arg1=val1#9 _blank some-css-class "Title containing Whitespace"``.

Or a legacy version from older TYPO3 versions:
``{link}`` contains: ``9 _blank - "testtitle with whitespace" &X=y``.

Minimal usage
-------------

::

   <f:link.typolink parameter="{link}">
      Linktext
   </f:link.typolink>

Output::

   <a href="/page/path/name.html?X=y" title="testtitle with whitespace" target="_blank">
      Linktext
   </a>

Depending on current page, routing and page path configuration.

TextWrap usage
--------------

::

   <f:link.typolink parameter="123" textWrap="<span>|</span>"/>

Output::

   <a href="/some/page">
      <span>Page title of some page wrapped in span</span>
   </a>

Depending on current page, routing and page path configuration.

Full parameter usage
--------------------

::

   <f:link.typolink parameter="{link}" additionalParams="&u=b"
       target="_blank"
       class="ico-class" title="some title"
       additionalAttributes="{type:'button'}"
   >
      Linktext
   </f:link.typolink>

Output::

   <a href="/page/path/name.html?X=y&u=b" title="some title" target="_blank" class="ico-class" type="button">
       Linktext
   </a>

Depending on routing and page path configuration.

.. _typo3-fluid-link-typolink_source:

Source code
===========

Go to the source code of this ViewHelper: `TypolinkViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Link/TypolinkViewHelper.php>`__.

.. _typo3-fluid-link-typolink_arguments:

Arguments
=========

The following arguments are available for `<f:link.typolink>`:

..  contents::
    :local:


.. _typo3-fluid-link-typolink-parameter_argument:

parameter
---------

..  confval:: parameter
    :name: typo3-fluid-link-typolink-parameter
    :type: string
    :required: true

    StdWrap.typolink style parameter string

.. _typo3-fluid-link-typolink-target_argument:

target
------

..  confval:: target
    :name: typo3-fluid-link-typolink-target
    :type: string
    :required: false

    Define where to display the linked URL

.. _typo3-fluid-link-typolink-class_argument:

class
-----

..  confval:: class
    :name: typo3-fluid-link-typolink-class
    :type: string
    :required: false

    Define classes for the link element

.. _typo3-fluid-link-typolink-title_argument:

title
-----

..  confval:: title
    :name: typo3-fluid-link-typolink-title
    :type: string
    :required: false

    Define the title for the link element

.. _typo3-fluid-link-typolink-language_argument:

language
--------

..  confval:: language
    :name: typo3-fluid-link-typolink-language
    :type: string
    :required: false

    Link to a specific language - defaults to the current language, use a language ID or "current" to enforce a specific language

.. _typo3-fluid-link-typolink-additionalparams_argument:

additionalParams
----------------

..  confval:: additionalParams
    :name: typo3-fluid-link-typolink-additionalparams
    :type: string
    :required: false

    Additional query parameters to be attached to the resulting URL

.. _typo3-fluid-link-typolink-additionalattributes_argument:

additionalAttributes
--------------------

..  confval:: additionalAttributes
    :name: typo3-fluid-link-typolink-additionalattributes
    :type: mixed
    :Default: array ()
    :required: false

    Additional tag attributes to be added directly to the resulting HTML tag

.. _typo3-fluid-link-typolink-addquerystring_argument:

addQueryString
--------------

..  confval:: addQueryString
    :name: typo3-fluid-link-typolink-addquerystring
    :type: string
    :required: false

    If set, the current query parameters will be kept in the URL. If set to "untrusted", then ALL query parameters will be added. Be aware, that this might lead to problems when the generated link is cached.

.. _typo3-fluid-link-typolink-addquerystringexclude_argument:

addQueryStringExclude
---------------------

..  confval:: addQueryStringExclude
    :name: typo3-fluid-link-typolink-addquerystringexclude
    :type: string
    :required: false

    Define parameters to be excluded from the query string (only active if addQueryString is set)

.. _typo3-fluid-link-typolink-absolute_argument:

absolute
--------

..  confval:: absolute
    :name: typo3-fluid-link-typolink-absolute
    :type: boolean
    :required: false

    Ensure the resulting URL is an absolute URL

.. _typo3-fluid-link-typolink-parts-as_argument:

parts-as
--------

..  confval:: parts-as
    :name: typo3-fluid-link-typolink-parts-as
    :type: string
    :Default: 'typoLinkParts'
    :required: false

    Variable name containing typoLink parts (if any)

.. _typo3-fluid-link-typolink-textwrap_argument:

textWrap
--------

..  confval:: textWrap
    :name: typo3-fluid-link-typolink-textwrap
    :type: string
    :required: false

    Wrap the link using the typoscript "wrap" data type
