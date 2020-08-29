<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>

	<form action="form-xuly.php" method="POST" role="form">
		<div class="container-fluid">
			
			<legend>Đăng ký</legend>

			<div class="form-group">
				<label for="">Username:</label>
				<input type="text" class="form-control" name="username" id="username" placeholder="User Name">
			</div>

			<div class="form-group">
				<label for="">Password:</label>
				<input type="password" class="form-control" name="password" id="password" placeholder="Password">
			</div>

			<div class="form-group">
				<div class="radio">
					<label>
						<input type="radio" name="gender" id="inputGender" value="1" checked="checked">
						Nam
					</label>
					<label>
						<input type="radio" name="gender" id="inputGender" value="0" >
						Nữ
					</label>
				</div>
			</div>

			<div class="form-group">
				<label for="">Address:</label>
				<input type="text" class="form-control" name="address" id="address" placeholder="Address">
			</div>

			<button type="submit" class="btn btn-primary" name="submit">Submit</button>
		
			
		</div>
	</form>
</body>
</html>