<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List student</title>
</head>
<body>
	<h1>Họ và tên: Trần Quang Khương</h1>
	<h3>Ngày sinh: 20-04-2000</h3>
	<h3>Lớp đang học: K18-HPC-IT01</h3>
	<?php 
		include 'connect.php';
		$sql="SELECT * FROM hpcit01_TranQuangKhuong_20042000_Student;";
		$ketqua=mysqli_query($conn,$sql);
		
	 ?>
	<h1 align="center">LIST STUDENT</h1>
	<table align="center" cellpadding="5" cellspacing="0" border="1px">
		<thead>
			<tr>
				<th>No.</th>
				<th>ID</th>
				<th>Name</th>
				<th>BirthDay</th>
				<th>Gender</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$stt=0;
				while ($row=mysqli_fetch_array($ketqua)) :
					$stt++;
					$day=date_create($row['BirthDay']);
			 ?>
			<tr>
				<td><?php echo $stt; ?></td>
				<td><?php echo $row['Student_ID']; ?></td>
				<td><?php echo $row['Name']; ?></td>
				<td><?php echo date_format($day,"d/m/Y"); ?></td>
				<td><?php echo $row['Gender']; ?></td>
				<td><?php echo $row['Status']; ?></td>
				<td>
					<a href="#">Edit</a>
					<a href="#">Remove</a>
				</td>
			</tr>
		<?php endwhile; ?>
		</tbody>
		<tfoot>
			<td colspan="7" align="center">
				<a href="hpcit01_TranQuangKhuong_20042000_Student_Add.php">Add</a>
			</td>
		</tfoot>
	</table>
</body>
</html>