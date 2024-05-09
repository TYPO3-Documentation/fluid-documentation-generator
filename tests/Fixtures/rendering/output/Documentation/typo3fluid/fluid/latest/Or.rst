:navigation-title: or
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-or:

======================
or ViewHelper `<f:or>`
======================


Or ViewHelper

If content is null use alternative text.

Usage of f:or
=============

::

    {f:variable(name:'fallback',value:'this is not the variable you\'re looking for')}
    {undefinedVariable -> f:or(alternative:fallback)}

Usage of ternary operator
=========================

In some cases (e.g. when you want to check for empty instead of null)
it might be more handy to use a ternary operator instead of f:or

::

    {emptyVariable ?: 'this is an alterative text'}


.. _typo3fluid-fluid-or_arguments:

Arguments
=========


.. _typo3fluid-fluid-or-content:

content
-------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Content to check if null

.. _typo3fluid-fluid-or-alternative:

alternative
-----------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Alternative if content is null

.. _typo3fluid-fluid-or-arguments:

arguments
---------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Arguments to be replaced in the resulting string, using sprintf
