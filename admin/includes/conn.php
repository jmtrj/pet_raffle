<?php


	$conn = new mysqli('localhost', 'root', '', 'db_pettastic');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>