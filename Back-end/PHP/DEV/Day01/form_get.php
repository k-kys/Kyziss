<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Login</title>
</head>
<body>
	<?php 
		//Sử dụng biến $_POST
		//Lấy dữ liệu trên form
		if(isset($_GET['btnDangNhap'])){
			$tk=$_GET['tenDangNhap'];
			$mk=$_GET['matKhau'];

			echo "<h1> Welcome to, $tk </h1>";
			echo "<p> Mật khẩu của ông là: $mk";
		}
		

	?>
	<form action="" method="get" name="frmDangNhap" id="frmDangNhap">
		<label for="tenDangNhap">Tên đăng nhập:</label>
		<input type="text" name="tenDangNhap" id="tenDangNhap">
		<br>
		<label for="matKhau">Mật khẩu:</label>
		<input type="password" name="matKhau" id="matKhau">
		<br>
		<input type="submit" value="Đăng nhập" name="btnDangNhap">
	</form>
</body>
</html>