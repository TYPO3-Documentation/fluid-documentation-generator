..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/InlineViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/tree/main/src/ViewHelpers/InlineViewHelper.php
:navigation-title: inline
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-inline:

==============================
Inline ViewHelper `<f:inline>`
==============================

Inline Fluid rendering ViewHelper

Renders Fluid code stored in a variable, which you normally would
have to render before assigning it to the view. Instead you can
do the following (note, extremely simplified use case)::

     $view->assign('variable', 'value of my variable');
     $view->assign('code', 'My variable: {variable}');

And in the template::

     {code -> f:inline()}

Which outputs::

     My variable: value of my variable

You can use this to pass smaller and dynamic pieces of Fluid code
to templates, as an alternative to creating new partial templates.

.. _typo3fluid-fluid-inline_source:

Source code
===========

Go to the source code of this ViewHelper: `InlineViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/InlineViewHelper.php>`__.

.. _typo3fluid-fluid-inline_arguments:

Arguments
=========

The following arguments are available for `<f:inline>`:

..  contents::
    :local:


.. _typo3fluid-fluid-inline-code_argument:

code
----

..  confval:: code
    :name: typo3fluid-fluid-inline-code
    :type: string
    :required: false

    Fluid code to be rendered as if it were part of the template rendering it. Can be passed as inline argument or tag content
