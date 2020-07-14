<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thông báo đăng ký</title>
</head>
<body>
	<?php 
	include 'connect.php';
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$date = date('Y-m-d H:i:s'); //biến lấy thời gian hiện tại

		$hashedPassword = md5($password);

		//$conn = new mysqli("localhost", "root", "", "dev1909");

		$sql = "INSERT INTO users(username, password, gender, address, created_at) VALUES ('$username','$hashedPassword','$gender','$address','$date')";

		if ($conn->query($sql) === true) {
			echo '<h2>Đăng ký thành công</h2>';
		} else {
			echo '<h2>Đăng ký không thành công</h2>';
		}

		$conn->close();
	}
	?>
	<hr>
	<input type="button" name="back" value="Quay lại Đăng ký" onclick="location.href='../Day07/form.php'">
	<br>
	<br>
	<input type="button" name="next" value="Đến trang Index" onclick="location.href='../Day07/index.php'">
	

</body>
</html>

