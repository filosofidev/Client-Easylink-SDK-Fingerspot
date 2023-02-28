<?php
	ini_set("display_errors", 0);
	error_reporting(0);
 
	$db_host		= "127.0.0.1:3306";
	$db_user		= "root";
	$db_pass		= "developer";
	$db_name		= "sdk";
 
	$conn = mysql_connect($db_host, $db_user, $db_pass);
	if (!$conn) die("Connection for user $db_user refused!");
	mysql_select_db($db_name, $conn) or die("Can not connect to database!");
 
?>