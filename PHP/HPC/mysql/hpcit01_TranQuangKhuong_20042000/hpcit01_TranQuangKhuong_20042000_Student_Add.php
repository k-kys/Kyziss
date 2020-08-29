<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add student</title>
</head>
<body>
	<h1>Họ và tên: Trần Quang Khương</h1>
	<h3>Ngày sinh: 20-04-2000</h3>
	<h3>Lớp đang học: K18-HPC-IT01</h3>
	<?php 
		
	if (isset($_POST['btnAdd'])) {
		include 'connect.php';

		$id=$_POST['id'];
		$name=$_POST['name'];
		$birth=$_POST['birth'];
		$gender=$_POST['gender'];
		$status=$_POST['status'];

		$sql="INSERT INTO hpcit01_TranQuangKhuong_20042000_Student VALUES ('$id','$name','$birth','$gender','$status');";

		if (mysqli_query($conn,$sql)) {
			echo "Bạn đã thêm thành công ".$name;
		}else{
			echo "Thêm mới không thành công, kiểm tra lại";
		}
	}
	 ?>
	<form action="" method="post">
		<h1 align="center">ADD STUDENT</h1>
		<table cellspacing="0" cellpadding="5" align="center">
			<tr>
				<th style="text-align: right;">Student ID: </th>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<th style="text-align: right;">Name: </th>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<th style="text-align: right;">BirthDay: </th>
				<td><input type="date" name="birth"></td>
			</tr>
			<tr>
				<th style="text-align: right;">Gender: </th>
				<td><input type="text" name="gender"></td>
			</tr>
			<tr>
				<th style="text-align: right;">Status: </th>
				<td>
					<!-- ComboBox -->
					<input type="text" name="status">
				</td>
			</tr>
			<tr>
				<td colspan="2" align="right">
					<input type="submit" name="btnAdd" value="Add">
					<input type="button" name="back" value="Back" onclick="location.href='hpcit01_TranQuangKhuong_20042000_Student_List.php'">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>