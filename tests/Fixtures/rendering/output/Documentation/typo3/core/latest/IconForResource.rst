:navigation-title: iconForResource
.. include:: /Includes.rst.txt

.. _typo3-core-iconforresource:

===================================================
iconForResource ViewHelper `<core:iconForResource>`
===================================================


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


.. _typo3-core-iconforresource_arguments:

Arguments
=========


.. _typo3-core-iconforresource-resource:

resource
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   Resource

.. _typo3-core-iconforresource-size:

size
----

:aspect:`DataType`
   string

:aspect:`Default`
   \TYPO3\CMS\Core\Imaging\IconSize::SMALL

:aspect:`Required`
   false
:aspect:`Description`
   The icon size

.. _typo3-core-iconforresource-overlay:

overlay
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Overlay identifier

.. _typo3-core-iconforresource-options:

options
-------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   false
:aspect:`Description`
   An associative array with additional options

.. _typo3-core-iconforresource-alternativemarkupidentifier:

alternativeMarkupIdentifier
---------------------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Alternative markup identifier
