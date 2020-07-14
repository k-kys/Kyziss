<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa thông tin khoa</title>
	<style type="text/css">
		form{
			margin: 10px 25%;
			border-radius: 10px;
			border: 1px solid #ccc;
		}
	</style>
</head>
<body>
	<?php 
		include 'ketnoi.php';
		//xử lí khi user update
		if (isset($_POST['btSave'])) {
			$mk_old=$_GET['makh'];
			$mk=$_POST['MaKH'];
			$tk=$_POST['TenKH'];

			$sql="UPDATE khoa SET MaKH='$mk',TenKH='$tk' WHERE MaKH='$mk_old'";

			if (mysqli_query($ketnoi,$sql)) {
				echo "<script> alert('Sửa thành công'); location.href='ds-khoa.php';</script>";
			}else{
				$err="Lỗi sửa thông tin khoa <br/>".mysqli_errno($ketnoi);
			}
		}
		//đọc dữ liệu sửa
		if (isset($_GET['makh'])) {
			$mk=$_GET['makh'];
			$sql="SELECT MaKH,TenKH FROM khoa WHERE MaKH='$mk'";

			$result=mysqli_query($ketnoi,$sql);

			$row=mysqli_fetch_array($result);
		}
	 ?>
	<form action="" method="post">
		<h1 style="text-align: center;">SỬA THÔNG TIN KHOA</h1>
		<table width="100%" cellspacing="5" cellpadding="5">
			<tr>
				<th>Mã khoa:</th>
				<td><input type="text" name="MaKH" value="<?php echo isset($row['MaKH'])?$row['MaKH']:''; ?>"></td>
			</tr>
			<tr>
				<th>Tên khoa:</th>
				<td><input type="text" name="TenKH" value="<?php echo isset($row['TenKH'])?$row['TenKH']:''; ?>"></td>
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