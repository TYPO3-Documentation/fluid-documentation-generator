..  This reStructured text file has been automatically generated, do not change.
..  Source: {source}

:edit-on-github-link: {sourceEdit}
:navigation-title: {viewHelper.name -> f:format.raw()}
.. include:: /Includes.rst.txt

.. _{headlineIdentifier}:

{headlineDecoration}
<f:format.raw>{headline}</f:format.raw>
{headlineDecoration}

{viewHelper.descriptionAsRst -> f:format.raw()}

.. _{headlineIdentifier}_source:

Source code
===========

Go to the source code of this ViewHelper: `<f:format.raw>{phpFileName}</f:format.raw> (GitHub) <{source}>`__.

<f:spaceless>
<f:if condition="{arguments -> f:count()} == 0">
<f:then>..  note:: `<f:format.raw>{tagName}</f:format.raw>` has no arguments.</f:then>

<f:else>
.. _{headlineIdentifier}_arguments:

Arguments
=========

The following arguments are available for `<f:format.raw>{tagName}</f:format.raw>`:

..  contents::
    :local:

<f:for each="{arguments}" as="argumentData">
.. _{argumentData.headlineIdentifier}_argument:

{argumentData.headline}
{argumentData.headlineDecoration}

..  confval:: {argumentData.headline}
    :name: {argumentData.headlineIdentifier}
<f:if condition="{argumentData.dataType}">    :type: {argumentData.dataType}
</f:if><f:if condition="{argumentData.default}">    :Default: {argumentData.default -> f:format.raw()}
</f:if>    :required: {argumentData.isRequired ? 'true' : 'false'}

    {argumentData.description -> f:format.raw()}
</f:for>
</f:else>
</f:if>
</f:spaceless>
