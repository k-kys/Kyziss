<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang được gọi từ http hay https</title>
</head>
<body>
	<?php 
		if (!empty($_SERVER['HTTPS'])) {
			echo 'Trang được gọi từ https.';
		} else {
			echo 'Trang được gọi từ http.';
		}
	 ?>
</body>
</html>