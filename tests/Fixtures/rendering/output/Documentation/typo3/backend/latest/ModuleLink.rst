..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/ModuleLinkViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/backend/Classes/ViewHelpers/ModuleLinkViewHelper.php
:navigation-title: moduleLink
.. include:: /Includes.rst.txt

.. _typo3-backend-modulelink:

=======================================
ModuleLink ViewHelper `<be:moduleLink>`
=======================================

..  note::
    This ViewHelper is not available by default.

    :ref:`Import its namespace <t3coreapi:fluid-syntax-viewhelpers-import-namespaces>`
    :fluid:`{namespace be=TYPO3\CMS\Backend\ViewHelpers\}` in the Fluid file or
    :fluid:`xmlns:be="http://typo3.org/ns/TYPO3/CMS/Backend/ViewHelpers/"` in the opening HTML tag.


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

The following arguments are available for `<be:moduleLink>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3-backend-modulelink-route_argument:

..  confval:: route
    :name: typo3-backend-modulelink-route
    :type: string
    :required: true

    The route to link to

.. _typo3-backend-modulelink-arguments_argument:

..  confval:: arguments
    :name: typo3-backend-modulelink-arguments
    :type: mixed
    :Default: array ()
    :required: false

    Additional link arguments

.. _typo3-backend-modulelink-query_argument:

..  confval:: query
    :name: typo3-backend-modulelink-query
    :type: string
    :required: false

    Additional link arguments as string

.. _typo3-backend-modulelink-currenturlparametername_argument:

..  confval:: currentUrlParameterName
    :name: typo3-backend-modulelink-currenturlparametername
    :type: string
    :required: false

    Add current url as given parameter
