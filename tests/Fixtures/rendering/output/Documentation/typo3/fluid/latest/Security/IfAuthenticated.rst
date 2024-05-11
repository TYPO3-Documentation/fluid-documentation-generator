..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Security/IfAuthenticatedViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Security/IfAuthenticatedViewHelper.php
:navigation-title: security.ifAuthenticated
.. include:: /Includes.rst.txt

.. _typo3-fluid-security-ifauthenticated:

==================================================================
Security.ifAuthenticated ViewHelper `<f:security.ifAuthenticated>`
==================================================================



This ViewHelper implements an ifAuthenticated/else condition for frontend users.

Examples
========

Basic usage
-----------

::

   <f:security.ifAuthenticated>
      This is being shown whenever a FE user is logged in
   </f:security.ifAuthenticated>

Everything inside the :html:`<f:security.ifAuthenticated>` tag is being displayed if
current frontend user is authenticated.

IfAuthenticated / then / else
-----------------------------

::

   <f:security.ifAuthenticated>
      <f:then>
         This is being shown in case you have access.
      </f:then>
      <f:else>
         This is being displayed in case you do not have access.
      </f:else>
   </f:security.ifAuthenticated>

Everything inside the :html:`<f:then></f:then>` tag is displayed if frontend user is authenticated.
Otherwise, everything inside the :html:`<f:else></f:else>` tag is displayed.

.. _typo3-fluid-security-ifauthenticated_source:

Source code
===========

Go to the source code of this ViewHelper: `IfAuthenticatedViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Security/IfAuthenticatedViewHelper.php>`__.

.. _typo3-fluid-security-ifauthenticated_arguments:

Arguments
=========

The following arguments are available for `<f:security.ifAuthenticated>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3-fluid-security-ifauthenticated-then_argument:

..  confval:: then
    :name: typo3-fluid-security-ifauthenticated-then
    :type: mixed
    :required: false

    Value to be returned if the condition if met.

.. _typo3-fluid-security-ifauthenticated-else_argument:

..  confval:: else
    :name: typo3-fluid-security-ifauthenticated-else
    :type: mixed
    :required: false

    Value to be returned if the condition if not met.
