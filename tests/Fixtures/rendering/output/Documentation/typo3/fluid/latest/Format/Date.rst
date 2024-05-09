..  This reStructured text file has been automatically generated, do not change.
..  Source: https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Format/DateViewHelper.php

:edit-on-github-link: https://github.com/TYPO3/typo3/edit/main/typo3/sysext/fluid/Classes/ViewHelpers/Format/DateViewHelper.php
:navigation-title: format.date
.. include:: /Includes.rst.txt

.. _typo3-fluid-format-date:

========================================
Format.date ViewHelper `<f:format.date>`
========================================

Formats an object implementing :php:`\DateTimeInterface`.

Possible date/time formats can be found in the PHP documentation:
https://www.php.net/manual/datetime.format.php

Examples
========

Defaults
--------

::

   <f:format.date>{dateObject}</f:format.date>

``1980-12-13``
Depending on the current date.

Custom date format
------------------

::

   <f:format.date format="H:i">{dateObject}</f:format.date>

``01:23``
Depending on the current time.

Relative date with given time
-----------------------------

::

   <f:format.date format="Y" base="{dateObject}">-1 year</f:format.date>

``2016``
Assuming dateObject is in 2017.

strtotime string
----------------

::

   <f:format.date format="d.m.Y - H:i:s">+1 week 2 days 4 hours 2 seconds</f:format.date>

``13.12.1980 - 21:03:42``
Depending on the current time, see https://www.php.net/manual/function.strtotime.php.

Localized dates using strftime date format
------------------------------------------

::

   <f:format.date format="%d. %B %Y">{dateObject}</f:format.date>

``13. Dezember 1980``
Depending on the current date and defined locale. In the example you see the 1980-12-13 in a german locale.

Localized dates using ICU-based date and time formatting
--------------------------------------------------------

::

   <f:format.date pattern="dd. MMMM yyyy" locale="de-DE">{dateObject}</f:format.date>

``13. Dezember 1980``
Depending on the current date. In the example you see the 1980-12-13 in a german locale.

Localized dates using default formatting patterns
-------------------------------------------------

::

   <f:format.date pattern="FULL" locale="fr-FR">{dateObject}</f:format.date>

``jeudi 9 mars 2023  21:40:49 temps universel coordonn``
Depending on the current date and operating system setting. In the example you see the 2023-03-09 in a french locale.

Inline notation
---------------

::

   {f:format.date(date: dateObject)}

``1980-12-13``
Depending on the value of ``{dateObject}``.

Inline notation (2nd variant)
-----------------------------

::

   {dateObject -> f:format.date()}

``1980-12-13``
Depending on the value of ``{dateObject}``.

.. _typo3-fluid-format-date_source:

Source code
===========

Go to the source code of this ViewHelper: `DateViewHelper.php (GitHub) <https://github.com/TYPO3/typo3/blob/main/typo3/sysext/fluid/Classes/ViewHelpers/Format/DateViewHelper.php>`__.

.. _typo3-fluid-format-date_arguments:

Arguments
=========

The following arguments are available for `<f:format.date>`:

..  contents::
    :local:


.. _typo3-fluid-format-date-date_argument:

date
----

..  confval:: date
    :name: typo3-fluid-format-date-date
    :type: mixed
    :required: false

    Either an object implementing DateTimeInterface or a string that is accepted by DateTime constructor

.. _typo3-fluid-format-date-format_argument:

format
------

..  confval:: format
    :name: typo3-fluid-format-date-format
    :type: string
    :required: false

    Format String which is taken to format the Date/Time

.. _typo3-fluid-format-date-pattern_argument:

pattern
-------

..  confval:: pattern
    :name: typo3-fluid-format-date-pattern
    :type: string
    :required: false

    Format date based on unicode ICO format pattern given see https://unicode-org.github.io/icu/userguide/format_parse/datetime/#datetime-format-syntax. If both "pattern" and "format" arguments are given, pattern will be used.

.. _typo3-fluid-format-date-locale_argument:

locale
------

..  confval:: locale
    :name: typo3-fluid-format-date-locale
    :type: string
    :required: false

    A locale format such as "nl-NL" to format the date in a specific locale, if none given, uses the current locale of the current request. Only works when pattern argument is given

.. _typo3-fluid-format-date-base_argument:

base
----

..  confval:: base
    :name: typo3-fluid-format-date-base
    :type: mixed
    :required: false

    A base time (an object implementing DateTimeInterface or a string) used if $date is a relative date specification. Defaults to current time.
