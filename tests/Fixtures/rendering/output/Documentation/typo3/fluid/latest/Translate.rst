:navigation-title: translate
.. include:: /Includes.rst.txt

.. _typo3-fluid-translate:

====================================
translate ViewHelper `<f:translate>`
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


.. _typo3-fluid-translate_arguments:

Arguments
=========


.. _typo3-fluid-translate-key:

key
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Translation Key

.. _typo3-fluid-translate-id:

id
--

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Translation ID. Same as key.

.. _typo3-fluid-translate-default:

default
-------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   If the given locallang key could not be found, this value is used. If this argument is not set, child nodes will be used to render the default

.. _typo3-fluid-translate-arguments:

arguments
---------

:aspect:`DataType`
   mixed

:aspect:`Required`
   false
:aspect:`Description`
   Arguments to be replaced in the resulting string

.. _typo3-fluid-translate-extensionname:

extensionName
-------------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   UpperCamelCased extension key (for example BlogExample)

.. _typo3-fluid-translate-languagekey:

languageKey
-----------

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   Language key ("da" for example) or "default" to use. Also a Locale object is possible. If empty, use current locale from the request.
