<?php 
include '../Day07/connect.php';

// Show bản ghi cũ
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql1 = "SELECT id, username, gender, address, created_at FROM users WHERE id = $id";
	$result = $conn->query($sql1);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
	} else {
		die('User not found');
	}
	
}

// Update bản ghi mới
if (isset($_POST['edit'])) {
	$id = $_POST['id'];
	$name = $_POST['username'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	//$date = date('Y-m-d H:i:s');

	$sqlUpdate = "UPDATE users SET username='{$name}', gender='$gender', address='{$address}' WHERE id='$id'";
	if ($conn->query($sqlUpdate)) {
		echo 'Update successful.';
		echo "<script> alert('Sửa thành công'); location.href='../Day07/index.php';</script>";
	} else {
		echo 'Update error ' . $conn->error;
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form action="" method="POST" role="form">
					<legend>Edit User ID=<?php echo $row['id']?></legend>
					<!-- <input type="hidden" name="id" value="<?= $id ?>"> -->

					<div class="form-group">
						<label for="">ID:</label>
						<input type="text" class="form-control" name="id" id="id" value="<?= $row['id']; ?>">
					</div>

					<div class="form-group">
						<label for="">Username:</label>
						<input type="text" class="form-control" name="username" id="username" value="<?= $row['username']; ?>">
					</div>

					<div class="form-group">
						<div class="radio">
							<label>
								<input type="radio" name="gender" id="inputGender" value="1" <?= $row['gender'] == 1 ? 'checked' : '' ?>>
								Nam
							</label>
							<label>
								<input type="radio" name="gender" id="inputGender" value="0" <?= $row['gender'] == 0 ? 'checked' : '' ?>>
								Nữ
							</label>

						</div>
					</div>

					<div class="form-group">
						<label for="">Address:</label>
						<input type="text" class="form-control" name="address" id="address" value="<?= $row['address']; ?>">
					</div>

					<button type="submit" class="btn btn-primary" name="edit">Submit</button>

				</form>
			</div>
		</div>
	</div>
</body>
</html>