<!-- Họ tên: Trần Quang Khương
Ngày sinh: 20/04/2000
Điện thoại: 0987956592
email: khuong.kiyoshi@gmail.com
-->
<?php 
	$conn=mysqli_connect("localhost","root","","hpcit01_tranquangkhuong_20042000");
	if (!$conn) {
		die("Lỗi kết nối");
	}
	mysqli_query($conn,"SET CHARACTER SET 'utf8'");
 ?>