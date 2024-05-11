..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Uri/ExternalViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Uri/ExternalViewHelper.php
:navigation-title: uri.external
.. include:: /Includes.rst.txt

.. _typo3-fluid-uri-external:

==========================================
Uri.external ViewHelper `<f:uri.external>`
==========================================



A ViewHelper for creating URIs to external targets.
Currently the specified URI is simply passed through.

Examples
========

Default
-------

::

   <f:uri.external uri="https://www.typo3.org" />

``https://www.typo3.org``

Custom default scheme
---------------------

::

   <f:uri.external uri="typo3.org" defaultScheme="ftp" />

``ftp://typo3.org``

.. _typo3-fluid-uri-external_source:

Source code
===========

Go to the source code of this ViewHelper: `ExternalViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Uri/ExternalViewHelper.php>`__.

.. _typo3-fluid-uri-external_arguments:

Arguments
=========

The following arguments are available for `<f:uri.external>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3-fluid-uri-external-uri_argument:

..  confval:: uri
    :name: typo3-fluid-uri-external-uri
    :type: string
    :required: true

    Target URI

.. _typo3-fluid-uri-external-defaultscheme_argument:

..  confval:: defaultScheme
    :name: typo3-fluid-uri-external-defaultscheme
    :type: string
    :Default: 'https'
    :required: false

    Scheme the href attribute will be prefixed with if specified $uri does not contain a scheme already
