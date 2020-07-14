<?php 
	//không hiển thị lỗi Warning
	error_reporting(0);
	//tạo kết nối từ php đến MySQL
	//sử dụng hàm mysqli_connect
	//$link=mysqli_connect("127.0.0.1","my_user","my_password","my_db");
	$link=mysqli_connect("localhost","root","","hpc_k18_it01");
	if (!$link) {
		die('Kết nối không thành công. <br/>'.mysqli_connect_error());
	}else{
		echo "Đã kết nối.";
	}
 ?>