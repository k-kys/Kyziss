<?php 
// tạo biến kết nối $ketnoi
$ketnoi = new mysqli("localhost", "root", "", "qlxe");

// kiểm tra việc kết nối
if ($ketnoi->connect_error) {
	die("Lỗi kết nối cơ sở dữ liệu " . $ketnoi->connect_error);
}
 ?>