<?php 
	if (isset($_GET['mamh'])) {
		include 'ketnoi.php';
		$sql="DELETE FROM monhoc WHERE mamh='".$_GET['mamh']."'";
		if (mysqli_query($ketnoi,$sql)) {
			echo "<script> alert('Xóa thành công'); location.href='ds-monhoc.php';</script>";
		}else{
			echo "<script> alert('Lỗi khi sửa, không xóa được'); location.href='ds-monhoc.php';</script>";
		}
	}
 ?>