..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/core/Classes/ViewHelpers/IconForResourceViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/core/Classes/ViewHelpers/IconForResourceViewHelper.php
:navigation-title: iconForResource
.. include:: /Includes.rst.txt

.. _typo3-core-iconforresource:

===================================================
IconForResource ViewHelper `<core:iconForResource>`
===================================================

..  note::
    This ViewHelper is not available by default.

    :ref:`Import its namespace <t3coreapi:fluid-syntax-viewhelpers-import-namespaces>`
    :fluid:`{namespace core=TYPO3\CMS\Core\ViewHelpers\}` in the Fluid file or
    :fluid:`xmlns:core="http://typo3.org/ns/TYPO3/CMS/Core/ViewHelpers/"` in the opening HTML tag.


Displays icon for a FAL resource (file or folder means a :php:`TYPO3\CMS\Core\Resource\ResourceInterface`).

Examples
========

Default::

   <core:iconForResource resource="{file.resource}" />

Output::

    <span class="t3js-icon icon icon-size-small icon-state-default icon-mimetypes-text-html" data-identifier="mimetypes-text-html">
        <span class="icon-markup">
            <img src="/typo3/sysext/core/Resources/Public/Icons/T3Icons/mimetypes/mimetypes-text-html.svg" width="16" height="16">
        </span>
    </span>

.. _typo3-core-iconforresource_source:

Source code
===========

Go to the source code of this ViewHelper: `IconForResourceViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/core/Classes/ViewHelpers/IconForResourceViewHelper.php>`__.

.. _typo3-core-iconforresource_arguments:

Arguments
=========

The following arguments are available for `<core:iconForResource>`:

..  contents::
    :local:


.. _typo3-core-iconforresource-resource_argument:

resource
--------

..  confval:: resource
    :name: typo3-core-iconforresource-resource
    :type: mixed
    :required: true

    Resource

.. _typo3-core-iconforresource-size_argument:

size
----

..  confval:: size
    :name: typo3-core-iconforresource-size
    :type: string
    :Default: \TYPO3\CMS\Core\Imaging\IconSize::SMALL
    :required: false

    The icon size

.. _typo3-core-iconforresource-overlay_argument:

overlay
-------

..  confval:: overlay
    :name: typo3-core-iconforresource-overlay
    :type: string
    :required: false

    Overlay identifier

.. _typo3-core-iconforresource-options_argument:

options
-------

..  confval:: options
    :name: typo3-core-iconforresource-options
    :type: mixed
    :Default: array ()
    :required: false

    An associative array with additional options

.. _typo3-core-iconforresource-alternativemarkupidentifier_argument:

alternativeMarkupIdentifier
---------------------------

..  confval:: alternativeMarkupIdentifier
    :name: typo3-core-iconforresource-alternativemarkupidentifier
    :type: string
    :required: false

    Alternative markup identifier
