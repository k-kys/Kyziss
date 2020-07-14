<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Member</title>
</head>
<body>
	<?php 
	include 'connect.php';
	//Khi click button Edit
	if (isset($_POST['btnEdit'])) {

		$id_old=$_GET['id'];
		$id=$_POST['id'];
		$name=$_POST['name'];
		$gender=$_POST['gender'];
		$birth=$_POST['birthday'];
		$job=$_POST['job'];

		$sql="UPDATE members SET ID='$id', Name='$name', Gender='$gender', Birthday='$birth', Job='$job' WHERE ID='$id_old';";

		if (mysqli_query($conn,$sql)) {
			echo "<script>alert('Edit successful'); location.href='list.php'</script>";
		}else{
			$err="Error Edit <br/>".mysqli_errno($conn);
		}
	}
	//Load data khi mới sang trang
	if (isset($_GET['id'])) {
		$id=$_GET['id'];
		$sql1="SELECT * FROM members WHERE ID='$id';";
		$result=mysqli_query($conn,$sql1);
		$row=mysqli_fetch_array($result);
	}
	?>
	<form method="post">
		<h1 align="center">EDIT MEMBER</h1>
		<span><?php echo isset($err)?$err:''; ?></span>
		<table cellpadding="5" cellspacing="0" align="center">
			<tr>
				<th style="text-align: right;">ID: </th>
				<td><input type="text" name="id" value="<?php echo isset($row['ID'])?$row['ID']:''; ?>"></td>
			</tr>
			<tr>
				<th style="text-align: right;">Name: </th>
				<td><input type="text" name="name" value="<?php echo isset($row['Name'])?$row['Name']:''; ?>"></td>
			</tr>
			<tr>
				<th style="text-align: right;">Gender: </th>
				<td><input type="text" name="gender" value="<?php echo isset($row['Gender'])?$row['Gender']:''; ?>"></td>
			</tr>
			<tr>
				<th style="text-align: right;">Birthday: </th>
				<td><input type="date" name="birthday" value="<?php echo isset($row['Birthday'])?$row['Birthday']:''; ?>"></td>
			</tr>
			<tr>
				<th style="text-align: right;">Job: </th>
				<td><input type="text" name="job" value="<?php echo isset($row['Job'])?$row['Job']:''; ?>"></td>
			</tr>
			<tr>
				<td colspan="2" align="right">
					<input type="submit" name="btnEdit" value="Edit">
					<input type="button" name="back" value="Back" onclick="location.href='list.php'">
				</td>
			</tr>

		</table>
	</form>
</body>
</html>