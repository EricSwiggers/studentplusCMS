<?php

/**
 * ProcessWire Configuration File
 *
 * Site-specific configuration for ProcessWire
 * 
 * Please see the file /wire/config.php which contains all configuration options you may
 * specify here. Simply copy any of the configuration options from that file and paste
 * them into this file in order to modify them. 
 * 
 * SECURITY NOTICE
 * In non-dedicated environments, you should lock down the permissions of this file so 
 * that it cannot be seen by other users on the system. For more information, please 
 * see the config.php section at: https://processwire.com/docs/security/file-permissions/
 *
 * ProcessWire 2.x 
 * Copyright (C) 2015 by Ryan Cramer 
 * This file licensed under Mozilla Public License v2.0 (http://mozilla.org/MPL/2.0/)
 * 
 * https://processwire.com
 *
 */

if(!defined("PROCESSWIRE")) die();

/*** SITE CONFIG *************************************************************************/

/**
 * Enable debug mode?
 *
 * Debug mode causes additional info to appear for use during dev and debugging.
 * This is almost always recommended for sites in development. However, you should
 * always have this disabled for live/production sites.
 *
 * @var bool
 *
 */
$config->debug = false;

/**
 * Prepend template file
 *
 * PHP file in /site/templates/ that will be loaded before each page's template file.
 * Example: _init.php
 *
 * @var string
 *
 */
$config->prependTemplateFile = '_init.php';


/*** INSTALLER CONFIG ********************************************************************/

/**
 * Installer: Database Configuration
 * 
 */
/* DATABASE IRIS */ 
//$config->dbHost = 'localhost';
//$config->dbName = 'i888557_studentplus';
//$config->dbUser = 'i888557_eric';
//$config->dbPass = 'i888557';
//$config->dbPort = '3306';

/* DATABASE EXTERNAL */ 
// $config->dbHost = 'studmysql01.fhict.local';
// $config->dbName = 'i888557_splusorg';
// $config->dbUser = 'i888557_splusorg';
// $config->dbPass = 'Wzb>HtvGweFyimW9hTA9ntaCCfMMnM';
// $config->dbPort = '3306';

/* DATABASE LOCAL */ 
$config->dbHost = 'localhost';
$config->dbName = 'i888557_splusorg';
$config->dbUser = 'root';
$config->dbPass = 'root';
$config->dbPort = '8889';

/**
 * Installer: User Authentication Salt 
 * 
 * Must be retained if you migrate your site from one server to another
 * 
 */
$config->userAuthSalt = '25eed6ad299460ef9cca2adc05dab7ce'; 

/**
 * Installer: File Permission Configuration
 * 
 */
$config->chmodDir = '0755'; // permission for directories created by ProcessWire
$config->chmodFile = '0644'; // permission for files created by ProcessWire 

/**
 * Installer: Time zone setting
 * 
 */
$config->timezone = 'Europe/Amsterdam';


/**
 * Installer: HTTP Hosts Whitelist
 * 
 */
$config->httpHosts = array('localhost:8888','i888557.iris.fhict.nl');

