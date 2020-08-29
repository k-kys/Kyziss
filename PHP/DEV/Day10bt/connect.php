<?php 
	$conn = new mysqli("localhost", "root", "", "qlsv");
	if ($conn->connect_error) {
		die("Connect Failed:" . $conn->connect_error);
	}
 ?>