<?php 
	$host = "localhost";
	$username = "root";
	$password = "";
	$dbName = 'dev1909';
	//Create connection
	$conn = new mysqli($host, $username, $password, $dbName);
	//Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
	echo '<br/>';

//CREATE TABLE
/*	$sql1 = "CREATE TABLE users(
		id int auto_increment primary key,
		username varchar(255),
		password varchar(255),
		gender tinyint default 0,
		address varchar(255),
		created_at datetime
	)";

	if ($conn->query($sql1) === true) {
		echo 'Create table success';
	} else {
		echo 'Create table failed:' . $conn->error;
	}
*/
//INSERT DATA
	$sql2 = "INSERT INTO users(username, password, gender, address, created_at) VALUES
		('Tran Quang Khuong','khuong',1,'Ha Noi','2020-01-03')";
	if ($conn->query($sql2) === true) {
		echo 'New record created successfully';
	} else {
		echo 'Error: ' . $sql . '<br>' . $conn->error;
	}
 ?>