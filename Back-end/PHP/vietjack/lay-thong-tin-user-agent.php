<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lấy thông tin User Agent</title>
</head>
<body>
	<?php 
		echo "Thông tin User Agent bạn đang sử dụng là: " . $_SERVER['HTTP_USER_AGENT'];
	 ?>
</body>
</html>