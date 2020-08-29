<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đổi màu kí tự đầu tiên</title>
</head>
<body>
	<?php 
		$text = 'VietJack Team';
		$text = preg_replace('/(\b[a-z])/i', '<span style="color: red;">\1</span>', $text);
		echo $text;
	 ?>
</body>
</html>