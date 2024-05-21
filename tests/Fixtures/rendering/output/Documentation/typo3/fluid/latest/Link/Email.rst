..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Link/EmailViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Link/EmailViewHelper.php
:navigation-title: link.email

.. include:: /Includes.rst.txt

.. _typo3-fluid-link-email:

======================================
Link.email ViewHelper `<f:link.email>`
======================================



Email link ViewHelper.
Generates an email link incorporating TYPO3s `spamProtectEmailAddresses`_ TypoScript setting.

.. _spamProtectEmailAddresses: https://docs.typo3.org/m/typo3/reference-typoscript/main/en-us/Setup/Config/Index.html#spamprotectemailaddresses

Examples
========

Basic email link
----------------

::

   <f:link.email email="foo@bar.tld" />

Output::

   <a href="#" data-mailto-token="ocknvq,hqqBdct0vnf" data-mailto-vector="1">foo(at)bar.tld</a>

Depending on `spamProtectEmailAddresses`_ setting.

Email link with custom linktext
-------------------------------

::

   <f:link.email email="foo@bar.tld">some custom content</f:link.email>

Output::


Email link with custom subject and prefilled cc
-----------------------------------------------

::

   <f:link.email email="foo@bar.tld" subject="Check out this website" cc="foo@example.com"">some custom content</f:link.email>

Output::

   <a href="mailto:foo@bar.tld?subject=Check%20out%20this%20website&amp;cc=foo%40example.com">some custom content</a>

Depending on `spamProtectEmailAddresses`_ setting.

.. _typo3-fluid-link-email_source:

Source code
===========

Go to the source code of this ViewHelper: `EmailViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Link/EmailViewHelper.php>`__.

.. _typo3-fluid-link-email_arguments:

Arguments
=========

The following arguments are available for `<f:link.email>`:

..  confval-menu::
    :display: table
    :type:
    :default:


.. _typo3-fluid-link-email-additionalattributes_argument:

..  confval:: additionalAttributes
    :name: typo3-fluid-link-email-additionalattributes
    :type: mixed
    :required: false

    Additional tag attributes. They will be added directly to the resulting HTML tag.

.. _typo3-fluid-link-email-data_argument:

..  confval:: data
    :name: typo3-fluid-link-email-data
    :type: mixed
    :required: false

    Additional data-* attributes. They will each be added with a "data-" prefix.

.. _typo3-fluid-link-email-aria_argument:

..  confval:: aria
    :name: typo3-fluid-link-email-aria
    :type: mixed
    :required: false

    Additional aria-* attributes. They will each be added with a "aria-" prefix.

.. _typo3-fluid-link-email-email_argument:

..  confval:: email
    :name: typo3-fluid-link-email-email
    :type: string
    :required: true

    The email address to be turned into a link

.. _typo3-fluid-link-email-cc_argument:

..  confval:: cc
    :name: typo3-fluid-link-email-cc
    :type: string
    :required: false

    The email address(es) for CC of the email link

.. _typo3-fluid-link-email-bcc_argument:

..  confval:: bcc
    :name: typo3-fluid-link-email-bcc
    :type: string
    :required: false

    The email address(es) for BCC of the email link

.. _typo3-fluid-link-email-subject_argument:

..  confval:: subject
    :name: typo3-fluid-link-email-subject
    :type: string
    :required: false

    A prefilled subject for the email link

.. _typo3-fluid-link-email-body_argument:

..  confval:: body
    :name: typo3-fluid-link-email-body
    :type: string
    :required: false

    A prefilled body for the email link

.. _typo3-fluid-link-email-class_argument:

..  confval:: class
    :name: typo3-fluid-link-email-class
    :type: string
    :required: false

    CSS class(es) for this element

.. _typo3-fluid-link-email-dir_argument:

..  confval:: dir
    :name: typo3-fluid-link-email-dir
    :type: string
    :required: false

    Text direction for this HTML element. Allowed strings: "ltr" (left to right), "rtl" (right to left)

.. _typo3-fluid-link-email-id_argument:

..  confval:: id
    :name: typo3-fluid-link-email-id
    :type: string
    :required: false

    Unique (in this file) identifier for this HTML element.

.. _typo3-fluid-link-email-lang_argument:

..  confval:: lang
    :name: typo3-fluid-link-email-lang
    :type: string
    :required: false

    Language for this element. Use short names specified in RFC 1766

.. _typo3-fluid-link-email-style_argument:

..  confval:: style
    :name: typo3-fluid-link-email-style
    :type: string
    :required: false

    Individual CSS styles for this element

.. _typo3-fluid-link-email-title_argument:

..  confval:: title
    :name: typo3-fluid-link-email-title
    :type: string
    :required: false

    Tooltip text of element

.. _typo3-fluid-link-email-accesskey_argument:

..  confval:: accesskey
    :name: typo3-fluid-link-email-accesskey
    :type: string
    :required: false

    Keyboard shortcut to access this element

.. _typo3-fluid-link-email-tabindex_argument:

..  confval:: tabindex
    :name: typo3-fluid-link-email-tabindex
    :type: integer
    :required: false

    Specifies the tab order of this element

.. _typo3-fluid-link-email-onclick_argument:

..  confval:: onclick
    :name: typo3-fluid-link-email-onclick
    :type: string
    :required: false

    JavaScript evaluated for the onclick event

.. _typo3-fluid-link-email-name_argument:

..  confval:: name
    :name: typo3-fluid-link-email-name
    :type: string
    :required: false

    Specifies the name of an anchor

.. _typo3-fluid-link-email-rel_argument:

..  confval:: rel
    :name: typo3-fluid-link-email-rel
    :type: string
    :required: false

    Specifies the relationship between the current document and the linked document

.. _typo3-fluid-link-email-rev_argument:

..  confval:: rev
    :name: typo3-fluid-link-email-rev
    :type: string
    :required: false

    Specifies the relationship between the linked document and the current document

.. _typo3-fluid-link-email-target_argument:

..  confval:: target
    :name: typo3-fluid-link-email-target
    :type: string
    :required: false

    Specifies where to open the linked document
