<?php 
include 'connect.php';
if (isset($_GET['maxe'])) {
	$maxe = $_GET['maxe'];
	$sql = "DELETE FROM xe WHERE maxe = {$maxe};";
	if ($ketnoi->query($sql)) {
		echo "<script> alert('Xóa thông tin xe thành công'); location.href='thong-tin.php'; </script>";
	} else {
		echo "<script> alert('Xóa không thành công'); location.href='thong-tin.php'; </script>";
	}
}
 ?>