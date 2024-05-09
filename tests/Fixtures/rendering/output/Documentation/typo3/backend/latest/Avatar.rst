..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/AvatarViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/backend/Classes/ViewHelpers/AvatarViewHelper.php
:navigation-title: avatar
.. include:: /Includes.rst.txt

.. _typo3-backend-avatar:

====================================
Avatar ViewHelper `<backend:avatar>`
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

.. _typo3-backend-avatar_source:

Source code
===========

Go to the source code of this ViewHelper: `AvatarViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/AvatarViewHelper.php>`__.

.. _typo3-backend-avatar_arguments:

Arguments
=========

The following arguments are available for `<backend:avatar>`:

..  contents::
    :local:


.. _typo3-backend-avatar-backenduser_argument:

backendUser
-----------

..  confval:: backendUser
    :name: typo3-backend-avatar-backenduser
    :type: mixed
    :required: false

    Uid of the backend user

.. _typo3-backend-avatar-size_argument:

size
----

..  confval:: size
    :name: typo3-backend-avatar-size
    :type: mixed
    :Default: 32
    :required: false

    Width and height of the image

.. _typo3-backend-avatar-showicon_argument:

showIcon
--------

..  confval:: showIcon
    :name: typo3-backend-avatar-showicon
    :type: boolean
    :required: false

    Show the record icon as well
