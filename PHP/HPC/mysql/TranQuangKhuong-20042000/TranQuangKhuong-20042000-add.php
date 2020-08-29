<!-- Họ tên: Trần Quang Khương
Ngày sinh: 20/04/2000
Điện thoại: 0987956592
email: khuong.kiyoshi@gmail.com
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Actor</title>
</head>
<body>
	<?php 
	if (isset($_POST['btAdd'])) {
		include 'connect.php';

		$id=$_POST['aID'];
		$firstname=$_POST['FirstName'];
		$lastname=$_POST['LastName'];
		$update=$_POST['last_update'];

		$sql2="Insert into actor(aID,FirstName,LastName,last_update) value ('$id','$firstname','$lastname','$update');";

		if (mysqli_query($conn,$sql2)) {
			echo "<script> alert('Add successful'); location.href='TranQuangKhuong-20042000-list.php'; </script>";
		}else{
			$err="Error adding new <br/>".mysqli_errno($conn);
		}
	}
	?>
	<form method="post">
		<h1 style="text-align: center">ADD ACTOR</h1>
		<span><?php echo isset($err)?$err:''; ?></span>
		<table align="center" cellpadding="5" cellspacing="0">
			<tr>
				<th>Actor ID: </th>
				<td><input type="text" name="aID"></td>
			</tr>
			<tr>
				<th>First Name: </th>
				<td><input type="text" name="FirstName"></td>
			</tr>
			<tr>
				<th>Last Name: </th>
				<td><input type="text" name="LastName"></td>
			</tr>
			<tr>
				<th>Last Update: </th>
				<td><input type="date" name="last_update"></td>
			</tr>
			<tr>
				<td colspan="4" align="center">
					<input type="submit" name="btAdd" value="Add">
					<input type="button" name="btBack" value="Back" onclick="location.href='TranQuangKhuong-20042000-list.php'">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>