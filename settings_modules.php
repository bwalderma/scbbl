<?php

/*****************
 * Enable/disable modules
 *****************/
 
// Change value from true to false if you wish to disable a module.

$settings['modules_enabled'] = array(
    'IndcPage'           => true, # Inducements try-out
    'PDFroster'          => true, # Team PDF roster
    'RSSfeed'            => true, # Site RSS feed
    'SGraph'             => true, # Graphical statistics
    'Memmatches'         => true, # Memorable matches viewer
    'Wanted'             => true, # Wanted list
    'HOF'                => true, # Hall of fame
    'Prize'              => true, # Tournament prizes list
    'UPLOAD_BOTOCS'      => true, # Allow upload of a BOTOCS match
    'XML_BOTOCS'         => true, # BOTOCS XML export of team
    'Registration'       => true, # Allows users to register on the site.
    'Search'             => true, # Search for coaches and teams.
    'PDFMatchReport'     => true, # Generating PDF forms for tabletop match reports.
);

/*****************
 * Module settings
 *****************/

/*
    Registration
*/

$settings['allow_registration'] = true; // Default is true.
$settings['registration_webmaster'] = "webmaster@example.com"; // Default is "webmaster@example.com".
$settings['lang'] = 'en-GB'; // Default language for registred user.

/* 
    Leegmgr
*/

$settings['leegmgr_enabled'] = true; // Enables upload of BOTOCS LRB5 application match reports.
/* 
    Uploads report to a scheduled match.  The options are [false|true|"strict"]
    - false does not check for scheduled matches
    - true checks for scheduled matches and will create a match if not found
    - "strict" will allow only scheduled matches to be used
*/
$settings['leegmgr_schedule'] = true;
$settings['leegmgr_extrastats'] = true; // Enables the reporting of extra stats and the use of the alternate XSD file.
$settings['leegmgr_cyanide'] = true; // Setting to false here is preferred as this can be set to true in each specific league.
$settings['leegmgr_cyanide_edition'] = 2; // 1 = the first Cyanide edition, 2 = Legendary edition.
$settings['leegmgr_botocs'] = true; // Setting to false here is preferred as this can be set to true in each specific league.

/* 
    PDF roster & PDF match report
*/

$settings['enable_pdf_logos'] = true;

?>