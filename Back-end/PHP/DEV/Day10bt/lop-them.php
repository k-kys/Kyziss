<?php 
if (isset($_POST['btnThem'])) {
	include 'connect.php';
	$tenlop = $_POST['tenlop'];
	$diadiem = $_POST['diadiem'];

	$sqlThem = "INSERT INTO lop(tenlop, diadiem) VALUES ('$tenlop', '$diadiem');";

	if ($conn->query($sqlThem)) {
		echo '<span>Thêm mới Lớp thành công</span>';
	} else {
		echo '<span>Thêm mới Lớp không thành công</span>';
	}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm Lớp</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<form action="" method="POST" role="form">
					<legend>Thêm mới Lớp</legend>

					<div class="form-group">
						<label for="">Tên lớp</label>
						<input type="text" class="form-control" name="tenlop" id="" placeholder="Nhập tên lớp">
					</div>

					<div class="form-group">
						<label for="">Địa điểm</label>
						<input type="text" class="form-control" name="diadiem" id="" placeholder="Nhập địa điểm">
					</div>

					<button type="submit" class="btn btn-primary" name="btnThem">Thêm</button>
					<a class="btn btn-primary" href="lop.php">Back</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>