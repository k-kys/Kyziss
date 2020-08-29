<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh sách môn học</title>
</head>
<body>
	<?php 
		include("ketnoi.php");
		$sql="Select * From monhoc";
		$ketqua=mysqli_query($con,$sql);
	 ?>
	 <h1 style="text-align: center;">Danh sách môn học</h1>
	 <table width="50%" border="1px" align="center">
	 	<thead>
	 		<tr>
	 			<th>Mã môn học</th>
	 			<th>Tên môn học</th>
	 			<th>Số tiết</th>
	 			<th>Chức năng</th>
	 		</tr>
	 	</thead>
	 	<tbody>
	 		<?php 
	 		while ($dong=mysqli_fetch_array($ketqua)) :
	 		  ?>
	 		<tr>
	 			<td><?php echo $dong["MaMH"]; ?></td>
	 			<td><?php echo $dong["TenMH"]; ?></td>
	 			<td><?php echo $dong["Sotiet"]; ?></td>
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