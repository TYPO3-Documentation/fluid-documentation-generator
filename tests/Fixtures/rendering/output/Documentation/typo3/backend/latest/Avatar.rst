:navigation-title: avatar
.. include:: /Includes.rst.txt

.. _typo3-backend-avatar:

====================================
avatar ViewHelper `<backend:avatar>`
====================================


Render the avatar markup, including the :html:`<img>` tag, for a given backend user.

Examples
========

Default
-------

::

   <be:avatar backendUser="{user.uid}" size="32" showIcon="true" />

Output::

   <span class="avatar">
       <span class="avatar-image">
           <img src="/typo3/sysext/core/Resources/Public/Icons/T3Icons/avatar/svgs/avatar-default.svg" width="32" height="32" alt="" />
       </span>
   </span>

If the given backend user hasn't added a custom avatar yet, a default one is used.

Inline notation
---------------

::

   {be:avatar(backendUser: user.id, size: 32, showIcon: 'true')}

Output::

   <span class="avatar">
       <span class="avatar-image">
           <img src="/fileadmin/_processed_/7/9/csm_custom-avatar_4ea4a18f58.jpg" width="32" height="32" alt="" />
       </span>
   </span>


.. _typo3-backend-avatar_arguments:

Arguments
=========


.. _typo3-backend-avatar-backenduser:

backendUser
-----------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Uid of the backend user

.. _typo3-backend-avatar-size:

size
----

:aspect:`DataType`
   mixed

:aspect:`Default`
   32

:aspect:`Required`
   false
:aspect:`Description`
   Width and height of the image

.. _typo3-backend-avatar-showicon:

showIcon
--------

:aspect:`DataType`
   boolean

:aspect:`Required`
   false
:aspect:`Description`
   Show the record icon as well
