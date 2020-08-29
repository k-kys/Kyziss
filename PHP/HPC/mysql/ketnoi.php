<?php 
	//sử dụng mysqli_connect để kết nối
	$con=mysqli_connect("localhost","root","","qlsinhvien");
	if (!$con) {
		echo "Lỗi kết nối <br/>".mysqli_connect_error();
		exit();
	}else{
		echo "Đã kết nối thành công";
	}
	//đặt unicode để hiển thị tiếng việt
	mysqli_query($con,"SET CHARACTER SET 'utf8'");
	mysqli_query($con,"SET SESSION collation_connection ='utf8_unicode_ci'");
 ?>