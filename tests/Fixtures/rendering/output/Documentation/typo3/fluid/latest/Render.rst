:navigation-title: render
.. include:: /Includes.rst.txt

.. _typo3-fluid-render:

==============================
render ViewHelper `<f:render>`
==============================





.. _typo3-fluid-render_arguments:

Arguments
=========


.. _typo3-fluid-render-section:

section
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Section to render - combine with partial to render section in partial

.. _typo3-fluid-render-partial:

partial
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Partial to render, with or without section

.. _typo3-fluid-render-delegate:

delegate
--------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Optional PHP class name of a permanent, included-in-app ParsedTemplateInterface implementation to override partial/section

.. _typo3-fluid-render-arguments:

arguments
---------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   false
:aspect:`Description`
   Array of variables to be transferred. Use {_all} for all variables

.. _typo3-fluid-render-optional:

optional
--------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   If TRUE, considers the *section* optional. Partial never is.

.. _typo3-fluid-render-default:

default
-------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Value (usually string) to be displayed if the section or partial does not exist

.. _typo3-fluid-render-contentas:

contentAs
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   If used, renders the child content and adds it as a template variable with this name for use in the partial/section

.. _typo3-fluid-render-debug:

debug
-----

:aspect:`DataType`
   boolean

:aspect:`Default`
   true

:aspect:`Required`
   false
:aspect:`Description`
   If true, the admin panel shows debug information if activated,
