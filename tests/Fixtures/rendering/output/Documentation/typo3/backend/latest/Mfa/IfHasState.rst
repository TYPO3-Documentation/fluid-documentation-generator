:navigation-title: mfa.ifHasState
.. include:: /Includes.rst.txt

.. _typo3-backend-mfa-ifhasstate:

====================================================
mfa.ifHasState ViewHelper `<backend:mfa.ifHasState>`
====================================================


Check if the given provider for the current user has the requested state set


.. _typo3-backend-mfa-ifhasstate_arguments:

Arguments
=========


.. _typo3-backend-mfa-ifhasstate-then:

then
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Value to be returned if the condition if met.

.. _typo3-backend-mfa-ifhasstate-else:

else
----

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Value to be returned if the condition if not met.

.. _typo3-backend-mfa-ifhasstate-state:

state
-----

:aspect:`DataType`
   string

:aspect:`Required`
   true
:aspect:`Description`
   The state to check for (e.g. active or locked)

.. _typo3-backend-mfa-ifhasstate-provider:

provider
--------

:aspect:`DataType`
   mixed

:aspect:`Required`
   true
:aspect:`Description`
   The provider in question
