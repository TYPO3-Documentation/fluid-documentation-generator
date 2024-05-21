..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/Mfa/IfHasStateViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/backend/Classes/ViewHelpers/Mfa/IfHasStateViewHelper.php
:navigation-title: mfa.ifHasState

.. include:: /Includes.rst.txt

.. _typo3-backend-mfa-ifhasstate:

===============================================
Mfa.ifHasState ViewHelper `<be:mfa.ifHasState>`
===============================================

..  note::
    This ViewHelper is not available by default.

    :ref:`Import its namespace <t3coreapi:fluid-syntax-viewhelpers-import-namespaces>`
    :fluid:`{namespace be=TYPO3\CMS\Backend\ViewHelpers\}` in the Fluid file or
    :fluid:`xmlns:be="http://typo3.org/ns/TYPO3/CMS/Backend/ViewHelpers/"` in the opening HTML tag.


Check if the given provider for the current user has the requested state set

.. _typo3-backend-mfa-ifhasstate_source:

Source code
===========

Go to the source code of this ViewHelper: `IfHasStateViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/backend/Classes/ViewHelpers/Mfa/IfHasStateViewHelper.php>`__.

.. _typo3-backend-mfa-ifhasstate_arguments:

Arguments
=========

The following arguments are available for `<be:mfa.ifHasState>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3-backend-mfa-ifhasstate-then_argument:

..  confval:: then
    :name: typo3-backend-mfa-ifhasstate-then
    :type: mixed
    :required: false

    Value to be returned if the condition if met.

.. _typo3-backend-mfa-ifhasstate-else_argument:

..  confval:: else
    :name: typo3-backend-mfa-ifhasstate-else
    :type: mixed
    :required: false

    Value to be returned if the condition if not met.

.. _typo3-backend-mfa-ifhasstate-state_argument:

..  confval:: state
    :name: typo3-backend-mfa-ifhasstate-state
    :type: string
    :required: true

    The state to check for (e.g. active or locked)

.. _typo3-backend-mfa-ifhasstate-provider_argument:

..  confval:: provider
    :name: typo3-backend-mfa-ifhasstate-provider
    :type: mixed
    :required: true

    The provider in question
