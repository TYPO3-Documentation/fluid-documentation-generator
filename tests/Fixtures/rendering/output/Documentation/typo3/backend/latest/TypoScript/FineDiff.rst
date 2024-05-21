..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/TypoScript/FineDiffViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/backend/Classes/ViewHelpers/TypoScript/FineDiffViewHelper.php
:navigation-title: typoScript.fineDiff

.. include:: /Includes.rst.txt

.. _typo3-backend-typoscript-finediff:

=========================================================
TypoScript.fineDiff ViewHelper `<be:typoScript.fineDiff>`
=========================================================

..  note::
    This ViewHelper is not available by default.

    :ref:`Import its namespace <t3coreapi:fluid-syntax-viewhelpers-import-namespaces>`
    :fluid:`{namespace be=TYPO3\CMS\Backend\ViewHelpers\}` in the Fluid file or
    :fluid:`xmlns:be="http://typo3.org/ns/TYPO3/CMS/Backend/ViewHelpers/"` in the opening HTML tag.


Runs two strings through 'FineDiff' on word level.

.. _typo3-backend-typoscript-finediff_source:

Source code
===========

Go to the source code of this ViewHelper: `FineDiffViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/TypoScript/FineDiffViewHelper.php>`__.

.. _typo3-backend-typoscript-finediff_arguments:

Arguments
=========

The following arguments are available for `<be:typoScript.fineDiff>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3-backend-typoscript-finediff-from_argument:

..  confval:: from
    :name: typo3-backend-typoscript-finediff-from
    :type: string
    :required: true

    Source string

.. _typo3-backend-typoscript-finediff-to_argument:

..  confval:: to
    :name: typo3-backend-typoscript-finediff-to
    :type: string
    :required: true

    Target string
