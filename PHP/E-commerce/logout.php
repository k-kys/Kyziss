<?php 
session_start();
if (isset($_SESSION['email_adress'])) {
	unset($_SESSION['email_address']);
	session_destroy();
}
header("location: index.php")
 ?>