..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/Cache/StaticViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/tree/main/src/ViewHelpers/Cache/StaticViewHelper.php
:navigation-title: cache.static
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-cache-static:

==========================================
Cache.static ViewHelper `<f:cache.static>`
==========================================

ViewHelper to force compiling to a static string

Used around chunks of template code where you want the
output of said template code to be compiled to a static
string (rather than a collection of compiled nodes, as
is the usual behavior).

The effect is that none of the child ViewHelpers or nodes
used inside this tag will be evaluated when rendering the
template once it is compiled. It will essentially replace
all logic inside the tag with a plain string output.

Works by turning the ``compile`` method into a method that
renders the child nodes and returns the resulting content
directly as a string variable.

You can use this with great effect to further optimise the
performance of your templates: in use cases where chunks of
template code depend on static variables (like thoese in
``{settings}`` for example) and those variables never change,
and the template uses no other dynamic variables, forcing
the template to compile that chunk to a static string can
save a lot of operations when rendering the compiled template.

NB: NOT TO BE USED FOR CACHING ANYTHING OTHER THAN STRING-
COMPATIBLE OUTPUT!

USE WITH CARE! WILL PRESERVE EVERYTHING RENDERED, INCLUDING
POTENTIALLY SENSITIVE DATA CONTAINED IN OUTPUT!

Examples
========

Usage and effect
----------------

::

    <f:if condition="{var}">Is always evaluated also when compiled</f:if>
    <f:cache.static>
        <f:if condition="{othervar}">
            Will only be evaluated once and this output will be
            cached as a static string with no logic attached.
            The compiled template will not contain neither the
            condition ViewHelperNodes or the variable accessor
            that are used inside this node.
        </f:if>
    </f:cache.static>

This is also evaluated when compiled (static node is closed)::

    <f:if condition="{var}">Also evaluated; is outside static node</f:if>

.. _typo3fluid-fluid-cache-static_source:

Source code
===========

Go to the source code of this ViewHelper: `StaticViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/Cache/StaticViewHelper.php>`__.

..  note:: `<f:cache.static>` has no arguments.
