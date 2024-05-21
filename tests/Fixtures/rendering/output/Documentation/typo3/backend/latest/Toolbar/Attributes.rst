..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/Toolbar/AttributesViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/backend/Classes/ViewHelpers/Toolbar/AttributesViewHelper.php
:navigation-title: toolbar.attributes

.. include:: /Includes.rst.txt

.. _typo3-backend-toolbar-attributes:

=======================================================
Toolbar.attributes ViewHelper `<be:toolbar.attributes>`
=======================================================

..  note::
    This ViewHelper is not available by default.

    :ref:`Import its namespace <t3coreapi:fluid-syntax-viewhelpers-import-namespaces>`
    :fluid:`{namespace be=TYPO3\CMS\Backend\ViewHelpers\}` in the Fluid file or
    :fluid:`xmlns:be="http://typo3.org/ns/TYPO3/CMS/Backend/ViewHelpers/"` in the opening HTML tag.


Builds an attribute string for use in rendered toolbar items

.. _typo3-backend-toolbar-attributes_source:

Source code
===========

Go to the source code of this ViewHelper: `AttributesViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/Toolbar/AttributesViewHelper.php>`__.

.. _typo3-backend-toolbar-attributes_arguments:

Arguments
=========

The following arguments are available for `<be:toolbar.attributes>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3-backend-toolbar-attributes-class_argument:

..  confval:: class
    :name: typo3-backend-toolbar-attributes-class
    :type: mixed
    :required: true

    Class being converted to a string for usage as id attribute
