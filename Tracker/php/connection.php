<?php
	//
	$SERVER = "localhost";
	$USERNAME = "root";
	$PASS = "";
	$DB = "covid19";
	$connect = mysqli_connect($SERVER, $USERNAME, $PASS, $DB);
	if (!$connect) die("ERROR: No Connection");

?>
	
