<?php
	//Kết nối đến CSDL MySQL
	$host="localhost";
	$user="root";
	$pass="";
	$data="tenCSDL";
	$con=mysqli_connect($host,$user,$pass,$data);

	//Xử lý lỗi khi không thể kết nối
	if ($con==false) {
		echo "Kết nối không thành công<br/>";
		exit();
	}else{
		echo "Kết nối thành công<br/>";
	}
	//hoặc viết gọn lại
	//$con = mysqli_connect($host, $user, $pass, $data) or die("Kết nối không thành công");
	//
	//đặt unicode để hiển thị tiếng việt
	mysqli_query($con,"SET CHARACTER SET 'utf8'");
	mysqli_query($con,"SET SESSION collation_connection ='utf8_unicode_ci'");

	// TRUY VẤN
	//mysqli_query($con, "set names utf8");
	//Thêm giá trị vào bảng
	$result=mysqli_query($con,"insert into lop values('L001','03DHTH1',)");
	if ($result) {
		echo "Thêm thành công";
	}else{
		echo "Thêm thất bại";
	}
	//Lấy dữ liệu
	$result=mysqli_query($con,"select * from lop");

	//Lấy dữ liệu từng dòng
	$result = mysqli_query($con, "select * from lop");
	if(mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo "Lop: " . $row['malop'] . " - " . $row['tenlop'] . "<br />";
		}
	} else {
		echo "Không có dữ liệu";
	}

	//Xóa dữ liệu trong bảng
	$result = mysqli_query($con, "delete from sinhvien where masv = 'SV001'");
	if($result) {
		echo "Xóa thành công";
	} else {
		echo "Xóa thất bại";
	}

	//Cập nhật dữ liệu
	$result = mysqli_query($con, "update sinhvien set hoten='Nguyen Duy' where masv='SV001'");
	if($result) {
		echo "Cập nhật thành công";
	} else {
		echo "Cập nhật thất bại";
	}
 ?>
