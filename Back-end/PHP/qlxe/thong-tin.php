<?php 
include 'connect.php';
$sql = "SELECT * FROM xe;";
$result = $ketnoi->query($sql);
$motor = [];	// array nhận các bản ghi từ DB
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$motor[] = $row;
	}
} else {
	echo "Không có bản ghi nào.";
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thông tin xe</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped table-hover">
					<legend><h1>Thông tin xe máy</h1></legend>
					<thead>
						<tr>
							<th>Mã xe</th>
							<th>Tên xe</th>
							<th>Đơn giá</th>
							<th>Mô tả</th>
							<th>Năm sản xuất</th>
							<th>Chú ý</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							foreach ($motor as $key) {
						 ?>
						<tr>
							<td><?= $key['maxe']; ?></td>
							<td><?= $key['tenxe']; ?></td>
							<td><?= $key['dongia']; ?></td>
							<td><?= $key['mota']; ?></td>
							<td><?= $key['namsx']; ?></td>
							<td><?= $key['namsx'] > 2001 ? 'Bảo hành 3 năm' : 'Bảo hành 2 năm'; ?></td>
							<td>
								<a class="btn btn-primary" href="xoa.php?maxe=<?= $key['maxe']; ?>">Xóa</a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
					<tfoot>
						<tr>
							<td>
								<a class="btn btn-primary" href="them-moi.php">Thêm mới</a>
								<a class="btn btn-primary" href="tim-kiem.php">Tìm kiếm</a>
							</td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</body>
</html>