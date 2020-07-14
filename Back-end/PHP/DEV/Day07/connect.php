<?php 
//Connection with MySQLi Object-Oriented
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbName = "dev1909";
	
	//Create connection
	$conn = new mysqli($servername, $username, $password, $dbName);
	//Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	//echo "Connected successfully";
	//echo '<br/>';
/* Create DB
	$sql = 'create database dev1909';
	if ($conn->query($sql) === true) {
		echo 'Create database successfully';
	} else {
		echo 'Create database failed ' . $conn->error;
	}

	$conn->close();
	*/
 ?>