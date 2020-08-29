<!-- Họ tên: Trần Quang Khương
Ngày sinh: 20/04/2000
Điện thoại: 0987956592
email: khuong.kiyoshi@gmail.com
-->
<?php 
	if (isset($_GET['aid'])) {
		include 'connect.php';
		$sql4="DELETE FROM actor WHERE aID='".$_GET['aid']."'";
		if (mysqli_query($conn,$sql4)) {
				echo "<script> alert('Delete successful'); location.href='TranQuangKhuong-20042000-list.php';</script>";
			}else{
				echo "<script> alert('Lỗi khi sửa, không xóa được'); location.href='TranQuangKhuong-20042000-list.php';</script>";
			}
	}
 ?>