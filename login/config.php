<?php
	// step 1: create a database connection
	$dbhost = "localhost";
	$dbuser = "exercise11";
	$dbpass = "coffee";
	$dbname = "exercise11";
	$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>