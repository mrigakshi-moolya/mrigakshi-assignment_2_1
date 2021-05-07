<?php
	
	$host_name = "localhost";
	$db_username = "root";
	$db_password = "test123";
	$db_name = "assignment_2_1";
	
	$connect =  mysqli_connect($host_name, $db_username, $db_password, $db_name);
	if (!$connect) {
		  die("Connection failed mysql: " . mysqli_connect_error());
	} 
?>