:navigation-title: iconForRecord
.. include:: /Includes.rst.txt

.. _typo3-core-iconforrecord:

===============================================
iconForRecord ViewHelper `<core:iconForRecord>`
===============================================


Displays icon for record.

Examples
========

Default::

   <core:iconForRecord table="tt_content" row="{record}" />

Output::

    <span class="t3js-icon icon icon-size-small icon-state-default icon-mimetypes-x-content-text" data-identifier="mimetypes-x-content-text" aria-hidden="true">
        <span class="icon-markup">
            <img src="/typo3/sysext/core/Resources/Public/Icons/T3Icons/mimetypes/mimetypes-x-content-text.svg" width="16" height="16">
        </span>
    </span>


.. _typo3-core-iconforrecord_arguments:

Arguments
=========


.. _typo3-core-iconforrecord-table:

table
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   The table for the record icon

.. _typo3-core-iconforrecord-row:

row
---

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   The record row

.. _typo3-core-iconforrecord-size:

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

.. _typo3-core-iconforrecord-alternativemarkupidentifier:

alternativeMarkupIdentifier
---------------------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Alternative markup identifier
