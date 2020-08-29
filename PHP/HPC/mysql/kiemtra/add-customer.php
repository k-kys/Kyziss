<!-- TRẦN QUANG KHƯƠNG 		hpc.k18.it01 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm mới thông tin khách hàng</title>
	<style type="text/css">
		form{
			margin: 10px 25%;
			border: 2px solid #3823;
			border-radius: 20px;
		}
	</style>
</head>
<body>
	<?php 
		//khi user nhấn nút Add
		if (isset($_POST["btAdd"])) {
			include 'connect.php';

			//lấy dữ liệu từ form
			$makh=$_POST["cusID"];
			$tenkh=$_POST["cusName"];
			$diachi=$_POST["cusAdd"];
			$sdt=$_POST["cusPhone"];

			//thêm vào CSDL
			$sql="Insert into customer(cusID,cusName,cusAdd,cusPhone) value ('$makh','$tenkh','$diachi','$sdt');";

			if (mysqli_query($conn,$sql)) {
				echo "<script>alert('Thêm mới thành công'); location.href='list-customer.php';</script>";
			}else{
				$err="Lối thêm mới <br/>".mysqli_errno($conn);
			}
		}
	 ?>
	<form action="" method="post">
		<h1 style="text-align: center;">THÊM MỚI THÔNG TIN KHÁCH HÀNG</h1>
		<!--  -->
		<span id="errMsg"><?php echo isset($err)?$err:''; ?></span>
		<table width="100%" cellspacing="5" cellspacing="0">
			<tr>
				<th>Mã khách hàng: </th>
				<td><input type="text" name="cusID"></td>
			</tr>
			<tr>
				<th>Tên khách hàng: </th>
				<td><input type="text" name="cusName"></td>
			</tr>
			<tr>
				<th>Địa chỉ: </th>
				<td><input type="text" name="cusAdd"></td>
			</tr>
			<tr>
				<th>Số điện thoại: </th>
				<td><input type="text" name="cusPhone"></td>
			</tr>
			<tr>
				<td colspan="4" align="center">
					<input type="submit" name="btAdd" value="Add">
					<input type="button" name="btBack" value="Back" onclick="location.href='list-customer.php'">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>