
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tìm kiếm thông tin xe</title>
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
					<legend>Tìm kiếm thông tin  xe (theo Tên xe)</legend>

					<div class="form-group">
						<label for="">Tên xe</label>
						<input type="text" class="form-control" name="tenxe" id="" placeholder="Nhập Tên xe ...">
					</div>
					<button type="submit" class="btn btn-primary" name="submit">Submit</button>
				</form>

				<hr>

				<?php
				if (isset($_POST['submit'])) {
					include 'connect.php';
					$tenxe = $_POST['tenxe'];
					$sql = "SELECT * FROM xe WHERE tenxe LIKE '%{$tenxe}%';";
					$result = $ketnoi->query($sql);
					?>

					<table class="table table-striped table-hover">
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
							<?php while($row = $result->fetch_assoc()) { ?>
								<tr>
									<td><?= $row['maxe']; ?></td>
									<td><?= $row['tenxe']; ?></td>
									<td><?= $row['dongia']; ?></td>
									<td><?= $row['mota']; ?></td>
									<td><?= $row['namsx']; ?></td>
									<td><?= $row['namsx'] > 2001 ? 'Bảo hành 3 năm' : 'Bảo hành 2 năm'; ?></td>
									<!-- <td>
										<a class="btn btn-primary" href="xoa.php?maxe=<?= $key['maxe']; ?>">Xóa</a>
									</td> -->
								</tr>
							<?php } ?>
						</tbody>
					</table>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</body>
</html>