<?php
include '../Day07/connect.php';

$username = null;
if (!empty($_GET['page'])) {	// nếu có biến page
		$page = $_GET['page'];
	} else {		// nếu không có biến $page
		$page = 1;
	}
# KIỂM TRA DỮ LIỆU NHẬP TỪ FORM
if (isset($_GET['username'])) {
	$username = $_GET['username'];	// lấy giá trị username để truy vấn
}

	# ĐẶT BIẾN $limit $offset ĐỂ PHÂN TRANG
	$limit = 2;
	$offset = ($page - 1) * $limit;

	// # CODE LỆNH TÌM KIẾM
	// $sqlTimkiem = "SELECT * from users where username like '%{$username}%' limit {$limit} offset {$offset}";
	// $resultTimkiem = $conn->query($sqlTimkiem);		// thực thi query SQL
	// $users = [];	// tạo mảng rỗng
	// if ($resultTimkiem->num_rows > 0) {		// nếu có bản ghi
	// 	while ($row = $resultTimkiem->fetch_assoc()) {	// lấy dữ liệu trong query
	// 		$users[] = $row;	// đưa dữ liệu vào mảng rỗng vừa tạo
	// 	}
	// } else {
	// 	echo 'No result.';
	// }
$url = 'search.php?';
	# CODE LỆNH PHÂN TRANG
	$sqlTotal = "SELECT count(*) as total FROM users where username like '%{$username}%'";
	if ($username != null) {
		$sqlTotal = "SELECT count(*) as total FROM users where username like '%{$username}%'";
		$sql = "SELECT * from users Where username like '%{$username}%' limit {$limit} offset {$offset};";
		$url = 'search.php?username=' . $username . '&';
	}
	$resultTotal = $conn->query($sqlTotal);		// truy vấn lấy tổng số bản ghi
	$totalRecord = $resultTotal->fetch_assoc()['total'];	// tổng bản ghi
	$totalPage = ceil($totalRecord / $limit);	// tổng số trang = trần(tổng bản ghi / giới hạn)

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tìm kiếm UserName</title>
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
					<legend><h1>Result Search</h1></legend>
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
							</tr>
						<?php } ?>
					</tbody>
				</table>
				<ul class="pagination">
					<?php if ($page > 1): ?>
						<li><a href="search.php?<?= $url;?>page=<?= $page - 1;?>">&laquo;</a></li>
					<?php endif ?>

					<?php for ($i=1; $i <= $totalPage; $i++) { ?>
						<li class="<?= $page == $i ? 'active' : ''?>">
							<a href="search.php?<?= $url;?>page=<?= $i;?>"><?= $i;?></a>
						</li>
					<?php } ?>

					<?php if ($page < $totalPage): ?>
						<li><a href="search.php?<?= $url;?>page=<?= $page + 1;?>">&raquo;</a></li>
					<?php endif ?>
				</ul>

			</div>
		</div>
	</div>
</body>
</html>