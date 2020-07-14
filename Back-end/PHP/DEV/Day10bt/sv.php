<?php 
include 'connect.php';

$sql = "SELECT * FROM sinhvien;";
$result = $conn->query($sql);

if (!empty($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 1;
}

$url = "sv.php?";
$keyword = null;

if (isset($_GET['keyword'])) {
	$keyword = $_GET['keyword'];
}

$limit = 2;
$offset = ($page - 1) * $limit;

$sql = "SELECT * FROM sinhvien LIMIT $limit OFFSET $offset;";
$sqlTotal = "SELECT count(*) as total FROM sinhvien;";

if ($keyword != null) {
	$sqlTotal = "SELECT count(*) AS total FROM sinhvien WHERE hoten LIKE '%{$keyword}%';";
	$sql = "SELECT * FROM sinhvien WHERE hoten LIKE '%{$keyword}%' LIMIT $limit OFFSET $offset;";
	$url = 'sv.php?keyword=' . $keyword . '&';
}

$resultTotal = $conn->query($sqlTotal);
$totalRecord = $resultTotal->fetch_assoc()['total'];
$totalPage = ceil($totalRecord / $limit);

$result = $conn->query($sql);
$students = [];
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$students[] = $row;
	}
} else {
	echo 'No Result';
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sinh viên</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="" method="GET" class="form-inline" role="form">

					<div class="form-group">
						<label class="sr-only" for="">Tìm kiếm</label>
						<input type="text" class="form-control" name="keyword" id="" placeholder="Nhập tên sinh viên" value="<?= $keyword;?>">
					</div>

					<button type="submit" class="btn btn-primary">Search</button>
				</form>
				<hr style="border: none; border-bottom: 10px solid red; border-radius: 5px;">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Mã sinh viên</th>
							<th>Họ tên</th>
							<th>Ngày sinh</th>
							<th>Mã lớp</th>
							<th>SĐT</th>
							<th>Quê quán</th>
							<th>Chức năng</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($students as $student) { ?>
						<tr>
							<td><?= $student['id'];?></td>
							<td><?= $student['hoten'];?></td>
							<td><?= date_format(date_create($student['ngaysinh']),"d / m / Y");?></td>
							<td><?= $student['lop_id'];?></td>
							<td><?= $student['sdt'];?></td>
							<td><?= $student['quequan'];?></td>
							<td>
								<a class="btn btn-primary" href="sv-sua.php?id=<?= $student['id']?>">Sửa</a>
								<a class="btn btn-primary" href="sv-xoa.php?id=<?= $student['id']?>">Xóa</a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
					<tfoot>
						<tr>
							<td>
								<a class="btn btn-primary" href="sv-them.php">Thêm Sinh viên</a>
								<a class="btn btn-primary" href="index.php">Quay lại</a>
							</td>
						</tr>
					</tfoot>
				</table>

				<ul class="pagination">
					<?php if ($page > 1): ?>
						<li><a href="<?= $url;?>page=<?= $page - 1;?>">&laquo;</a></li>
					<?php endif ?>

					<?php for ($i=1; $i <= $totalPage; $i++) { ?>
						<li class="<?= $page == $i ? 'active' : ''?>">
							<a href="<?= $url;?>page=<?= $i;?>"><?= $i;?></a>
						</li>
					<?php } ?>

					<?php if ($page < $totalPage): ?>
						<li><a href="<?= $url;?>page=<?= $page + 1;?>">&raquo;</a></li>
					<?php endif ?>
				</ul>

			</div>
		</div>
	</div>
</body>
</html>