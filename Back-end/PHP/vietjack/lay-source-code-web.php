<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lấy source code 1 trang web</title>
</head>
<body>
	<?php 
		$all_lines = file('https://khuong2k.blogspot.com/');
		foreach ($all_lines as $line_num => $line) {
			echo "Dòng {$line_num}: " . htmlspecialchars($line) . '<br/>';
		}
	 ?>
</body>
</html>