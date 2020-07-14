<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$a=4; 
		$b=1;
		if ($a==0) {
			echo 'Phương trình vô nghiệm';
		}else if ($b==0) {
			echo 'x = 0';
		}else {
			$c=($b*(-1))/$a;
			echo 'x = '.$c;
		}
	 ?>
</body>
</html>
