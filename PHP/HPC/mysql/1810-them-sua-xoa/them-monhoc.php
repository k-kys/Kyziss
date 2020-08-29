<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm mới môn học</title>
	<style type="text/css">
		form{
			margin: 10px 25%;
			border: 1px solid #ccc;
			border-radius: 10px;
		}
	</style>
</head>
<body>
	<?php 
		//Xác định khi user nhấn nút ghi lại
		if (isset($_POST['btSave'])) {
			include 'ketnoi.php';
			//lấy dữ liệu trên form
			$mamh=$_POST['MaMH'];
			$tenmh=$_POST['TenMH'];
			$sotiet=$_POST['Sotiet'];

			$sql="INSERT INTO monhoc(MaMH,TenMH,Sotiet) VALUES ('$mamh','$tenmh','$sotiet')";

			if (mysqli_query($ketnoi,$sql)) {
				echo "<script> alert('Thêm mới thành công'); location.href='ds-monhoc.php';</script>";
			}else{
				$err="Lỗi thêm mới<br/>".mysqli_errno($ketnoi);
			}
		}
	 ?>
	 <form method="post">
	 	<h1 style="text-align: center;">THÊM MỚI MÔN HỌC</h1>
	 	<span id="errMsg"><?php echo isset($err)?$err:''; ?></span>
	 	<table width="100%" cellpadding="5" cellspacing="5">
	 		<tr>
	 			<th>Mã môn học:</th>
	 			<td><input type="text" name="MaMH"></td>
	 		</tr>
	 		<tr>
	 			<th>Tên môn học:</th>
	 			<td><input type="text" name="TenMH"></td>
	 		</tr>
	 		<tr>
	 			<th>Số tiết:</th>
	 			<td><input type="text" name="Sotiet"></td>
	 		</tr>
	 		<tr>
				<td colspan="2" align="center">
					<input type="submit" name="btSave" value="Ghi lại">
					<input type="button" name="btBack" value="Quay lại" onclick="location.href='ds-monhoc.php'">
				</td>
			</tr>
	 	</table>
	 </form>
</body>
</html>