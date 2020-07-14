<?php
session_start();
if (!isset($_SESSION['loginSuccess']) || $_SESSION['loginSuccess'] !== 1) {
	header('Location: login.php');
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<h1 style="color: blue;"><b>Home Page<b></h1>
	<?php include 'header.php'; ?>
	<span style="color: red;"><b>Đây là dòng chữ Màu đỏ</b></span>
	<br>
	<input type="button" name="logout" value="Delete Session" onclick="location.href='logout.php'">
</body>
</html>