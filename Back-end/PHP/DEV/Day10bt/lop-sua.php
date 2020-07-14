<?php 
include 'connect.php';
//Show ra lớp hiện tại
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sqlShow = "SELECT * FROM lop WHERE id = $id;";
	$result = $conn->query($sqlShow);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
	} else {
		die("Không tìm thấy lớp có id=" . $id);
	}
}

//Update bản ghi mới
if (isset($_POST['btnEdit'])) {
	$id = $_POST['id'];
	$tenlop = $_POST['tenlop'];
	$diadiem = $_POST['diadiem'];

	$sqlUpdate = "UPDATE lop SET tenlop = '$tenlop', diadiem = '$diadiem' WHERE id = '$id';";
	if ($conn->query($sqlUpdate)) {
		echo "<script> alert('Sửa Lớp thành công'); location.href='lop.php';</script>";
	} else {
		echo "<script> alert('Sửa không thành công'); location.href='lop.php';</script>";
	}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa Lớp</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<form action="" method="POST" role="form">
					<legend>Sửa Lớp ID=<?= $row['id']?></legend>

					<div class="form-group">
						<label for="">ID</label>
						<input type="text" class="form-control" name="id" id="" placeholder="" value="<?= $row['id'];?>">
					</div>

					<div class="form-group">
						<label for="">Tên lớp</label>
						<input type="text" class="form-control" name="tenlop" id="" placeholder="" value="<?= $row['tenlop'];?>">
					</div>

					<div class="form-group">
						<label for="">Địa điểm</label>
						<input type="text" class="form-control" name="diadiem" id="" placeholder="" value="<?= $row['diadiem'];?>">
					</div>

					<button type="submit" class="btn btn-primary" name="btnEdit">Sửa</button>
					<a class="btn btn-primary" href="lop.php">Back</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>