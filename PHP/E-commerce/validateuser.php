<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Validate User</title>
	<script lang="javascript" type="text/javascript">
		function updateUser(username) { // 1: đc gọi khi email và pass hợp lệ
			var ajaxUser = document.getElementById("userinfo"); // 2: hiển thị thông báo chào mừng cùng với tên trong tag span id=userinfo, và hiện liên kết logout
			ajaxUser.innerHTML = "Welcome " + username + "&nbsp;&nbsp;&nbsp;<a href=\"logout.php\">Log out</a>";
		}
	</script>
</head>
<body>
	<?php 
	include 'dd.php';
	include 'topmenu.php';
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	include '../E-commerce/connect.php';
	$emailAdress = $_POST["email_address"];
	$password = md5($_POST["password"]); 
	$query = "SELECT email_address, password, complete_name FROM customers WHERE email_address LIKE '$emailAdress' AND password LIKE '$password'";
	// dd($query);
	$result = mysqli_query($connect, $query) or die(mysql_error()); // 3: xem có hàng nào tồn tại trong bảng khách hàng có chứa địa chỉ e-mail và mật khẩu được nhập
	if (mysqli_num_rows($result) == 1) {
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			extract($row);
			echo "<h2>Welcome " . $complete_name . " to our Shopping Mall </h2><br/>"; // 4: thông báo chào mừng cùng với tên người dùng nếu một hàng như vậy tồn tại
			$_SESSION['email_address'] = $_POST['email_address'];
			$_SESSION['password'] = $_POST['password'];
			echo "<script lang=\"javascript\">updateUser('$complete_name');</script>"; // 5: gọi hàm JavaScript, updateUser, để hiển thị lời chào mừng trong tiêu đề của trang web
		}
	} else {
		?>
		<p>Invalid Email address and/or Password. </p><br/><hr/> <!-- 6: trên màn hình hiển thị thông báo lỗi và các liên kết cho phép người dùng thử đăng nhập lại hoặc tạo tài khoản mới -->
		Not registered ?
		<a href="signup.php">Click here</a> to register. <br/><br/><br/>
		Want to Try again <br/>
		<a href="signin.php">Click here</a> to try Login again. <br/>
		<?php
	}
	

	 ?>
</body>
</html>