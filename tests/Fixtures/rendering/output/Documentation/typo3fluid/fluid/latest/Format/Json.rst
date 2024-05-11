..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/Format/JsonViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/tree/main/src/ViewHelpers/Format/JsonViewHelper.php
:navigation-title: format.json
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-format-json:

========================================
Format.json ViewHelper `<f:format.json>`
========================================



Wrapper for PHPs :php:`json_encode` function.
See https://www.php.net/manual/function.json-encode.php.

Examples
========

Encoding a view variable
------------------------

::

   {someArray -> f:format.json()}

``["array","values"]``
Depending on the value of ``{someArray}``.

Associative array
-----------------

::

   {f:format.json(value: {foo: 'bar', bar: 'baz'})}

``{"foo":"bar","bar":"baz"}``

Non associative array with forced object
----------------------------------------

::

   {f:format.json(value: {0: 'bar', 1: 'baz'}, forceObject: true)}

``{"0":"bar","1":"baz"}``

.. _typo3fluid-fluid-format-json_source:

Source code
===========

Go to the source code of this ViewHelper: `JsonViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/Format/JsonViewHelper.php>`__.

.. _typo3fluid-fluid-format-json_arguments:

Arguments
=========

The following arguments are available for `<f:format.json>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3fluid-fluid-format-json-value_argument:

..  confval:: value
    :name: typo3fluid-fluid-format-json-value
    :type: mixed
    :required: false

    The incoming data to convert, or null if VH children should be used

.. _typo3fluid-fluid-format-json-forceobject_argument:

..  confval:: forceObject
    :name: typo3fluid-fluid-format-json-forceobject
    :type: boolean
    :required: false

    Outputs an JSON object rather than an array
