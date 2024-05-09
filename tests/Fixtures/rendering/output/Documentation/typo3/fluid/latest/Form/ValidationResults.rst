..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/ValidationResultsViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/ValidationResultsViewHelper.php
:navigation-title: form.validationResults
.. include:: /Includes.rst.txt

.. _typo3-fluid-form-validationresults:

==============================================================
Form.validationResults ViewHelper `<f:form.validationResults>`
==============================================================



Validation results ViewHelper

Examples
========

Output error messages as a list::

   <f:form.validationResults>
      <f:if condition="{validationResults.flattenedErrors}">
         <ul class="errors">
            <f:for each="{validationResults.flattenedErrors}" as="errors" key="propertyPath">
               <li>{propertyPath}
                  <ul>
                     <f:for each="{errors}" as="error">
                        <li>{error.code}: {error}</li>
                     </f:for>
                  </ul>
               </li>
            </f:for>
         </ul>
      </f:if>
   </f:form.validationResults>

Output::

   <ul class="errors">
      <li>1234567890: Validation errors for argument "newBlog"</li>
   </ul>

Output error messages for a single property::

   <f:form.validationResults for="someProperty">
      <f:if condition="{validationResults.flattenedErrors}">
         <ul class="errors">
            <f:for each="{validationResults.errors}" as="error">
               <li>{error.code}: {error}</li>
            </f:for>
         </ul>
      </f:if>
   </f:form.validationResults>

Output::

   <ul class="errors">
     <li>1234567890: Some error message</li>
   </ul>

.. _typo3-fluid-form-validationresults_source:

Source code
===========

Go to the source code of this ViewHelper: `ValidationResultsViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Form/ValidationResultsViewHelper.php>`__.

.. _typo3-fluid-form-validationresults_arguments:

Arguments
=========

The following arguments are available for `<f:form.validationResults>`:

..  contents::
    :local:


.. _typo3-fluid-form-validationresults-for_argument:

for
---

..  confval:: for
    :name: typo3-fluid-form-validationresults-for
    :type: string
    :required: false

    The name of the error name (e.g. argument name or property name). This can also be a property path (like blog.title), and will then only display the validation errors of that property.

.. _typo3-fluid-form-validationresults-as_argument:

as
--

..  confval:: as
    :name: typo3-fluid-form-validationresults-as
    :type: string
    :Default: 'validationResults'
    :required: false

    The name of the variable to store the current error
