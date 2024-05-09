:navigation-title: layout
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-layout:

==============================
layout ViewHelper `<f:layout>`
==============================


With this tag, you can select a layout to be used for the current template.

Examples
========

::

    <f:layout name="main" />

Output::

    (no output)


.. _typo3fluid-fluid-layout_arguments:

Arguments
=========


.. _typo3fluid-fluid-layout-name:

name
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Name of layout to use. If none given, "Default" is used.
