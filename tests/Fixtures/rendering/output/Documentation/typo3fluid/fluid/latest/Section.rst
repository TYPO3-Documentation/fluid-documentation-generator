..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/SectionViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/Fluid/edit/tree/main/src/ViewHelpers/SectionViewHelper.php
:navigation-title: section
.. include:: /Includes.rst.txt

.. _typo3fluid-fluid-section:

================================
Section ViewHelper `<f:section>`
================================

A ViewHelper to declare sections in templates for later use with e.g. the ``f:render`` ViewHelper.

Examples
========

Rendering sections
------------------

::

    <f:section name="someSection">This is a section. {foo}</f:section>
    <f:render section="someSection" arguments="{foo: someVariable}" />

Output::

    the content of the section "someSection". The content of the variable {someVariable} will be available in the partial as {foo}

Rendering recursive sections
----------------------------

::

    <f:section name="mySection">
       <ul>
            <f:for each="{myMenu}" as="menuItem">
                 <li>
                   {menuItem.text}
                   <f:if condition="{menuItem.subItems}">
                       <f:render section="mySection" arguments="{myMenu: menuItem.subItems}" />
                   </f:if>
                 </li>
            </f:for>
       </ul>
    </f:section>
    <f:render section="mySection" arguments="{myMenu: menu}" />

Output::

    <ul>
        <li>menu1
            <ul>
                <li>menu1a</li>
                <li>menu1b</li>
            </ul>
        </li>
    [...]
    (depending on the value of {menu})

.. _typo3fluid-fluid-section_source:

Source code
===========

Go to the source code of this ViewHelper: `SectionViewHelper.php (GitHub) <https://github.com/TYPO3/Fluid/blob/main/src/ViewHelpers/SectionViewHelper.php>`__.

.. _typo3fluid-fluid-section_arguments:

Arguments
=========

The following arguments are available for `<f:section>`:

..  contents::
    :local:


.. _typo3fluid-fluid-section-name_argument:

name
----

..  confval:: name
    :name: typo3fluid-fluid-section-name
    :type: string
    :required: true

    Name of the section
