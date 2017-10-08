<?php
	
	$conn = new mysqli("localhost","root","","bookit");

	if($conn->connect_error)
		die("Connection failed".$conn->connect_error);

	$name = $_POST["name"];
	$username = $_POST["username"];
	$email = $_POST["email"];
	$address = $_POST["address"];
	$pincode = $_POST["pincode"];
	$password = $_POST["password"];
	$con_pass = $_POST["con_pass"];
?>