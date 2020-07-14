<?php
include 'connect.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if (!empty($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 1;
}

$url = 'index.php?';
$keyword = null;

if (isset($_GET['keyword'])) {
	$keyword = $_GET['keyword'];
}

$limit = 2;
$offset = ($page - 1) * $limit;

$sql = "SELECT * from users limit {$limit} offset {$offset};";
$sqlTotal = "SELECT count(*) as total FROM users ";
// $sql = "SELECT * from users limit {$limit} offset {$offset};";
if ($keyword != null) {
	$sqlTotal = "SELECT count(*) as total FROM users where username like '%{$keyword}%'";
	$sql = "SELECT * from users Where username like '%{$keyword}%' limit {$limit} offset {$offset};";
	$url = 'index.php?keyword=' . $keyword . '&';
}

$resultTotal = $conn->query($sqlTotal);		// truy vấn lấy tổng số bản ghi
$totalRecord = $resultTotal->fetch_assoc()['total'];	// tổng bản ghi
$totalPage = ceil($totalRecord / $limit);

$result = $conn->query($sql);
$users = [];
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$users[] = $row;
	}

} else {
	echo 'No result.';
}
// # PHÂN TRANG
// $sqlTotal = "SELECT count(*) as total FROM users;";
// $resultTotal = $conn->query($sqlTotal);
// $totalRecord = $resultTotal->fetch_assoc()['total'];
// $totalPage = ceil($totalRecord / $limit);
	?>


	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Index</title>
		<!-- Latest compiled and minified CSS & JS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<form action="" method="GET" role="form">
						<legend><h2 style="color: #DFA2F1">Search</h2></legend>

						<div class="form-group">
							<label for="">UserName</label>
							<input type="text" class="form-control" name="keyword" id="" placeholder="Nhập Tên" value="<?= $keyword;?>">
						</div>

						<button type="submit" class="btn btn-primary">Tìm kiếm</button>
					</form>
					<hr style="border: none; border-bottom: 10px solid red; border-radius: 5px;">
					<table class="table table-striped table-hover">
						<legend><h2 style="color: #DFA2F1">Table User</h2></legend>
						<thead>
							<tr>
								<th>ID</th>
								<th>UserName</th>
								<th>Gender</th>
								<th>Address</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							foreach ($users as $user) {
								?>
								<tr>
									<td><?php echo $user['id']; ?></td>
									<td><?php echo $user['username']; ?></td>
									<td><?php echo $user['gender'] == 1 ? 'Male' : 'Female'; ?></td>
									<td><?php echo $user['address']; ?></td>
									<td>
										<a class="btn btn-primary" href="../Day08/edit.php?id=<?php echo $user['id']; ?>">Edit</a>
										<a class="btn btn-primary" href="../Day08/delete.php?id=<?= $user['id'];?>">Delete</a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
						<tfoot>
							<tr>
								<td>
									<a class="btn btn-primary" href="../Day07/form.php">Add</a>
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