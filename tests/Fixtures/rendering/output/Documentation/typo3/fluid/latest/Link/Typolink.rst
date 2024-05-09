:navigation-title: link.typolink
.. include:: /Includes.rst.txt

.. _typo3-fluid-link-typolink:

============================================
link.typolink ViewHelper `<f:link.typolink>`
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


.. _typo3-fluid-link-typolink_arguments:

Arguments
=========


.. _typo3-fluid-link-typolink-parameter:

parameter
---------

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   StdWrap.typolink style parameter string

.. _typo3-fluid-link-typolink-target:

target
------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define where to display the linked URL

.. _typo3-fluid-link-typolink-class:

class
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define classes for the link element

.. _typo3-fluid-link-typolink-title:

title
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define the title for the link element

.. _typo3-fluid-link-typolink-language:

language
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Link to a specific language - defaults to the current language, use a language ID or "current" to enforce a specific language

.. _typo3-fluid-link-typolink-additionalparams:

additionalParams
----------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Additional query parameters to be attached to the resulting URL

.. _typo3-fluid-link-typolink-additionalattributes:

additionalAttributes
--------------------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   false
:aspect:`Description`
   Additional tag attributes to be added directly to the resulting HTML tag

.. _typo3-fluid-link-typolink-addquerystring:

addQueryString
--------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   If set, the current query parameters will be kept in the URL. If set to "untrusted", then ALL query parameters will be added. Be aware, that this might lead to problems when the generated link is cached.

.. _typo3-fluid-link-typolink-addquerystringexclude:

addQueryStringExclude
---------------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define parameters to be excluded from the query string (only active if addQueryString is set)

.. _typo3-fluid-link-typolink-absolute:

absolute
--------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   Ensure the resulting URL is an absolute URL

.. _typo3-fluid-link-typolink-parts-as:

parts-as
--------

:aspect:`DataType`
   string

:aspect:`Default`
   'typoLinkParts'

:aspect:`Required`
   false
:aspect:`Description`
   Variable name containing typoLink parts (if any)

.. _typo3-fluid-link-typolink-textwrap:

textWrap
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Wrap the link using the typoscript "wrap" data type
