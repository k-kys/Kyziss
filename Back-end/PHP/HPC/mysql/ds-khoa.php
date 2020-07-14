<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh sách khoa</title>
</head>
<body>
	<?php 
		//1.tạo kết nối CSDL
		include("ketnoi.php");
		//2.tạo truy vấn
		$sql="Select * From khoa";
		//3.thực thi câu lệnh truy vấn mysqli_query -> 1 tập kết quả
		$ketqua=mysqli_query($con,$sql);
		//4.sử dụng hàm mysqli_fetch_array để đọc 1 dòng, dùng echo in ra
		$dong=mysqli_fetch_array($ketqua);
		echo "<p>Mã khoa: ".$dong["MaKH"];
		echo "<p>Tên khoa: ".$dong[1];
		echo '<hr/>';
		//hiển thị all row trong ketqua
		while ($dong=mysqli_fetch_array($ketqua)) {
			echo "<p>".$dong["MaKH"].' --- '.$dong["TenKH"];
		}
	 ?>
</body>
</html>