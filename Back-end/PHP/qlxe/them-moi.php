<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm mới thông tin xe</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form action="action-them-moi.php" method="POST" role="form">
					<legend>Thêm mới thông tin xe</legend>
				
					<!-- <div class="form-group">
						<label for="">Mã xe</label>
						<input type="text" class="form-control" name="maxe" id="" placeholder="Mã xe">
					</div> -->

					<div class="form-group">
						<label for="">Tên xe</label>
						<input type="text" class="form-control" name="tenxe" id="" placeholder="Tên xe">
					</div>

					<div class="form-group">
						<label for="">Đơn giá</label>
						<input type="text" class="form-control" name="dongia" id="" placeholder="Đơn giá">
					</div>

					<div class="form-group">
						<label for="">Mô tả</label>
						<input type="text" class="form-control" name="mota" id="" placeholder="Mô tả">
					</div>

					<div class="form-group">
						<label for="">Năm sản xuất</label>
						<input type="text" class="form-control" name="namsx" id="" placeholder="Năm sản xuất">
					</div>
				
					
				
					<button type="submit" class="btn btn-primary" name="btnThemMoi">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>