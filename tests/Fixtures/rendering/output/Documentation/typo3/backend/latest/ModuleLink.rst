..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/ModuleLinkViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/backend/Classes/ViewHelpers/ModuleLinkViewHelper.php
:navigation-title: moduleLink
.. include:: /Includes.rst.txt

.. _typo3-backend-modulelink:

============================================
ModuleLink ViewHelper `<backend:moduleLink>`
============================================

Create internal link within backend.

Examples
========

Default::

    <form action="{be:moduleLink(route:'pages_new', arguments:'{id:pageUid}')}" method="post">
        <!-- form content -->
    </form>

Output::

    <form action="/pages/new" method="post">
        <!-- form content -->
    </form>

.. _typo3-backend-modulelink_source:

Source code
===========

Go to the source code of this ViewHelper: `ModuleLinkViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/ModuleLinkViewHelper.php>`__.

.. _typo3-backend-modulelink_arguments:

Arguments
=========

The following arguments are available for `<backend:moduleLink>`:

..  contents::
    :local:


.. _typo3-backend-modulelink-route_argument:

route
-----

..  confval:: route
    :name: typo3-backend-modulelink-route
    :type: string
    :required: true

    The route to link to

.. _typo3-backend-modulelink-arguments_argument:

arguments
---------

..  confval:: arguments
    :name: typo3-backend-modulelink-arguments
    :type: mixed
    :Default: array ()
    :required: false

    Additional link arguments

.. _typo3-backend-modulelink-query_argument:

query
-----

..  confval:: query
    :name: typo3-backend-modulelink-query
    :type: string
    :required: false

    Additional link arguments as string

.. _typo3-backend-modulelink-currenturlparametername_argument:

currentUrlParameterName
-----------------------

..  confval:: currentUrlParameterName
    :name: typo3-backend-modulelink-currenturlparametername
    :type: string
    :required: false

    Add current url as given parameter
