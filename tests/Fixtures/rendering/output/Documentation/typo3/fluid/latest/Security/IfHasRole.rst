..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Security/IfHasRoleViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Security/IfHasRoleViewHelper.php
:navigation-title: security.ifHasRole
.. include:: /Includes.rst.txt

.. _typo3-fluid-security-ifhasrole:

======================================================
Security.ifHasRole ViewHelper `<f:security.ifHasRole>`
======================================================



This ViewHelper implements an ifHasRole/else condition for frontend groups.

Examples
========

Basic usage
-----------

::

   <f:security.ifHasRole role="Administrator">
       This is being shown in case the current FE user belongs to a FE usergroup (aka role) titled "Administrator" (case sensitive)
   </f:security.ifHasRole>

Everything inside the :html:`<f:security.ifHasRole>` tag is being displayed if the
logged in frontend user belongs to the specified frontend user group.
Comparison is done by comparing to title of the user groups.

Using the usergroup uid as role identifier
------------------------------------------

::

   <f:security.ifHasRole role="1">
      This is being shown in case the current FE user belongs to a FE usergroup (aka role) with the uid "1"
   </f:security.ifHasRole>

Everything inside the :html:`<f:security.ifHasRole>` tag is being displayed if the
logged in frontend user belongs to the specified role. Comparison is done
using the ``uid`` of frontend user groups.

IfRole / then / else
--------------------

::

   <f:security.ifHasRole role="Administrator">
      <f:then>
         This is being shown in case you have the role.
      </f:then>
      <f:else>
         This is being displayed in case you do not have the role.
      </f:else>
   </f:security.ifHasRole>

Everything inside the :html:`<f:then></f:then>` tag is displayed if the logged in FE user belongs to the specified role.
Otherwise, everything inside the :html:`<f:else></f:else>` tag is displayed.

.. _typo3-fluid-security-ifhasrole_source:

Source code
===========

Go to the source code of this ViewHelper: `IfHasRoleViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Security/IfHasRoleViewHelper.php>`__.

.. _typo3-fluid-security-ifhasrole_arguments:

Arguments
=========

The following arguments are available for `<f:security.ifHasRole>`:

..  confval-menu::
    :display: table
    :type:
    :Default:


.. _typo3-fluid-security-ifhasrole-then_argument:

..  confval:: then
    :name: typo3-fluid-security-ifhasrole-then
    :type: mixed
    :required: false

    Value to be returned if the condition if met.

.. _typo3-fluid-security-ifhasrole-else_argument:

..  confval:: else
    :name: typo3-fluid-security-ifhasrole-else
    :type: mixed
    :required: false

    Value to be returned if the condition if not met.

.. _typo3-fluid-security-ifhasrole-role_argument:

..  confval:: role
    :name: typo3-fluid-security-ifhasrole-role
    :type: string
    :required: false

    The usergroup (either the usergroup uid or its title).
