..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/Toolbar/IfHasDropdownViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/backend/Classes/ViewHelpers/Toolbar/IfHasDropdownViewHelper.php
:navigation-title: toolbar.ifHasDropdown

.. include:: /Includes.rst.txt

.. _typo3-backend-toolbar-ifhasdropdown:

=============================================================
Toolbar.ifHasDropdown ViewHelper `<be:toolbar.ifHasDropdown>`
=============================================================

..  note::
    This ViewHelper is not available by default.

    :ref:`Import its namespace <t3coreapi:fluid-syntax-viewhelpers-import-namespaces>`
    :fluid:`{namespace be=TYPO3\CMS\Backend\ViewHelpers\}` in the Fluid file or
    :fluid:`xmlns:be="http://typo3.org/ns/TYPO3/CMS/Backend/ViewHelpers/"` in the opening HTML tag.


Checks whether a toolbar item provides a dropdown menu

.. _typo3-backend-toolbar-ifhasdropdown_source:

Source code
===========

Go to the source code of this ViewHelper: `IfHasDropdownViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/Toolbar/IfHasDropdownViewHelper.php>`__.

.. _typo3-backend-toolbar-ifhasdropdown_arguments:

Arguments
=========

The following arguments are available for `<be:toolbar.ifHasDropdown>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3-backend-toolbar-ifhasdropdown-then_argument:

..  confval:: then
    :name: typo3-backend-toolbar-ifhasdropdown-then
    :type: mixed
    :required: false

    Value to be returned if the condition if met.

.. _typo3-backend-toolbar-ifhasdropdown-else_argument:

..  confval:: else
    :name: typo3-backend-toolbar-ifhasdropdown-else
    :type: mixed
    :required: false

    Value to be returned if the condition if not met.

.. _typo3-backend-toolbar-ifhasdropdown-class_argument:

..  confval:: class
    :name: typo3-backend-toolbar-ifhasdropdown-class
    :type: mixed
    :required: true

    The toolbar item class to be checked for providing a drop down
