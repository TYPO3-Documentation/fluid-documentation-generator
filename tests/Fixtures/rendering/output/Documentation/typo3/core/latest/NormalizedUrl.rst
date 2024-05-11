..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/core/Classes/ViewHelpers/NormalizedUrlViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/core/Classes/ViewHelpers/NormalizedUrlViewHelper.php
:navigation-title: normalizedUrl
.. include:: /Includes.rst.txt

.. _typo3-core-normalizedurl:

===============================================
NormalizedUrl ViewHelper `<core:normalizedUrl>`
===============================================

..  note::
    This ViewHelper is not available by default.

    :ref:`Import its namespace <t3coreapi:fluid-syntax-viewhelpers-import-namespaces>`
    :fluid:`{namespace core=TYPO3\CMS\Core\ViewHelpers\}` in the Fluid file or
    :fluid:`xmlns:core="http://typo3.org/ns/TYPO3/CMS/Core/ViewHelpers/"` in the opening HTML tag.


Normalizes a path that uses EXT: syntax or an absolute URL to an absolute web path

Examples
========

Url::

   <core:normalizedUrl pathOrUrl="https://foo.bar/img.jpg" />

Output::

    https://foo.bar/img.jpg

Path::

   <core:normalizedUrl pathOrUrl="EXT:core/Resources/Public/Images/typo3_black.svg" />

Output::

    /typo3/sysext/core/Resources/Public/Images/typo3_black.svg

.. _typo3-core-normalizedurl_source:

Source code
===========

Go to the source code of this ViewHelper: `NormalizedUrlViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/core/Classes/ViewHelpers/NormalizedUrlViewHelper.php>`__.

.. _typo3-core-normalizedurl_arguments:

Arguments
=========

The following arguments are available for `<core:normalizedUrl>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3-core-normalizedurl-pathorurl_argument:

..  confval:: pathOrUrl
    :name: typo3-core-normalizedurl-pathorurl
    :type: string
    :required: false

    Absolute path to file using EXT: syntax or URL.
