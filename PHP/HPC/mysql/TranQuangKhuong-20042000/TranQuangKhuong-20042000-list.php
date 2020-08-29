<!-- Họ tên: Trần Quang Khương
Ngày sinh: 20/04/2000
Điện thoại: 0987956592
email: khuong.kiyoshi@gmail.com
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List Actor</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>
<body>
	<?php 
	include 'connect.php';
	$sql="Select aID, FirstName, LastName, last_update From actor";
	$result=mysqli_query($conn,$sql);
	?>
	<h1 align="center">LIST ACTOR</h1>
	<table border="1px" cellspacing="0" cellpadding="5" align="center">
		
		<thead>
			<tr>
				<th>STT</th>
				<th>Actor ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Last Update</th>
				<th>Function</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$stt=0;
			while ($row=mysqli_fetch_array($result)) :
				$stt++;
				$ngay=date_create($row["last_update"]);
				?>
				<tr>
					<td><?php echo $stt; ?></td>
					<td><?php echo $row["aID"]; ?></td>
					<td><?php echo $row["FirstName"]; ?></td>
					<td><?php echo $row["LastName"]; ?></td>
					<td><?php echo date_format($ngay,"d/m/Y"); ?></td>
					<td>
						<a href="TranQuangKhuong-20042000-edit.php?aid=<?php echo $row['aID'];?>" title="Edit"><i class="fas fa-edit"></i></a>
						<a href="TranQuangKhuong-20042000-delete.php?aid=<?php echo $row['aID'];?>" title="Delete"><i class="fas fa-trash"></i></a>
					</td>
				</tr>
			<?php endwhile; ?>
		</tbody>
		<tfoot>
			<td colspan="6">
				<a href="TranQuangKhuong-20042000-add.php">Add new</a>
			</td>
		</tfoot>
	</table>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>