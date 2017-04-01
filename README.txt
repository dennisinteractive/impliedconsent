CONTENTS OF THIS FILE
---------------------

 * Introduction
 * Requirements
 * Installation
 * Configuration

INTRODUCTION
------------
Adds Drupal support to the Implied Consent JavaScript tool. The script
implements an implied consent notice to comply with the UK's implementation of
the EU cookie laws.

REQUIREMENTS
------------
This module requires the following modules:
 * Implied Consent Library (https://github.com/dennisinteractive/implied-consent)

INSTALLATION
------------
 * Install as you would normally install a contributed drupal module.
 * Download the implied consent library by running npm.
   If you do not use npm you can download the JS library by other means and use it by
   overriding the default library using hook_library_info_alter() or in the theme
   info.yml file as follows:

     libraries-override:
       impliedconsent/implied-consent: {your_implied_consent_library}


CONFIGURATION
-------------
 * /admin/config/system/impliedconsent
