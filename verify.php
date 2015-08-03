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
	
	$sql = "select * from users where username = '$uname' and password = '$pwd'";
	$results = mysqli_query($conn, $sql);
	
	$conn->close();
	if (mysqli_num_rows($results) > 0) {
		header("Location: Main.html");	
	} else {
		header("Location: login.php");
	}
	
?>