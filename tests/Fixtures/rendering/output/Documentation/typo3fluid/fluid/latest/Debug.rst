:navigation-title: debug
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-debug:

============================
debug ViewHelper `<f:debug>`
============================


This ViewHelper is only meant to be used during development.

Examples
========

Inline notation and custom title
--------------------------------

::

    {object -> f:debug(title: 'Custom title')}

Output::

    all properties of {object} nicely highlighted (with custom title)

Only output the type
--------------------

::

    {object -> f:debug(typeOnly: true)}

Output::

    the type or class name of {object}


.. _typo3fluid-fluid-debug_arguments:

Arguments
=========


.. _typo3fluid-fluid-debug-typeonly:

typeOnly
--------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   If TRUE, debugs only the type of variables

.. _typo3fluid-fluid-debug-levels:

levels
------

:aspect:`DataType`
   integer

:aspect:`Default`
   5

:aspect:`Required`
   false
:aspect:`Description`
   Levels to render when rendering nested objects/arrays

.. _typo3fluid-fluid-debug-html:

html
----

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   Render HTML. If FALSE, output is indented plaintext
