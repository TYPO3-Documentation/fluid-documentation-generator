:navigation-title: be.uri
.. include:: /Includes.rst.txt

.. _typo3-fluid-be-uri:

==============================
be.uri ViewHelper `<f:be.uri>`
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


.. _typo3-fluid-be-uri_arguments:

Arguments
=========


.. _typo3-fluid-be-uri-route:

route
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   The name of the route

.. _typo3-fluid-be-uri-parameters:

parameters
----------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   false
:aspect:`Description`
   An array of parameters

.. _typo3-fluid-be-uri-referencetype:

referenceType
-------------

:aspect:`DataType`
   string

:aspect:`Default`
   'absolute'

:aspect:`Required`
   false
:aspect:`Description`
   The type of reference to be generated (one of the constants)
