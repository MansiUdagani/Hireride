<?php
	$host = "remotemysql.com";
	$user = "rpzTA2weOd";
	$pass = "No55Ru1eI4";
	$db = "rpzTA2weOd";
	
	$conn = new mysqli($host, $user, $pass, $db);
	if($conn->connect_error){
		echo "Failed:" . $conn->connect_error;
	}
?>
