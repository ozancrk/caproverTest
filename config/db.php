<?php

// TARİH TİME ZONE
date_default_timezone_set( 'Europe/Istanbul' );

define( 'DB_SERVER', 'srv-captain--db-db' );
define( 'DB_USERNAME', 'caproverTest' );
define( 'DB_PASSWORD', 'caproverTest' );
define( 'DB_DATABASE', 'caproverTest' );

require_once $_SERVER['DOCUMENT_ROOT'].'/classes/BasicDB.php';



$dbhost = DB_SERVER;
$dbuser = DB_USERNAME;
$dbpass = DB_PASSWORD;
$dbname = DB_DATABASE;

$db = new BasicDB( $dbhost, $dbname, $dbuser, $dbpass, 'utf8' );
