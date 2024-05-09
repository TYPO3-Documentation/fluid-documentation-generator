..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/SpacelessViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/tree/main/src/ViewHelpers/SpacelessViewHelper.php
:navigation-title: spaceless
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-spaceless:

====================================
Spaceless ViewHelper `<f:spaceless>`
====================================

Space Removal ViewHelper

Removes redundant spaces between HTML tags while
preserving the whitespace that may be inside HTML
tags. Trims the final result before output.

Heavily inspired by Twig's corresponding node type.

Usage of f:spaceless
====================

::

    <f:spaceless>
        <div>
            <div>
                <div>text

        text</div>
            </div>
        </div>
    </f:spaceless>

Output::

    <div><div><div>text

    text</div></div></div>

.. _typo3fluid-fluid-spaceless_source:

Source code
===========

Go to the source code of this ViewHelper: `SpacelessViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/SpacelessViewHelper.php>`__.

..  note:: `<f:spaceless>` has no arguments.
