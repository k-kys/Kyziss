<?php 
	if (isset($_GET['makh'])) {
		include 'ketnoi.php';
		$sql="DELETE FROM khoa WHERE makh='".$_GET['makh']."'";
		if (mysqli_query($ketnoi,$sql)) {
				echo "<script> alert('Xóa thành công'); location.href='ds-khoa.php';</script>";
			}else{
				echo "<script> alert('Lỗi khi sửa, không xóa được'); location.href='ds-khoa.php';</script>";
			}
	}
 ?>