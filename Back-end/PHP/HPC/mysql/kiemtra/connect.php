<?php 
	$conn=mysqli_connect("localhost","root","","baithi_hpcit01_02");
	if (!$conn) {
		die("Lỗi kết nối");
	}
	mysqli_query($conn,"SET CHARACTER SET 'utf8'");
	mysqli_query($conn,"SET SESSION collation_connection = 'utf8_unicode_ci'");
 ?>