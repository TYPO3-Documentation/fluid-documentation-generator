:navigation-title: spaceless
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-spaceless:

====================================
spaceless ViewHelper `<f:spaceless>`
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


.. _typo3fluid-fluid-spaceless_arguments:

Arguments
=========


This ViewHelper has no arguments.
