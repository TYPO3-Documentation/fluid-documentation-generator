..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/Security/IfAuthenticatedViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/Security/IfAuthenticatedViewHelper.php
:navigation-title: be.security.ifAuthenticated
.. include:: /Includes.rst.txt

.. _typo3-fluid-be-security-ifauthenticated:

========================================================================
Be.security.ifAuthenticated ViewHelper `<f:be.security.ifAuthenticated>`
========================================================================



This ViewHelper implements an ifAuthenticated/else condition for backend
users and backend groups.

Examples
========

Basic usage::

   <f:be.security.ifAuthenticated>
      This is being shown whenever a BE user is logged in
   </f:be.security.ifAuthenticated>

Everything inside the :html:`<f:be.ifAuthenticated>` tag is being displayed
if the user is authenticated with any backend user account.

IfAuthenticated / then / else::

   <f:be.security.ifAuthenticated>
      <f:then>
         This is being shown in case you have access.
      </f:then>
      <f:else>
         This is being displayed in case you do not have access.
      </f:else>
   </f:be.security.ifAuthenticated>

Everything inside the :html:`<f:then></f:then>` is displayed the backend user is logged in.
:html:`<f:else></f:else>` is displayed if no backend user is logged in.

.. _typo3-fluid-be-security-ifauthenticated_source:

Source code
===========

Go to the source code of this ViewHelper: `IfAuthenticatedViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/Security/IfAuthenticatedViewHelper.php>`__.

.. _typo3-fluid-be-security-ifauthenticated_arguments:

Arguments
=========

The following arguments are available for `<f:be.security.ifAuthenticated>`:

..  contents::
    :local:


.. _typo3-fluid-be-security-ifauthenticated-then_argument:

then
----

..  confval:: then
    :name: typo3-fluid-be-security-ifauthenticated-then
    :type: mixed
    :required: false

    Value to be returned if the condition if met.

.. _typo3-fluid-be-security-ifauthenticated-else_argument:

else
----

..  confval:: else
    :name: typo3-fluid-be-security-ifauthenticated-else
    :type: mixed
    :required: false

    Value to be returned if the condition if not met.
