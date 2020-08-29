<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm mới thông tin khoa</title>
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
		//xác định khi user nhấn nút ghi lại
		if (isset($_POST['btSave'])) {
			include("ketnoi.php");
			//lấy dữ liệu trên form
			$mk=$_POST['MaKH'];
			$tk=$_POST['TenKH'];

			$sql="INSERT INTO khoa(MaKH,TenKH) VALUES ('$mk','$tk')";

			if (mysqli_query($ketnoi,$sql)) {
				echo "<script>alert('Thêm mới thành công'); location.href='ds-khoa.php';</script>";
			}else{
				$err="Lỗi thêm mới <br/>".mysqli_errno($ketnoi);
			}
		}
	 ?>
	<form action="" method="post">
		<h1 style="text-align: center;">THÊM MỚI THÔNG TIN KHOA</h1>
		<span id="errMsg"><?php echo isset($err)?$err:''; ?></span>
		<table width="100%" cellspacing="5" cellpadding="5">
			<tr>
				<th>Mã khoa:</th>
				<td><input type="text" name="MaKH"></td>
			</tr>
			<tr>
				<th>Tên khoa:</th>
				<td><input type="text" name="TenKH"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="btSave" value="Ghi lại">
					<input type="button" name="btBack" value="Quay lại" onclick="location.href='ds-khoa.php'">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>