<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List Member</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>
<body>
	<?php 
	include 'connect.php';
	$sql="SELECT * FROM members";
	$res=mysqli_query($conn,$sql);
	?>
	<h1 align="center">LIST MEMBER</h1>
	<table style="text-align: center;" align="center" border="1px" cellpadding="10" cellspacing="0">
		<thead>
			<tr>
				<th>STT</th>
				<th>ID</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Birthday</th>
				<th>Job</th>
				<th>Active</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$stt=0;
			while($row=mysqli_fetch_array($res)):
				$stt++;
				$birth=date_create($row["Birthday"]);
				?>
				<tr>
					<td><?php echo $stt; ?></td>
					<td><?php echo $row["ID"]; ?></td>
					<td><?php echo $row["Name"]; ?></td>
					<td><?php echo $row["Gender"]; ?></td>
					<td><?php echo date_format($birth,"d/m/Y"); ?></td>
					<td><?php echo $row["Job"]; ?></td>
					<td>
						<a href="edit.php?id=<?php echo $row["ID"]; ?>" title="Edit"><i class="fas fa-edit"></i></a>
						<a href="delete.php?id=<?php echo $row["ID"]; ?>" title="Delete"><i class="fas fa-trash"></i></a>
					</td>
				</tr>
			<?php endwhile; ?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="7">
						<a href="add.php" title="Add new"><i class="fas fa-file"></i></a>
					</td>
				</tr>
			</tfoot>
		</table>
	</body>
	</html>