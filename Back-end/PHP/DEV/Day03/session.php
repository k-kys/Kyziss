<?php 
	session_start();
	$_SESSION['userName'] = 'admin';
	$_SESSION['email'] = 'email';
	echo "<pre>";
	print_r($_SESSION);
	echo 'set session success';
 ?>