:navigation-title: format.trim
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-format-trim:

========================================
format.trim ViewHelper `<f:format.trim>`
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


.. _typo3fluid-fluid-format-trim_arguments:

Arguments
=========


.. _typo3fluid-fluid-format-trim-value:

value
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The string value to be trimmed. If not given, the evaluated child nodes will be used.

.. _typo3fluid-fluid-format-trim-characters:

characters
----------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Optionally, the stripped characters can also be specified using the characters parameter. Simply list all characters that you want to be stripped. With .. you can specify a range of characters.

.. _typo3fluid-fluid-format-trim-side:

side
----

:aspect:`DataType`
   string

:aspect:`Default`
   'both'

:aspect:`Required`
   false
:aspect:`Description`
   The side to apply, must be one of this' CASE_* constants. Defaults to both application.
