<?php 
	session_start();
	if (isset($_SESSION['userName'])) {
		echo $_SESSION['userName'] . '<br>' . $_SESSION['email'];
	}else{
		echo 'Variable Session not exist';
	}
	//echo $_SESSION['userName'] . '<br>';
	//echo $_SESSION['email'];
 ?>