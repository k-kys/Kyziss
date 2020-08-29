<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sản phẩm</title>
</head>
<body>
	<h2>Sản phẩm đã nhập</h2>
	<?php 
		$masp=$_POST['masp'];
		$tensp=$_POST['tensp'];
		$mota=$_POST['mota'];
		$soluong=$_POST['soluong'];
		$dongia=$_POST['dongia'];
		$loaisp=$_POST['loaisp'];

		echo 'Mã sản phẩm là: '.$masp.'<br>';
		echo 'Tên sản phẩm là: '.$tensp.'<br>';
		echo 'Mô tả: '.$mota.'<br>';
		echo 'Số lượng sản phẩm là: '.$soluong.'<br>';
		echo 'Đơn giá của sản phẩm: '.$dongia.'<br>';
		echo 'Sản phẩm này thuộc loại: '.$loaisp.'<br>';
	 ?>
</body>
</html>