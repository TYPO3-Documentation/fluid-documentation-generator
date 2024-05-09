:navigation-title: form.validationResults
.. include:: /Includes.rst.txt

.. _typo3-fluid-form-validationresults:

==============================================================
form.validationResults ViewHelper `<f:form.validationResults>`
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


.. _typo3-fluid-form-validationresults_arguments:

Arguments
=========


.. _typo3-fluid-form-validationresults-for:

for
---

:aspect:`DataType`
   string

:aspect:`Required`
   false
:aspect:`Description`
   The name of the error name (e.g. argument name or property name). This can also be a property path (like blog.title), and will then only display the validation errors of that property.

.. _typo3-fluid-form-validationresults-as:

as
--

:aspect:`DataType`
   string

:aspect:`Default`
   'validationResults'

:aspect:`Required`
   false
:aspect:`Description`
   The name of the variable to store the current error
