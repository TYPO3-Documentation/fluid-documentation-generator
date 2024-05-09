..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/Security/IfHasRoleViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/Security/IfHasRoleViewHelper.php
:navigation-title: be.security.ifHasRole
.. include:: /Includes.rst.txt

.. _typo3-fluid-be-security-ifhasrole:

============================================================
Be.security.ifHasRole ViewHelper `<f:be.security.ifHasRole>`
============================================================

This ViewHelper implements an ifHasRole/else condition for backend users
and backend groups.

Role refers to backend user groups. The :html:`role` attribute can either be
the title of a group, or the uid.

Examples
========

Basic usage::

   <f:be.security.ifHasRole role="Administrator">
      This is being shown in case the current BE user belongs to a BE usergroup (aka role) titled "Administrator" (case sensitive)
   </f:be.security.ifHasRole>

Everything inside the :html:`<f:ifHasRole>` tag is being displayed if the
logged in backend user belongs to the specified backend group.

Using the usergroup uid as role identifier::

   <f:be.security.ifHasRole role="1">
      This is being shown in case the current BE user belongs to a BE usergroup (aka role) with the uid "1"
   </f:be.security.ifHasRole>

Everything inside the :html:`<f:ifHasRole>` tag is being displayed if the
logged in backend user belongs to the specified backend group.

IfRole / then / else::

   <f:be.security.ifHasRole role="Administrator">
      <f:then>
         This is being shown in case you have the role.
      </f:then>
      <f:else>
         This is being displayed in case you do not have the role.
      </f:else>
   </f:be.security.ifHasRole>

Everything inside the :html:`<f:then></f:then>` tag is displayed if the
logged in backend user belongs to the specified backend group.
Otherwise, everything inside the :html:`<f:else></f:else>` tag is displayed.

.. _typo3-fluid-be-security-ifhasrole_source:

Source code
===========

Go to the source code of this ViewHelper: `IfHasRoleViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Be/Security/IfHasRoleViewHelper.php>`__.

.. _typo3-fluid-be-security-ifhasrole_arguments:

Arguments
=========

The following arguments are available for `<f:be.security.ifHasRole>`:

..  contents::
    :local:


.. _typo3-fluid-be-security-ifhasrole-then_argument:

then
----

..  confval:: then
    :name: typo3-fluid-be-security-ifhasrole-then
    :type: mixed
    :required: false

    Value to be returned if the condition if met.

.. _typo3-fluid-be-security-ifhasrole-else_argument:

else
----

..  confval:: else
    :name: typo3-fluid-be-security-ifhasrole-else
    :type: mixed
    :required: false

    Value to be returned if the condition if not met.

.. _typo3-fluid-be-security-ifhasrole-role_argument:

role
----

..  confval:: role
    :name: typo3-fluid-be-security-ifhasrole-role
    :type: string
    :required: false

    The usergroup (either the usergroup uid or its title).
