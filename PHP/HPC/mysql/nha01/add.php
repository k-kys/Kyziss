<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Member</title>
</head>
<body>
	<?php 
		if (isset($_POST["btnAdd"])) {
			include 'connect.php';

			//lấy data trên form
			$id=$_POST["id"];
			$name=$_POST['name'];
			$gender=$_POST['gender'];
			$birth=$_POST['birthday'];
			$job=$_POST['job'];

			$sql="INSERT INTO members VALUES ('$id','$name','$gender','$birth','$job');";

			if (mysqli_query($conn,$sql)) {
				echo "<script>alert('Add successful'); location.href='list.php';</script>";
			}else{
				$err="Error Add <br/>".mysqli_errno($conn);
			}
		}

	 ?>
	<form method="post">
		<h1 align="center">ADD MEMBER</h1>
		<span><?php echo isset($err)?$err:''; ?></span>
		<table  align="center" cellspacing="0" cellpadding="5">
			<tr>
				<th style="text-align: right;">ID: </th>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<th style="text-align: right;">Name: </th>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<th style="text-align: right;">Gender: </th>
				<td><input type="text" name="gender"></td>
			</tr>
			<tr>
				<th style="text-align: right;">Birthday: </th>
				<td><input type="date" name="birthday"></td>
			</tr>
			<tr>
				<th style="text-align: right;">Job: </th>
				<td><input type="text" name="job"></td>
			</tr>
			<tr>
				<td colspan="2" align="right">
					<input type="submit" name="btnAdd" value="Add member">
					<input type="button" name="back" value="Back" onclick="location.href='list.php' ">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>