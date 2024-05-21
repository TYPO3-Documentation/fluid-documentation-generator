..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/LanguageColumnViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/backend/Classes/ViewHelpers/LanguageColumnViewHelper.php
:navigation-title: languageColumn

.. include:: /Includes.rst.txt

.. _typo3-backend-languagecolumn:

===============================================
LanguageColumn ViewHelper `<be:languageColumn>`
===============================================

..  note::
    This ViewHelper is not available by default.

    :ref:`Import its namespace <t3coreapi:fluid-syntax-viewhelpers-import-namespaces>`
    :fluid:`{namespace be=TYPO3\CMS\Backend\ViewHelpers\}` in the Fluid file or
    :fluid:`xmlns:be="http://typo3.org/ns/TYPO3/CMS/Backend/ViewHelpers/"` in the opening HTML tag.




.. _typo3-backend-languagecolumn_source:

Source code
===========

Go to the source code of this ViewHelper: `LanguageColumnViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/LanguageColumnViewHelper.php>`__.

.. _typo3-backend-languagecolumn_arguments:

Arguments
=========

The following arguments are available for `<be:languageColumn>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3-backend-languagecolumn-languagecolumn_argument:

..  confval:: languageColumn
    :name: typo3-backend-languagecolumn-languagecolumn
    :type: mixed
    :required: true

    Language column object which is context for column

.. _typo3-backend-languagecolumn-columnnumber_argument:

..  confval:: columnNumber
    :name: typo3-backend-languagecolumn-columnnumber
    :type: mixed
    :required: true

    Number (colPos) of column within LanguageColumn to be returned
