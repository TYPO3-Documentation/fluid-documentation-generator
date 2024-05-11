..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/PageRendererViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/PageRendererViewHelper.php
:navigation-title: be.pageRenderer
.. include:: /Includes.rst.txt

.. _typo3-fluid-be-pagerenderer:

================================================
Be.pageRenderer ViewHelper `<f:be.pageRenderer>`
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

.. _typo3-fluid-be-pagerenderer_source:

Source code
===========

Go to the source code of this ViewHelper: `PageRendererViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/PageRendererViewHelper.php>`__.

.. _typo3-fluid-be-pagerenderer_arguments:

Arguments
=========

The following arguments are available for `<f:be.pageRenderer>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3-fluid-be-pagerenderer-pagetitle_argument:

..  confval:: pageTitle
    :name: typo3-fluid-be-pagerenderer-pagetitle
    :type: string
    :required: false

    Title tag of the module. Not required by default, as BE modules are shown in a frame

.. _typo3-fluid-be-pagerenderer-includecssfiles_argument:

..  confval:: includeCssFiles
    :name: typo3-fluid-be-pagerenderer-includecssfiles
    :type: mixed
    :required: false

    List of custom CSS file to be loaded

.. _typo3-fluid-be-pagerenderer-includejsfiles_argument:

..  confval:: includeJsFiles
    :name: typo3-fluid-be-pagerenderer-includejsfiles
    :type: mixed
    :required: false

    List of custom JavaScript file to be loaded

.. _typo3-fluid-be-pagerenderer-addjsinlinelabels_argument:

..  confval:: addJsInlineLabels
    :name: typo3-fluid-be-pagerenderer-addjsinlinelabels
    :type: mixed
    :required: false

    Custom labels to add to JavaScript inline labels

.. _typo3-fluid-be-pagerenderer-includejavascriptmodules_argument:

..  confval:: includeJavaScriptModules
    :name: typo3-fluid-be-pagerenderer-includejavascriptmodules
    :type: mixed
    :required: false

    List of JavaScript modules to be loaded

.. _typo3-fluid-be-pagerenderer-addinlinesettings_argument:

..  confval:: addInlineSettings
    :name: typo3-fluid-be-pagerenderer-addinlinesettings
    :type: mixed
    :required: false

    Adds Javascript Inline Setting
