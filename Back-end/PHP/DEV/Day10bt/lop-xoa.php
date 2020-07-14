<?php 
include 'connect.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sqlXoa = "DELETE FROM lop WHERE id = $id;";
	if ($conn->query($sqlXoa)) {
		echo "<script>alert('Xóa Lớp thành công'); location.href='lop.php';</script>";
	} else {
		echo "<script>alert('Xóa Lớp không thành công'); location.href='lop.php';</script>";
	}
}
 ?>
