:navigation-title: format.nl2br
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-format-nl2br:

==========================================
format.nl2br ViewHelper `<f:format.nl2br>`
==========================================


Wrapper for PHPs :php:`nl2br` function.
See https://www.php.net/manual/function.nl2br.php.

Examples
========

Default
-------

::

   <f:format.nl2br>{text_with_linebreaks}</f:format.nl2br>

Text with line breaks replaced by ``<br />``

Inline notation
---------------

::

   {text_with_linebreaks -> f:format.nl2br()}

Text with line breaks replaced by ``<br />``


.. _typo3fluid-fluid-format-nl2br_arguments:

Arguments
=========


.. _typo3fluid-fluid-format-nl2br-value:

value
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   String to format
