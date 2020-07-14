<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lấy tên file hiên tại đang lưu code php</title>
</head>
<body>
	<?php 
		$tenFileHienTai = basename($_SERVER['PHP_SELF']);
		echo "Tên file hiện tại là: <code> $tenFileHienTai </code>";
	 ?>
</body>
</html>