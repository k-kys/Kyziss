<?php 
include 'connect.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sqlXoa = "DELETE FROM sinhvien WHERE id = $id;";
	if ($conn->query($sqlXoa)) {
		echo "<script>alert('Xóa Sinh viên thành công'); location.href='sv.php';</script>";
	} else {
		echo "<script>alert('Xóa Sinh viên không thành công'); location.href='sv.php';</script>";
	}
}
 ?>
