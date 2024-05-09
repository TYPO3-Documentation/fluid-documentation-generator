:navigation-title: format.html
.. include:: /Includes.rst.txt

.. _typo3-fluid-format-html:

========================================
format.html ViewHelper `<f:format.html>`
========================================


Renders a string by passing it to a TYPO3 `parseFunc`_.
You can either specify a path to the TypoScript setting or set the `parseFunc`_ options directly.
By default :typoscript:`lib.parseFunc_RTE` is used to parse the string.

The view helper must not be used in backend context, as it triggers frontend logic.
Instead, use :html:`<f:sanitize.html />` to secure a given HTML string or :html:`<f:transform.html />`
to parse links in HTML.

Examples
========

Default parameters
------------------

::

   <f:format.html>{$myConstant.project} is a cool <b>CMS</b> (<a href="https://www.typo3.org">TYPO3</a>).</f:format.html>

Output::

   <p class="bodytext">TYPO3 is a cool <strong>CMS</strong> (<a href="https://www.typo3.org" target="_blank">TYPO3</a>).</p>

Depending on TYPO3 constants.

Custom parseFunc
----------------

::

   <f:format.html parseFuncTSPath="lib.parseFunc">TYPO3 is a cool <b>CMS</b> (<a href="https://www.typo3.org">TYPO3</a>).</f:format.html>

Output::

   TYPO3 is a cool <strong>CMS</strong> (<a href="https://www.typo3.org" target="_blank">TYPO3</a>).

Data argument
--------------

If you work with TypoScript :typoscript:`field` property, you should add the current record as `data`
to the ViewHelper to allow processing the `field` and `dataWrap` properties correctly.

::

   <f:format.html data="{newsRecord}" parseFuncTSPath="lib.news">News title: </f:format.html>

After "dataWrap = |<strong>{FIELD:title}</strong>" you may have this Output::

   News title: <strong>TYPO3, greatest CMS ever</strong>

Current argument
-----------------

Use the `current` argument to set the current value of the content object.

::

   <f:format.html current="{strContent}" parseFuncTSPath="lib.info">I'm gone</f:format.html>

After `setContentToCurrent = 1` you may have this output::

   Thanks Kasper for this great CMS

CurrentValueKey argument
-------------------------

Use the `currentValueKey` argument to define a value of data object as the current value.

::

   <f:format.html data="{contentRecord}" currentValueKey="header" parseFuncTSPath="lib.content">Content: </f:format.html>

After `dataWrap = |{CURRENT:1}` you may have this Output::

   Content: How to install TYPO3 in under 2 minutes ;-)

Inline notation
---------------

::

   {someText -> f:format.html(parseFuncTSPath: 'lib.parseFunc')}

Output::

   TYPO3 is a cool <strong>CMS</strong> (<a href="https://www.typo3.org" target="_blank">TYPO3</a>).

.. _parseFunc: https://docs.typo3.org/m/typo3/reference-typoscript/main/en-us/Functions/Parsefunc.html


.. _typo3-fluid-format-html_arguments:

Arguments
=========


.. _typo3-fluid-format-html-parsefunctspath:

parseFuncTSPath
---------------

:aspect:`DataType`
   string

:aspect:`Default`
   'lib.parseFunc_RTE'

:aspect:`Required`
   false
:aspect:`Description`
   Path to the TypoScript parseFunc setup.

.. _typo3-fluid-format-html-data:

data
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Initialize the content object with this set of data. Either an array or object.

.. _typo3-fluid-format-html-current:

current
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Initialize the content object with this value for current property.

.. _typo3-fluid-format-html-currentvaluekey:

currentValueKey
---------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Define the value key, used to locate the current value for the content object

.. _typo3-fluid-format-html-table:

table
-----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The table name associated with the "data" argument.
