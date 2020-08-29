<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lấy địa chỉ Client IP trong PHP</title>
</head>
<body>
	<?php 
	// Kiểm tra xem IP có phải từ Share Internet
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ipAddress = $_SERVER['HTTP_CLIENT_IP'];
	}
	// Kiểm tra xem IP có phải từ Proxy
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ipAddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	// Kiểm tra xem IP có phải từ Remote Address
	else {
		$ipAddress = $_SERVER['REMOTE_ADDR'];
	}
	echo "Địa chỉ Client IP là: " . $ipAddress;
	 ?>
</body>
</html>