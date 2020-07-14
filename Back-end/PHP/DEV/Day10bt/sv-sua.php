<?php 
include 'connect.php';
//Show ra lớp hiện tại
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sqlShow = "SELECT * FROM sinhvien WHERE id = $id;";
	$result = $conn->query($sqlShow);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
	} else {
		die("Không tìm thấy sinh viên có id=" . $id);
	}
}

//Update bản ghi mới
if (isset($_POST['btnEdit'])) {
	$id = $_POST['id'];
	$hoten = $_POST['hoten'];
	$ngaysinh = $_POST['ngaysinh'];
	$malop = $_POST['malop'];
	$sdt = $_POST['sdt'];
	$quequan = $_POST['quequan'];

	$sqlUpdate = "UPDATE sinhvien SET hoten = '$hoten', ngaysinh = '$ngaysinh', lop_id = '$malop', sdt = '$sdt', quequan = '$quequan' WHERE id = '$id';";
	if ($conn->query($sqlUpdate)) {
		echo "<script> alert('Sửa Sinh viên thành công'); location.href='sv.php';</script>";
	} else {
		echo "<script> alert('Sửa không thành công'); location.href='sv.php';</script>";
	}
}

// Lấy dữ liệu cho OPTION mã lớp
$sqlMalop = "SELECT * FROM lop;";
$resultOption = $conn->query($sqlMalop);
$lops = [];
while ($rowOption = $resultOption->fetch_assoc()) {
	$lops[] = $rowOption;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa Sinh viên</title>
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
					<legend>Sửa Sinh viên ID=<?= $row['id']?></legend>

					<div class="form-group">
						<label for="">ID</label>
						<input type="text" class="form-control" name="id" id="" placeholder="" value="<?= $row['id'];?>">
					</div>

					<div class="form-group">
						<label for="">Họ Tên</label>
						<input type="text" class="form-control" name="hoten" id="" placeholder="" value="<?= $row['hoten'];?>">
					</div>

					<div class="form-group">
						<label for="">Ngày sinh</label>
						<input type="date" class="form-control" name="ngaysinh" id="" placeholder="" value="<?= $row['ngaysinh'];?>">
					</div>

					<div class="form-group">
						<label for="">Mã lớp</label>
						<select name="malop" id="input" class="form-control" required="required">
							<option value="<?= $row['lop_id'];?>"><?= $row['lop_id']?></option>
							<?php foreach ($lops as $lop) { ?>
							<option value="<?= $lop['id'];?>"><?= $lop['id']?></option>
							<?php } ?>
						</select>
					</div>

					<div class="form-group">
						<label for="">SĐT</label>
						<input type="text" class="form-control" name="sdt" id="" placeholder="" value="<?= $row['sdt'];?>">
					</div>

					<div class="form-group">
						<label for="">Quê quán</label>
						<input type="text" class="form-control" name="quequan" id="" placeholder="" value="<?= $row['quequan'];?>">
					</div>

					<button type="submit" class="btn btn-primary" name="btnEdit">Sửa</button>
					<a class="btn btn-primary" href="sv.php">Back</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>