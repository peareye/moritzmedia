<?php
/**
 * Default Configuration Settings
 *
 * Define all instance specific settings in config.local.php.
 */

/**
 * Production boolean variable controls debug and environment modes
 */
$config['production'] = true;

/**
 * Administration Email Address
 */
$config['user']['email'] = '';

/**
 * Basics
 */
$config['site']['title'] = '';
$config['site']['senderEmail'] = '';

/**
 * Sessions
 */
$config['session']['cookieName'] = ''; // Name of the cookie
$config['session']['checkIpAddress'] = true;
$config['session']['checkUserAgent'] = true;
$config['session']['salt'] = ''; // Salt key to hash
$config['session']['secondsUntilExpiration'] = 7200;
