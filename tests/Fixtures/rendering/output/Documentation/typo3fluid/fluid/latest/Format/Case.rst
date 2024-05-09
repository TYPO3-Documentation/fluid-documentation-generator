:navigation-title: format.case
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-format-case:

========================================
format.case ViewHelper `<f:format.case>`
========================================


Modifies the case of an input string to upper- or lowercase or capitalization.
The default transformation will be uppercase as in `mb_convert_case`_.

Possible modes are:

``lower``
  Transforms the input string to its lowercase representation

``upper``
  Transforms the input string to its uppercase representation

``capital``
  Transforms the input string to its first letter upper-cased, i.e. capitalization

``uncapital``
  Transforms the input string to its first letter lower-cased, i.e. uncapitalization

``capitalWords``
  Not supported yet: Transforms the input string to each containing word being capitalized

Note that the behavior will be the same as in the appropriate PHP function `mb_convert_case`_;
especially regarding locale and multibyte behavior.

.. _mb_convert_case: https://www.php.net/manual/function.mb-convert-case.php

Examples
========

Default
-------

::

   <f:format.case>Some Text with miXed case</f:format.case>

Output::

   SOME TEXT WITH MIXED CASE

Example with given mode
-----------------------

::

   <f:format.case mode="capital">someString</f:format.case>

Output::

   SomeString


.. _typo3fluid-fluid-format-case_arguments:

Arguments
=========


.. _typo3fluid-fluid-format-case-value:

value
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The input value. If not given, the evaluated child nodes will be used.

.. _typo3fluid-fluid-format-case-mode:

mode
----

:aspect:`DataType`
   string

:aspect:`Default`
   'upper'

:aspect:`Required`
   false
:aspect:`Description`
   The case to apply, must be one of this' CASE_* constants. Defaults to uppercase application.
