:navigation-title: security.ifHasRole
.. include:: /Includes.rst.txt

.. _typo3-fluid-security-ifhasrole:

======================================================
security.ifHasRole ViewHelper `<f:security.ifHasRole>`
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


.. _typo3-fluid-security-ifhasrole_arguments:

Arguments
=========


.. _typo3-fluid-security-ifhasrole-then:

then
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Value to be returned if the condition if met.

.. _typo3-fluid-security-ifhasrole-else:

else
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Value to be returned if the condition if not met.

.. _typo3-fluid-security-ifhasrole-role:

role
----

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The usergroup (either the usergroup uid or its title).
