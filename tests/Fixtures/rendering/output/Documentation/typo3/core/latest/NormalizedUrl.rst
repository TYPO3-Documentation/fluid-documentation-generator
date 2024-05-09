:navigation-title: normalizedUrl
.. include:: /Includes.rst.txt

.. _typo3-core-normalizedurl:

===============================================
normalizedUrl ViewHelper `<core:normalizedUrl>`
===============================================


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


.. _typo3-core-normalizedurl_arguments:

Arguments
=========


.. _typo3-core-normalizedurl-pathorurl:

pathOrUrl
---------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Absolute path to file using EXT: syntax or URL.
