<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Check Connection</title>
</head>
<body>
	<div class="container">
		<?php 
		// Connect to database server
		$MySQLi = new mysqli("localhost", "root", "", "shopping");
		if ($MySQLi->errno) {
			echo 'Unable to connect to the database: <br/>' . $MySQLi->errno;
			exit();
		} else{
			echo "Successfully connected with the MySQL server and shopping database is opened";
		}
		 ?>
	</div>
</body>
</html>