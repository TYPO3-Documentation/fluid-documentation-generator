:navigation-title: cache.warmup
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-cache-warmup:

==========================================
cache.warmup ViewHelper `<f:cache.warmup>`
==========================================


ViewHelper to insert variables which only apply during
cache warmup and only apply if no other variables are
specified for the warmup process.

If a chunk of template code is impossible to compile
without additional variables, for example when rendering
sections or partials using dynamic names, you can use this
ViewHelper around that chunk and specify a set of variables
which will be assigned only while compiling the template
and only when this is done as part of cache warmup. The
template chunk can then be compiled using those default
variables.

This does not imply that only those variable values will
be used by the compiled template. It only means that
DEFAULT values of vital variables will be present during
compiling.

If you find yourself completely unable to properly warm up
a specific template file even with use of this ViewHelper,
then you can consider using
``f:cache.disable`` ViewHelper
to prevent the template compiler from even attempting to
compile it.

USE WITH CARE! SOME EDGE CASES OF FOR EXAMPLE VIEWHELPERS
WHICH REQUIRE SPECIAL VARIABLE TYPES MAY NOT BE SUPPORTED
HERE DUE TO THE RUDIMENTARY NATURE OF VARIABLES YOU DEFINE.

Examples
========

Usage and effect
----------------

::

    <f:cache.warmup variables="{foo: bar}">
       Template code depending on {foo} variable which is not
       assigned when warming up Fluid's caches. {foo} is only
       assigned if the variable does not already exist and the
       assignment only happens if Fluid is in warmup mode.
    </f:cache.warmup>


.. _typo3fluid-fluid-cache-warmup_arguments:

Arguments
=========


.. _typo3fluid-fluid-cache-warmup-variables:

variables
---------

:aspect:`DataType`
   mixed

:aspect:`Default`
   array ()

:aspect:`Required`
   false
:aspect:`Description`
   Array of variables to assign ONLY when compiling. See main class documentation.
