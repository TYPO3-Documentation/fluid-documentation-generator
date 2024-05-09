..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/Mfa/IfHasStateViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/backend/Classes/ViewHelpers/Mfa/IfHasStateViewHelper.php
:navigation-title: mfa.ifHasState
.. include:: /Includes.rst.txt

.. _typo3-backend-mfa-ifhasstate:

====================================================
Mfa.ifHasState ViewHelper `<backend:mfa.ifHasState>`
====================================================

Check if the given provider for the current user has the requested state set

.. _typo3-backend-mfa-ifhasstate_source:

Source code
===========

Go to the source code of this ViewHelper: `IfHasStateViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/Mfa/IfHasStateViewHelper.php>`__.

.. _typo3-backend-mfa-ifhasstate_arguments:

Arguments
=========

The following arguments are available for `<backend:mfa.ifHasState>`:

..  contents::
    :local:


.. _typo3-backend-mfa-ifhasstate-then_argument:

then
----

..  confval:: then
    :name: typo3-backend-mfa-ifhasstate-then
    :type: mixed
    :required: false

    Value to be returned if the condition if met.

.. _typo3-backend-mfa-ifhasstate-else_argument:

else
----

..  confval:: else
    :name: typo3-backend-mfa-ifhasstate-else
    :type: mixed
    :required: false

    Value to be returned if the condition if not met.

.. _typo3-backend-mfa-ifhasstate-state_argument:

state
-----

..  confval:: state
    :name: typo3-backend-mfa-ifhasstate-state
    :type: string
    :required: true

    The state to check for (e.g. active or locked)

.. _typo3-backend-mfa-ifhasstate-provider_argument:

provider
--------

..  confval:: provider
    :name: typo3-backend-mfa-ifhasstate-provider
    :type: mixed
    :required: true

    The provider in question