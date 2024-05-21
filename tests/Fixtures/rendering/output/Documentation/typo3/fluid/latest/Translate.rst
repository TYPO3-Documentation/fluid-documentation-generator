..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/TranslateViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/TranslateViewHelper.php
:navigation-title: translate

.. include:: /Includes.rst.txt

.. _typo3-fluid-translate:

====================================
Translate ViewHelper `<f:translate>`
====================================



Translate a key from locallang. The files are loaded from the folder
:file:`Resources/Private/Language/`.

Examples
========

Translate key
-------------

::

   <f:translate key="key1" />

Value of key ``key1`` in the current website language. Alternatively id can
be used instead of key::

   <f:translate id="key1" />

This will output the same as above. If both id and key are set, id will take precedence.

Keep HTML tags
--------------

::

   <f:format.raw><f:translate key="htmlKey" /></f:format.raw>

Value of key ``htmlKey`` in the current website language, no :php:`htmlspecialchars()` applied.

Translate key from custom locallang file
----------------------------------------

::

   <f:translate key="key1" extensionName="MyExt"/>

or

::

   <f:translate key="LLL:EXT:myext/Resources/Private/Language/locallang.xlf:key1" />

Value of key ``key1`` in the current website language.

Inline notation with arguments and default value
------------------------------------------------

::

   {f:translate(key: 'someKey', arguments: {0: 'dog', 1: 'fox'}, default: 'default value')}

Value of key ``someKey`` in the current website language
with the given arguments (dog and fox) assigned for the specified
``%s`` conversions (:php:`sprintf()`) in the language file::

   <trans-unit id="someKey" resname="someKey">
       <source>Some text about a %s and a %s.</source>
   </trans-unit>

The output will be "Some text about a dog and a fox".

If the key ``someKey`` is not found in the language file, the output is default value.

Inline notation with extension name
-----------------------------------

::

   {f:translate(key: 'someKey', extensionName: 'SomeExtensionName')}

Value of key ``someKey`` in the current website language.
The locallang file of extension "some_extension_name" will be used.

.. _typo3-fluid-translate_source:

Source code
===========

Go to the source code of this ViewHelper: `TranslateViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/TranslateViewHelper.php>`__.

.. _typo3-fluid-translate_arguments:

Arguments
=========

The following arguments are available for `<f:translate>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3-fluid-translate-key_argument:

..  confval:: key
    :name: typo3-fluid-translate-key
    :type: string
    :required: false

    Translation Key

.. _typo3-fluid-translate-id_argument:

..  confval:: id
    :name: typo3-fluid-translate-id
    :type: string
    :required: false

    Translation ID. Same as key.

.. _typo3-fluid-translate-default_argument:

..  confval:: default
    :name: typo3-fluid-translate-default
    :type: string
    :required: false

    If the given locallang key could not be found, this value is used. If this argument is not set, child nodes will be used to render the default

.. _typo3-fluid-translate-arguments_argument:

..  confval:: arguments
    :name: typo3-fluid-translate-arguments
    :type: mixed
    :required: false

    Arguments to be replaced in the resulting string

.. _typo3-fluid-translate-extensionname_argument:

..  confval:: extensionName
    :name: typo3-fluid-translate-extensionname
    :type: string
    :required: false

    UpperCamelCased extension key (for example BlogExample)

.. _typo3-fluid-translate-languagekey_argument:

..  confval:: languageKey
    :name: typo3-fluid-translate-languagekey
    :type: string
    :required: false

    Language key ("da" for example) or "default" to use. Also a Locale object is possible. If empty, use current locale from the request.
