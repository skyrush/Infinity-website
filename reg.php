<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, "infinityusers");
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	$uname = $_GET["uname"];
	$pwd = $_GET["pwd"];
	$name = $_GET["name"];
	$email = $_GET["email"];
	
	$sql = "insert into `users` values ('$uname', '$pwd', '$email', '$name')";
	$results = mysqli_query($conn, $sql);
	
	$conn->close();
	header("Location: login.php");	
?>