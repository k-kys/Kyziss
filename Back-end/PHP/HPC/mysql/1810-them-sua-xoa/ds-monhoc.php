<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh sách môn học</title>
</head>
<body>
	<?php 
		include("ketnoi.php");
		$sql="Select MaMH,TenMH,Sotiet From monhoc";
		$result=mysqli_query($ketnoi,$sql);
	 ?>
	 <h1 style="text-align: center;">DANH SÁCH MÔN HỌC</h1>
	 <table width="50%" border="1px" cellspacing="0" cellpadding="5" align="center">
	 	<thead>
	 		<tr>
	 			<th>STT</th>
	 			<th>Mã môn học</th>
	 			<th>Tên môn học</th>
	 			<th>Số tiết</th>
	 			<th>Chức năng</th>
	 		</tr>
	 	</thead>
	 	<tbody>
	 		<?php 
	 		$stt=0;
	 		while ($row=mysqli_fetch_array($result)) :
	 		$stt++;
	 		  ?>
	 		<tr>
	 			<td><?php echo $stt; ?></td>
	 			<td><?php echo $row["MaMH"]; ?></td>
	 			<td><?php echo $row["TenMH"]; ?></td>
	 			<td><?php echo $row["Sotiet"]; ?></td>
	 			<td>
	 				<a href="sua-monhoc.php?mamh=<?php echo $row['MaMH'];?>">Sửa</a>
	 				<a href="xoa-monhoc.php?mamh=<?php echo $row['MaMH'];?>">Xóa</a>
	 			</td>
	 		</tr>
	 	<?php endwhile; ?>
	 	</tbody>
	 	<tfoot>
	 			<tr>
	 				<td>
	 					<a href="them-monhoc.php">Thêm mới</a>
	 				</td>
	 			</tr>
	 		</tfoot>
	 </table>
</body>
</html>