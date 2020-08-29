<?php 
include 'connect.php';

$sql = "SELECT * FROM lop;";
$result = $conn->query($sql);

if (!empty($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 1;
}

$url = "lop.php?";
$keyword = null;

if (isset($_GET['keyword'])) {
	$keyword = $_GET['keyword'];
}

$limit = 2;
$offset = ($page - 1 ) * $limit;

$sql = "SELECT * FROM lop LIMIT {$limit} OFFSET {$offset};";
$sqlTotal = "SELECT count(*) as total FROM lop;";

if ($keyword != null) {
	$sqlTotal = "SELECT count(*) as total FROM lop WHERE tenlop like '%{$keyword}%';";
	$sql = "SELECT * FROM lop WHERE tenlop like '%{$keyword}%' LIMIT {$limit} OFFSET {$offset};";
	$url = 'lop.php?keyword=' . $keyword . '&';
}

$resultTotal = $conn->query($sqlTotal);
$totalRecord = $resultTotal->fetch_assoc()['total'];
$totalPage = ceil($totalRecord / $limit);

$result = $conn->query($sql);
$classes = [];
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$classes[] = $row;
	}
} else {
	echo 'No result';
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lớp học</title>
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
						<input type="text" class="form-control" name="keyword" id="" placeholder="Nhập tên lớp" value="<?= $keyword;?>">
					</div>

					<button type="submit" class="btn btn-primary">Search</button>
				</form>
				<hr style="border: none; border-bottom: 10px solid red; border-radius: 5px;">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Mã lớp</th>
							<th>Tên lớp</th>
							<th>Địa điểm</th>
							<th>Chức năng</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($classes as $class) { ?>
						<tr>
							<td><?= $class['id'];?></td>
							<td><?= $class['tenlop'];?></td>
							<td><?= $class['diadiem'];?></td>
							<td>
								<a class="btn btn-primary" href="lop-sua.php?id=<?= $class['id']?>">Sửa</a>
								<a class="btn btn-primary" href="lop-xoa.php?id=<?= $class['id']?>">Xóa</a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
					<tfoot>
						<tr>
							<td>
								<a class="btn btn-primary" href="lop-them.php">Thêm lớp</a>
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