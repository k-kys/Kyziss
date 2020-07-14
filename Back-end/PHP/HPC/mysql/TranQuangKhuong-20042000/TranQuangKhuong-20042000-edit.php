<!-- Họ tên: Trần Quang Khương
Ngày sinh: 20/04/2000
Điện thoại: 0987956592
email: khuong.kiyoshi@gmail.com
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Actor</title>
</head>
<body>
	<?php 
	include 'connect.php';

	if (isset($_POST['btEdit'])) {
		$id_old=$_GET['aid'];
		$id=$_POST['aID'];
		$firstname=$_POST['FirstName'];
		$lastname=$_POST['LastName'];
		$update=$_POST['lastupdate'];

		$sql3="Update actor Set aID='$id', FirstName='$firstname', LastName='$lastname', last_update='$update' Where aID='$id_old';";

		if (mysqli_query($conn,$sql3)) {
			echo "<script> alert('Edit successful'); location.href='TranQuangKhuong-20042000-list.php'</script>";
		}else{
			$err="Error editing <br/>".mysqli_errno($conn);
		}
	}

	if (isset($_GET['aid'])) {
		$id=$_GET['aid'];
		$sql="SELECT aID,FirstName,LastName,last_update FROM actor WHERE aID='$id'";

		$result=mysqli_query($conn,$sql);

		$row=mysqli_fetch_array($result);
	}
	?>
	<form method="post">
		<h1 align="center">EDIT ACTOR</h1>
		<span><?php echo isset($err)?$err:''; ?></span>
		<table align="center" cellpadding="5" cellspacing="5">
			<tr>
				<th>Actor ID: </th>
				<td><input type="text" name="aID" value="<?php echo isset($row['aID'])?$row['aID']:''; ?>"></td>
			</tr>
			<tr>
				<th>First Name: </th>
				<td><input type="text" name="FirstName" value="<?php echo isset($row['FirstName'])?$row['FirstName']:''; ?>"></td>
			</tr>
			<tr>
				<th>Last Name: </th>
				<td><input type="text" name="LastName" value="<?php echo isset($row['LastName'])?$row['LastName']:''; ?>"></td>
			</tr>
			<tr>
				<th>Last Update: </th>
				<td><input type="date" name="lastupdate" value="<?php echo isset($row['lastupdate'])?$row['lastupdate']:''; ?>"></td>
			</tr>
			<tr>
				<td align="center" colspan="4">
					<input type="submit" name="btEdit" value="Edit">
					<input type="button" name="btBack" value="Back" onclick="location.href='TranQuangKhuong-20042000-list.php'">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>