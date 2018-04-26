<?php
	// step 1: create a database connection
	$dbhost = '66.147.242.186';
	$dbuser = "urcscon3_jhirs10";
	$dbpass = "coffee1N";
	$dbname = "urcscon3_jhirs10";
	$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>