:navigation-title: security.ifAuthenticated
.. include:: /Includes.rst.txt

.. _typo3-fluid-security-ifauthenticated:

==================================================================
security.ifAuthenticated ViewHelper `<f:security.ifAuthenticated>`
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


.. _typo3-fluid-security-ifauthenticated_arguments:

Arguments
=========


.. _typo3-fluid-security-ifauthenticated-then:

then
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Value to be returned if the condition if met.

.. _typo3-fluid-security-ifauthenticated-else:

else
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Value to be returned if the condition if not met.
