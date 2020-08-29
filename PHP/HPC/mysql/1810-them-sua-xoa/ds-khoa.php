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
		$sql="Select MaKH,TenKH From khoa";
		//3.thực thi câu lệnh truy vấn mysqli_query -> 1 tập kết quả
		$result=mysqli_query($ketnoi,$sql);
		//4.sử dụng hàm mysqli_fetch_array để đọc 1 dòng, dùng echo in ra
	 ?>
	 	 	<table width="50%" border="1px" cellspacing="0" cellpadding="5" align="center">
	 		<caption><h1>DANH SÁCH KHOA</h1></caption>
	 		<thead>
	 			<tr>
	 				<th>STT</th>
	 				<th>Mã khoa</th>
	 				<th>Tên khoa</th>
	 				<th>Chức năng</th>
	 			</tr>
	 		</thead>
	 		<tbody>
	 			<?php 
	 				$stt=0;
	 				while($row=mysqli_fetch_array($result)):
	 					$stt++;
	 			 ?>
	 			<tr>
	 				<td><?php echo $stt; ?></td>
	 				<td><?php echo $row["MaKH"]; ?></td>
	 				<td><?php echo $row["TenKH"]; ?></td>
	 				<td>
	 					<a href="sua-khoa.php?makh=<?php echo $row['MaKH'];?>">Sửa</a>
	 					<a href="xoa-khoa.php?makh=<?php echo $row['MaKH'];?>">Xóa</a>
	 				</td>
	 			</tr>
	 		<?php endwhile; ?>
	 		</tbody>
	 		<tfoot>
	 			<tr>
	 				<td>
	 					<a href="them-khoa.php">Thêm mới</a>
	 				</td>
	 			</tr>
	 		</tfoot>
	 	</table>
</body>
</html>