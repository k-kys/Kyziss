<?php 
if (isset($_POST['btnThemMoi'])) {
	include 'connect.php';
	//$maxe = $_POST['maxe'];
	$tenxe = $_POST['tenxe'];
	$dongia = $_POST['dongia'];
	$mota = $_POST['mota'];
	$namsx = $_POST['namsx'];

	$sql = "INSERT INTO xe(tenxe, dongia, mota, namsx) VALUES ('{$tenxe}', {$dongia}, '{$mota}', {$namsx});";

	if ($ketnoi->query($sql)) {
		echo "<script> alert('Thêm mới thông tin xe thành công'); location.href='them-moi.php'; </script>";
	} else {
		echo "Lỗi thêm mới " . $ketnoi->error;
	}
}
 ?>