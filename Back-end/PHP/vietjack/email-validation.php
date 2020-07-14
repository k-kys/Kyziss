<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kiểm tra email có hợp lệ không</title>
</head>
<body>
	<?php 
		# Truyền vào địa chỉ email hợp lệ/không hợp lệ
		$email = "mail@example.com";
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo '"' . $email . '" = Hợp lệ. <br/>';
		} else {
			echo '"' . $email . '" = Không hợp lệ. <br/>';
		}
	 ?>
</body>
</html>