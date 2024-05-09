..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Uri/TypolinkViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Uri/TypolinkViewHelper.php
:navigation-title: uri.typolink
.. include:: /Includes.rst.txt

.. _typo3-fluid-uri-typolink:

==========================================
Uri.typolink ViewHelper `<f:uri.typolink>`
==========================================

A ViewHelper to create uris from fields supported by the link wizard.

Example
=======

``{link}`` contains ``19 - - - &X=y``

Please note that due to the nature of typolink you have to provide a full
set of parameters.
If you use the parameter only, then target, class and title will be discarded.

Minimal usage
-------------

::

   <f:uri.typolink parameter="{link}" />

``/page/path/name.html?X=y``

Depending on routing and page path configuration.

Full parameter usage
--------------------

::

   <f:uri.typolink parameter="{link}" additionalParams="&u=b" />

``/page/path/name.html?X=y&u=b``

Depending on routing and page path configuration.

.. _typo3-fluid-uri-typolink_source:

Source code
===========

Go to the source code of this ViewHelper: `TypolinkViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Uri/TypolinkViewHelper.php>`__.

.. _typo3-fluid-uri-typolink_arguments:

Arguments
=========

The following arguments are available for `<f:uri.typolink>`:

..  contents::
    :local:


.. _typo3-fluid-uri-typolink-parameter_argument:

parameter
---------

..  confval:: parameter
    :name: typo3-fluid-uri-typolink-parameter
    :type: string
    :required: true

    StdWrap.typolink style parameter string

.. _typo3-fluid-uri-typolink-additionalparams_argument:

additionalParams
----------------

..  confval:: additionalParams
    :name: typo3-fluid-uri-typolink-additionalparams
    :type: string
    :required: false

    StdWrap.typolink additionalParams

.. _typo3-fluid-uri-typolink-language_argument:

language
--------

..  confval:: language
    :name: typo3-fluid-uri-typolink-language
    :type: string
    :required: false

    Link to a specific language - defaults to the current language, use a language ID or "current" to enforce a specific language

.. _typo3-fluid-uri-typolink-addquerystring_argument:

addQueryString
--------------

..  confval:: addQueryString
    :name: typo3-fluid-uri-typolink-addquerystring
    :type: string
    :required: false

    If set, the current query parameters will be kept in the URL. If set to "untrusted", then ALL query parameters will be added. Be aware, that this might lead to problems when the generated link is cached.

.. _typo3-fluid-uri-typolink-addquerystringexclude_argument:

addQueryStringExclude
---------------------

..  confval:: addQueryStringExclude
    :name: typo3-fluid-uri-typolink-addquerystringexclude
    :type: string
    :required: false

    Define parameters to be excluded from the query string (only active if addQueryString is set)

.. _typo3-fluid-uri-typolink-absolute_argument:

absolute
--------

..  confval:: absolute
    :name: typo3-fluid-uri-typolink-absolute
    :type: boolean
    :required: false

    Ensure the resulting URL is an absolute URL
