<?php 
if (session_status() == PHP_SESSION_NONE) { //1: nếu chưa bắt đầu sẽ gọi phiên mới
	session_start();
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	$_SESSION["username"] = "John"; // 2: đặt tên username thành John
	$_SESSION["cartquantity"] = 3;
	$_SESSION["cartprice"] = 19.99;
	 ?>
	 Finish with Shpping ? <br/><hr>
	 Click <a href="sessionscript2.php">View Cart</a> link to view the quantity and amount of the products selected in the cart.
</body>
</html>