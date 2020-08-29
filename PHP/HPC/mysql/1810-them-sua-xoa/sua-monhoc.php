<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa môn học</title>
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
		//Xử lí khi user update
		if (isset($_POST['btSave'])) {
			$mamh_old=$_GET['mamh'];
			$mamh=$_POST['MaMH'];
			$tenmh=$_POST['TenMH'];
			$sotiet=$_POST['Sotiet'];

			$sql="UPDATE monhoc SET MaMH='$mamh',TenMH='$tenmh',Sotiet='$sotiet' WHERE MaMH='$mamh_old'";

			if (mysqli_query($ketnoi,$sql)) {
				echo "<script> alert('Sửa thành công'); location.href='ds-monhoc.php';</script>";
			}else{
				$err="Lỗi sửa thông tin môn học <br/>".mysqli_errno($ketnoi);
			}
		}
		//đọc dữ liệu sửa
		if (isset($_GET['mamh'])) {
			$mamh=$_GET['mamh'];
			$sql="SELECT MaMH,TenMH,Sotiet FROM monhoc WHERE MaMH='$mamh'";
			$result=mysqli_query($ketnoi,$sql);
			$row=mysqli_fetch_array($result);
		}
	 ?>
	 <form method="post">
	 	<h1 style="text-align: center;">Sửa thông tin môn học</h1>
	 	<table width="100%" cellspacing="5" cellpadding="5">
	 		<tr>
	 			<th>Mã môn học:</th>
	 			<td><input type="text" name="MaMH" value="<?php echo isset($row['MaMH'])?$row['MaMH']:''; ?>"></td>
	 		</tr>
	 		<tr>
	 			<th>Tên môn học:</th>
	 			<td><input type="text" name="TenMH" value="<?php echo isset($row['TenMH'])?$row['TenMH']:''; ?>"></td>
	 		</tr>
	 		<tr>
	 			<th>Số tiết:</th>
	 			<td><input type="text" name="Sotiet" value="<?php echo isset($row['Sotiet'])?$row['Sotiet']:''; ?>"></td>
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