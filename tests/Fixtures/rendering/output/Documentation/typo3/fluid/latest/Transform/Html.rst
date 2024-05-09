:navigation-title: transform.html
.. include:: /Includes.rst.txt

.. _typo3-fluid-transform-html:

==============================================
transform.html ViewHelper `<f:transform.html>`
==============================================


Transforms HTML and substitutes internal link scheme aspects.

Examples
========

Default parameters
------------------

::

   <f:transform.html selector="a.href" onFailure="removeEnclosure">
     <a href="t3://page?uid=1" class="home">Home</a>
   </f:transform.html>

Output::

    <a href="https://example.com/home" class="home">Home</a>

Inline notation
---------------

::

   {content -> f:transform.html(selector:'a.href', onFailure:'removeEnclosure')}


.. _typo3-fluid-transform-html_arguments:

Arguments
=========


.. _typo3-fluid-transform-html-selector:

selector
--------

:aspect:`DataType`
   string

:aspect:`Default`
   'a.href'

:aspect:`Required`
   false
:aspect:`Description`
   Comma separated list of node attributes to be considered

.. _typo3-fluid-transform-html-onfailure:

onFailure
---------

:aspect:`DataType`
   string

:aspect:`Default`
   'removeEnclosure'

:aspect:`Required`
   false
:aspect:`Description`
   Behavior on failure, either `removeTag`, `removeAttr`, `removeEnclosure` or `null`
