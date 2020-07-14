<?php 
	//sử dụng mysqli_connect để kết nối
	$ketnoi=mysqli_connect("localhost","root","","qlsinhvien");
	/*if (!$con) {
		echo "Lỗi kết nối <br/>".mysqli_connect_error();
		exit();
	}else{
		echo "Đã kết nối thành công";
	} */
	if (!$ketnoi) {
		die("Lỗi kết nối !");
	}

	//đặt unicode để hiển thị tiếng việt
	//set chuẩn I/O data utf8
	mysqli_query($ketnoi,"SET CHARACTER SET 'utf8'");
	mysqli_query($ketnoi,"SET SESSION collation_connection ='utf8_unicode_ci'");
 ?>