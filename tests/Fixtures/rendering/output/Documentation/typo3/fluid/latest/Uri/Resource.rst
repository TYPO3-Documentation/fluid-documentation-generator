..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Uri/ResourceViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Uri/ResourceViewHelper.php
:navigation-title: uri.resource

.. include:: /Includes.rst.txt

.. _typo3-fluid-uri-resource:

==========================================
Uri.resource ViewHelper `<f:uri.resource>`
==========================================



A ViewHelper for creating URIs to resources.

This ViewHelper should be used for extension resource files.

For images within FAL storages, or where graphical operations are
performed, use :ref:`<f:uri.image> <typo3-fluid-uri-image>` instead.

Examples
========

Best practice with EXT: syntax
------------------------------

::

   <link href="{f:uri.resource(path:'EXT:indexed_search/Resources/Public/Css/Stylesheet.css')}" rel="stylesheet" />

Output::

   <link href="typo3/sysext/indexed_search/Resources/Public/Css/Stylesheet.css" rel="stylesheet" />

Preferred syntax that works in both extbase and non-extbase context.

Defaults
--------

::

   <link href="{f:uri.resource(path:'Css/Stylesheet.css')}" rel="stylesheet" />

Output::

   <link href="typo3conf/ext/example_extension/Resources/Public/Css/Stylesheet.css" rel="stylesheet" />

Works only in extbase context since it uses the extbase request to find current extension, magically adds 'Resources/Public' to path.

With extension name
-------------------

::

   <link href="{f:uri.resource(path:'Css/Stylesheet.css', extensionName: 'AnotherExtension')}" rel="stylesheet" />

Output::

   <link href="typo3conf/ext/another_extension/Resources/Public/Css/Stylesheet.css" rel="stylesheet" />

Magically adds 'Resources/Public' to path.

.. _typo3-fluid-uri-resource_source:

Source code
===========

Go to the source code of this ViewHelper: `ResourceViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Uri/ResourceViewHelper.php>`__.

.. _typo3-fluid-uri-resource_arguments:

Arguments
=========

The following arguments are available for `<f:uri.resource>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3-fluid-uri-resource-path_argument:

..  confval:: path
    :name: typo3-fluid-uri-resource-path
    :type: string
    :required: true

    The path and filename of the resource (relative to Public resource directory of the extension).

.. _typo3-fluid-uri-resource-extensionname_argument:

..  confval:: extensionName
    :name: typo3-fluid-uri-resource-extensionname
    :type: string
    :required: false

    Target extension name. If not set, the current extension name will be used

.. _typo3-fluid-uri-resource-absolute_argument:

..  confval:: absolute
    :name: typo3-fluid-uri-resource-absolute
    :type: boolean
    :required: false

    If set, an absolute URI is rendered
