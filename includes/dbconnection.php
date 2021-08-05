<?php
	$databaseHost = 'localhost';
	$databaseUser = 'root';
	$databasePassword = '';
	$databaseName = 'outwooddb';
	$conn=mysqli_connect($databaseHost,$databaseUser,$databasePassword,$databaseName);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
?>