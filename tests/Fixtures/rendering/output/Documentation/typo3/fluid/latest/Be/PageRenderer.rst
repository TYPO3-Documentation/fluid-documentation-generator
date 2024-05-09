:navigation-title: be.pageRenderer
.. include:: /Includes.rst.txt

.. _typo3-fluid-be-pagerenderer:

================================================
be.pageRenderer ViewHelper `<f:be.pageRenderer>`
================================================


ViewHelper to register backend module resources like CSS and JavaScript using the PageRenderer.

Examples
========

All options::

   <f:be.pageRenderer
       pageTitle="foo"
       includeCssFiles="{0: 'EXT:my_ext/Resources/Public/Css/Stylesheet.css'}"
       includeJsFiles="{0: 'EXT:my_ext/Resources/Public/JavaScript/Library1.js', 1: 'EXT:my_ext/Resources/Public/JavaScript/Library2.js'}"
       addJsInlineLabels="{'my_ext.label1': 'LLL:EXT:my_ext/Resources/Private/Language/locallang.xlf:label1'}"
       includeJavaScriptModules="{0: '@my-vendor/my-ext/my-module.js'}"
       addInlineSettings="{'some.setting.key': 'some.setting.value'}"
   />

This will load the specified css, js files and JavaScript modules, adds a custom js
inline setting, and adds a resolved label to be used in js.


.. _typo3-fluid-be-pagerenderer_arguments:

Arguments
=========


.. _typo3-fluid-be-pagerenderer-pagetitle:

pageTitle
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Title tag of the module. Not required by default, as BE modules are shown in a frame

.. _typo3-fluid-be-pagerenderer-includecssfiles:

includeCssFiles
---------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   List of custom CSS file to be loaded

.. _typo3-fluid-be-pagerenderer-includejsfiles:

includeJsFiles
--------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   List of custom JavaScript file to be loaded

.. _typo3-fluid-be-pagerenderer-addjsinlinelabels:

addJsInlineLabels
-----------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Custom labels to add to JavaScript inline labels

.. _typo3-fluid-be-pagerenderer-includejavascriptmodules:

includeJavaScriptModules
------------------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   List of JavaScript modules to be loaded

.. _typo3-fluid-be-pagerenderer-addinlinesettings:

addInlineSettings
-----------------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Adds Javascript Inline Setting
