<?php
session_start();
if (isset($_SESSION['loginSuccess']) && $_SESSION['loginSuccess'] == 1) {
	header('Location: index.php');
}
if (isset($_POST['userName'])) {
	$username = $_POST['userName'];
	$password = $_POST['Password'];
	if ($username == 'admin' && $password == 'admin') {
		$_SESSION['loginSuccess'] = 1;
		$_SESSION['username'] = $username;
		header('Location: index.php');
	} else {
		$loginSuccess = false;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<?php include 'header.php'; ?>
	<div class="container">
		<form action="login.php" method="POST" role="form">
			<legend><h2>Đăng nhập</h2></legend>

			<?php
			if (isset($loginSuccess)) {
				echo "Lỗi đăng nhập";
			}
			?>

			<div class="form-group">
				<label for="">User Name</label>
				<input type="text" class="form-control" name="userName" id="" placeholder="User Name">
			</div>

			<div class="form-group">
				<label for="">Password</label>
				<input type="text" class="form-control" name="Password" id="" placeholder="Password">
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		<marquee behavior="" direction=""><b>Trần Quang Khương</b></marquee>
	</div>
</body>
</html>