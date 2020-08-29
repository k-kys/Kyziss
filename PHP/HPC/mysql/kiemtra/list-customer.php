<!-- TRẦN QUANG KHƯƠNG 		hpc.k18.it01 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh sách khách hàng</title>
</head>
<body>
	<?php 
		//kết nối
	include 'connect.php';

		//truy vấn
	$sql="Select cusID,cusName,cusAdd,cusPhone FROM customer";
	$result=mysqli_query($conn,$sql);
	?>
	<table border="1px" cellspacing="0" cellpadding="5" align="center">
		<caption><h1>DANH SÁCH KHÁCH HÀNG</h1></caption>
		<thead>
			<tr>
				<th>STT</th>
				<th>Mã khách hàng</th>
				<th>Tên khách hàng</th>
				<th>Địa chỉ</th>
				<th>Số điện thoại</th>
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
					<td><?php echo $row["cusID"]; ?></td>
					<td><?php echo $row["cusName"]; ?></td>
					<td><?php echo $row["cusAdd"]; ?></td>
					<td><?php echo $row["cusPhone"]; ?></td>
					<td>
						<a href="#">Edit</a>
						<a href="#">Delete</a>
					</td>
				</tr>
			<?php endwhile; ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="6">
					<a href="add-customer.php">Thêm mới</a>
				</td>
			</tr>
		</tfoot>
	</table>
</body>
</html>