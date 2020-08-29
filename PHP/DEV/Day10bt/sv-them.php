<?php 
include 'connect.php';
if (isset($_POST['btnThem'])) {
	$hoten = $_POST['hoten'];
	$ngaysinh = $_POST['ngaysinh'];
	$malop = $_POST['malop'];
	$sdt = $_POST['sdt'];
	$quequan = $_POST['quequan'];

	$sqlThem = "INSERT INTO sinhvien(hoten, ngaysinh, lop_id, sdt, quequan) VALUES ('$hoten', '$ngaysinh', '$malop', '$sdt', '$quequan');";

	if ($conn->query($sqlThem)) {
		echo '<span>Thêm mới Sinh viên thành công</span>';
	} else {
		echo '<span>Thêm mới Sinh viên không thành công</span>';
	}
}

$sqlMalop = "SELECT * FROM lop;";
$result = $conn->query($sqlMalop);
$lops = [];
while ($row = $result->fetch_assoc()) {
	$lops[] = $row;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm Sinh viên</title>
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
					<legend>Thêm mới Sinh viên</legend>

					<div class="form-group">
						<label for="">Họ tên</label>
						<input type="text" class="form-control" name="hoten" id="" placeholder="Nhập họ tên">
					</div>

					<div class="form-group">
						<label for="">Ngày sinh</label>
						<input type="date" class="form-control" name="ngaysinh" id="" placeholder="Nhập ngày sinh">
					</div>

					<div class="form-group">
						<label for="">Mã lớp</label>
						
						<select name="malop" id="input" class="form-control" required="required">
							<option>--- Chọn mã lớp ---</option>
							<?php foreach ($lops as $lop) { ?>
								<option value="<?= $lop['id'];?>"><?= $lop['id'];?></option>
							<?php } ?>
						</select>
					</div>

					<div class="form-group">
						<label for="">SĐT</label>
						<input type="text" class="form-control" name="sdt" id="" placeholder="Nhập sđt">
					</div>

					<div class="form-group">
						<label for="">Quê quán</label>
						<input type="text" class="form-control" name="quequan" id="" placeholder="Nhập quê quán">
					</div>

					<button type="submit" class="btn btn-primary" name="btnThem">Thêm</button>
					<a class="btn btn-primary" href="sv.php">Back</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>