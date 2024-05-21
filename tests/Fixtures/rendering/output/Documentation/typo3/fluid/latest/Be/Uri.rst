..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/UriViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/UriViewHelper.php
:navigation-title: be.uri

.. include:: /Includes.rst.txt

.. _typo3-fluid-be-uri:

==============================
Be.uri ViewHelper `<f:be.uri>`
==============================



A ViewHelper for creating URIs to modules.

Examples
========

URI to the web_ts module on page 92::

   <f:be.uri route="web_ts" parameters="{id: 92}"/>

``/typo3/module/web/ts?token=b6e9c9f&id=92``

Inline notation::

   {f:be.uri(route: 'web_ts', parameters: '{id: 92}')}

``/typo3/module/web/ts?token=b6e9c9f&id=92``

.. _typo3-fluid-be-uri_source:

Source code
===========

Go to the source code of this ViewHelper: `UriViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/UriViewHelper.php>`__.

.. _typo3-fluid-be-uri_arguments:

Arguments
=========

The following arguments are available for `<f:be.uri>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3-fluid-be-uri-route_argument:

..  confval:: route
    :name: typo3-fluid-be-uri-route
    :type: string
    :required: true

    The name of the route

.. _typo3-fluid-be-uri-parameters_argument:

..  confval:: parameters
    :name: typo3-fluid-be-uri-parameters
    :type: mixed
    :default: `array ()`
    :required: false

    An array of parameters

.. _typo3-fluid-be-uri-referencetype_argument:

..  confval:: referenceType
    :name: typo3-fluid-be-uri-referencetype
    :type: string
    :default: `'absolute'`
    :required: false

    The type of reference to be generated (one of the constants)
