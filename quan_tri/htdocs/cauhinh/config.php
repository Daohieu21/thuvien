<?php
	$servername = "sql110.byethost17.com";
	$username = "b17_30489576";
	$password = "Cuong123";
	$db = "b17_30489576_dhc_camera";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password,$db);
    mysqli_set_charset($conn, 'UTF8');

	// Check connection
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}
	//echo "Connected successfully";
?>