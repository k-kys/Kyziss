<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lấy URL trong PHP</title>
</head>
<body>
	<?php 
		$url = 'https://vietjack.com/bai-tap-php/lay-url-trong-php.jsp';
		$url = parse_url($url);

		echo 'Scheme : ' . $url['scheme'] . '<br/>';
		echo 'Host : ' . $url['host'] . '<br/>';
		echo 'Path : ' . $url['path'] . '<br/>';
	 ?>
</body>
</html>