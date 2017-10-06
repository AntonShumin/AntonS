<?php

//https://www.youtube.com/watch?v=YnjktfxVJyo
//https://www.youtube.com/results?search_query=php+configuration

phpinfo();

//error reporting
error_reporting(E_ALL);
ini_set('display_errors',1);

//http://php.net/manual/en/function.error-reporting.php
//http://php.net/manual/en/errorfunc.constants.php

// Turn off all error reporting
error_reporting(0);

// Report simple running errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Reporting E_NOTICE can be good too (to report uninitialized
// variables or catch variable name misspellings ...)
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

// Report all PHP errors (see changelog)
error_reporting(E_ALL);

// Report all PHP errors
error_reporting(-1);

// Same as error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);


/*
 * GLOBALS
 */

//https://www.w3schools.com/PhP/php_superglobals.asp

$_SERVER; //info over de server
$_SERVER['PHP_SELF']; //Returns the filename of the currently executing script
$_REQUEST; //GET en POST in een?


