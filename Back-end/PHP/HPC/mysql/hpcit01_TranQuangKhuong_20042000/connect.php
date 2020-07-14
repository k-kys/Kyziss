<?php 
	$conn=mysqli_connect("localhost","root","","hpcit01_tranquangkhuong_20042000");
	if (!$conn) {
		die('Lỗi kết nối');
	}
	mysqli_query($conn,"SET CHARACTER SET 'utf8'");
 ?>