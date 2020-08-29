<?php
	session_start();
	session_destroy();
	echo "<script>alert('Đã xóa Session thành công'); location.href='index.php';</script>";
	//header('Location: index.php');
 ?>