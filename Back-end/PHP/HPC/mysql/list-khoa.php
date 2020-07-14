<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh sách khoa</title>
</head>
<body>
	<?php 
		//1.kết nối
		include("ketnoi.php"); //$con
		//2.tạo truy vấn dữ liệu từ khoa
		$sql="Select MaKH, TenKH From khoa";
		//3.thực thi truy vấn
		$ketqua=mysqli_query($con,$sql);
	 ?>
	<h1 style="text-align: center;">Danh sách khoa</h1>
	<table width="50%" border="1px" align="center">
		<thead>
			<tr>
				<th>Mã khoa</th>
				<th>Tên khoa</th>
				<th>Chức năng</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while ($dong=mysqli_fetch_array($ketqua)) :
			 ?>
			<tr>
				<td><?php echo $dong["MaKH"]; ?></td>
				<td><?php echo $dong["TenKH"]; ?></td>
				<td style="text-align: center;">
					<a href="#">Xem</a>
					<a href="#">Sửa</a>
					<a href="#">Xóa</a>
				</td>
			</tr>
			<?php endwhile; ?>
		</tbody>
	</table>
</body>
</html>