:navigation-title: security.nonce
.. include:: /Includes.rst.txt

.. _typo3-fluid-security-nonce:

==============================================
security.nonce ViewHelper `<f:security.nonce>`
==============================================


This ViewHelper resolves the `nonce` attribute from the global server request object,
or from the `PolicyProvider` service as a fall-back value.

Examples
========

Basic usage
-----------

::

   <script nonce="{f:security.nonce()}">const inline = 'script';</script>


.. _typo3-fluid-security-nonce_arguments:

Arguments
=========


This ViewHelper has no arguments.
