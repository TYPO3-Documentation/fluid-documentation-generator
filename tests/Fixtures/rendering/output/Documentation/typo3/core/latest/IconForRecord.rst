..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/core/Classes/ViewHelpers/IconForRecordViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/core/Classes/ViewHelpers/IconForRecordViewHelper.php
:navigation-title: iconForRecord
.. include:: /Includes.rst.txt

.. _typo3-core-iconforrecord:

===============================================
IconForRecord ViewHelper `<core:iconForRecord>`
===============================================

..  note::
    This ViewHelper is not available by default.

    :ref:`Import its namespace <t3coreapi:fluid-syntax-viewhelpers-import-namespaces>`
    :fluid:`{namespace core=TYPO3\CMS\Core\ViewHelpers\}` in the Fluid file or
    :fluid:`xmlns:core="http://typo3.org/ns/TYPO3/CMS/Core/ViewHelpers/"` in the opening HTML tag.


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

.. _typo3-core-iconforrecord_source:

Source code
===========

Go to the source code of this ViewHelper: `IconForRecordViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/core/Classes/ViewHelpers/IconForRecordViewHelper.php>`__.

.. _typo3-core-iconforrecord_arguments:

Arguments
=========

The following arguments are available for `<core:iconForRecord>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3-core-iconforrecord-table_argument:

..  confval:: table
    :name: typo3-core-iconforrecord-table
    :type: string
    :required: true

    The table for the record icon

.. _typo3-core-iconforrecord-row_argument:

..  confval:: row
    :name: typo3-core-iconforrecord-row
    :type: mixed
    :required: true

    The record row

.. _typo3-core-iconforrecord-size_argument:

..  confval:: size
    :name: typo3-core-iconforrecord-size
    :type: string
    :Default: \TYPO3\CMS\Core\Imaging\IconSize::SMALL
    :required: false

    The icon size

.. _typo3-core-iconforrecord-alternativemarkupidentifier_argument:

..  confval:: alternativeMarkupIdentifier
    :name: typo3-core-iconforrecord-alternativemarkupidentifier
    :type: string
    :required: false

    Alternative markup identifier
