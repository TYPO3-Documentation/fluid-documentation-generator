..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Security/NonceViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Security/NonceViewHelper.php
:navigation-title: security.nonce
.. include:: /Includes.rst.txt

.. _typo3-fluid-security-nonce:

==============================================
Security.nonce ViewHelper `<f:security.nonce>`
==============================================



This ViewHelper resolves the `nonce` attribute from the global server request object,
or from the `PolicyProvider` service as a fall-back value.

Examples
========

Basic usage
-----------

::

   <script nonce="{f:security.nonce()}">const inline = 'script';</script>

.. _typo3-fluid-security-nonce_source:

Source code
===========

Go to the source code of this ViewHelper: `NonceViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Security/NonceViewHelper.php>`__.

..  note:: `<f:security.nonce>` has no arguments.
