<?php 
include 'topmenu.php';
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
include 'connect.php';
$cartAmount = 0;
$cartAmount = $_POST['cartamount'];
$_SESSION['cartamount'] = $cartAmount;

// email và password trong mảng $_SESSION được lấy trong case chúng được đặt bởi bất kỳ trang web nào trước đó
if (isset($_SESSION['email_address'])) {
	$email_address = $_SESSION['email_address'];
	echo "Welcome " . $email_address . "<br/>";
}

if (isset($_SESSION['password'])) {
	$password = $_SESSION['password'];
}


// Nếu e-mail và pass được SET trong mảng $_SESSION (user đã đăng nhập), thì cung cấp hai tùy chọn. 
// - cung cấp thông tin vận chuyển nếu user mua sắm xong 
// -  hoặc user có thể tiếp tục mua sắm bằng cách chọn danh mục các mặt hàng từ menu trên cùng. 
// Nhưng nếu e-mail và pass không được đặt trong mảng $_SESSION, user được yêu cầu đăng nhập hoặc tạo tài khoản
if ((isset($_SESSION['email_address']) && $_SESSION['email_address'] != "") || (isset($_SESSION['password']) && $_SESSION['password'] != "")) {
	$sess = session_id();
	$query = "SELECT * FROM cart WHERE cart_sess = '$sess'";
	$result = mysqli_query($connect, $query) or die(mysql_error());
	if (mysqli_num_rows($result) >= 1) {
		echo "If you have finished shopping ";
		echo "<a href=\"shipping_info.php\">Click here</a> to supply Shipping infomation ";
		echo "Or You can do more purchasing by selecting items from menu ";
	} else {
		echo "You can do purchasing by selecting items from menu on left side";
	}
} else {
	 ?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<h3>Not Logged in yet</h3>
	<p>
		You are currently not logged into our system. <br/>
		You can do purchasing only if you are logged in. <br/>
		If you have already registered, <a href="signin.php">Click here</a> to login, or if would like to create an account, <a href="create_account.php">Click here</a> to register.
	</p>
</body>
</html>
<?php 
} ?>