..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/Format/TrimViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/tree/main/src/ViewHelpers/Format/TrimViewHelper.php
:navigation-title: format.trim
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-format-trim:

========================================
Format.trim ViewHelper `<f:format.trim>`
========================================

This ViewHelper strips whitespace (or other characters) from the beginning and end of a string.

Possible sides are:

``both`` (default)
  Strip whitespace (or other characters) from the beginning and end of a string

``left`` or ``start``
  Strip whitespace (or other characters) from the beginning of a string

``right`` or ``end``
  Strip whitespace (or other characters) from the end of a string


Examples
========

Defaults
--------
::

   #<f:format.trim>   String to be trimmed.   </f:format.trim>#

.. code-block:: text

   #String to be trimmed.#


Trim only one side
------------------

::

   #<f:format.trim side="right">   String to be trimmed.   </f:format.trim>#

.. code-block:: text

   #   String to be trimmed.#


Trim special characters
-----------------------

::

   #<f:format.trim characters=" St.">   String to be trimmed.   </f:format.trim>#

.. code-block:: text

   #ring to be trimmed#

.. _typo3fluid-fluid-format-trim_source:

Source code
===========

Go to the source code of this ViewHelper: `TrimViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/Format/TrimViewHelper.php>`__.

.. _typo3fluid-fluid-format-trim_arguments:

Arguments
=========

The following arguments are available for `<f:format.trim>`:

..  contents::
    :local:


.. _typo3fluid-fluid-format-trim-value_argument:

value
-----

..  confval:: value
    :name: typo3fluid-fluid-format-trim-value
    :type: string
    :required: false

    The string value to be trimmed. If not given, the evaluated child nodes will be used.

.. _typo3fluid-fluid-format-trim-characters_argument:

characters
----------

..  confval:: characters
    :name: typo3fluid-fluid-format-trim-characters
    :type: string
    :required: false

    Optionally, the stripped characters can also be specified using the characters parameter. Simply list all characters that you want to be stripped. With .. you can specify a range of characters.

.. _typo3fluid-fluid-format-trim-side_argument:

side
----

..  confval:: side
    :name: typo3fluid-fluid-format-trim-side
    :type: string
    :Default: 'both'
    :required: false

    The side to apply, must be one of this' CASE_* constants. Defaults to both application.
