<?php

/*	database connection details
 ******************************/
$db['host'] = "localhost";
$db['user'] = "ripam";
$db['pass'] = "ripampass";
$db['name'] = "ripam";

/**
 * php debugging on/off
 *
 * true  = SHOW all php errors
 * false = HIDE all php errors
 ******************************/
$debugging = true;

/**	
 *	BASE definition if ripam 
 * 	is not in root directory (e.g. /phpipam/)
 *
 *  Also change 
 *	RewriteBase / in .htaccess
 ******************************/
define('BASE', "/git/rIPAM/");

?>
