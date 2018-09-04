CONTENTS OF THIS FILE
---------------------

 * Introduction
 * Installation
 * Library
 * Configuration

INTRODUCTION
------------
Adds Drupal support to the Implied Consent JavaScript tool. The script
implements an implied consent notice to comply with the UK's implementation of
the EU cookie laws.

INSTALLATION
------------
 * Install as you would normally install a contributed drupal module.

LIBRARY
-------
This module uses the Implied Consent javascript library (https://github.com/dennisinteractive/implied-consent)
but comes bundled with it already built.
 * If you would like to use a different version than the bunldes one, run "npm install" in the module directory.
 * If you would like to use a different version but do not use npm,
   you can download the JS library by other means and use it by
   overriding the default library using hook_library_info_alter() or in the theme
   info.yml file as follows:

     libraries-override:
       impliedconsent/implied-consent: {your_implied_consent_library}


CONFIGURATION
-------------
 * /admin/config/system/impliedconsent
