<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>3 số tạo thành cạnh của tam giác</title>
</head>
<body>
	<form action="#" method="post">
		<div>
			<label for="">Text Input a:</label>
			<input type="number" name="a" id="a" value="" tabindex="1" />
			<br/>
			<label for="">Text Input b:</label>
			<input type="number" name="b" id="b" value="" tabindex="2" />
			<br>
			<label for="">Text Input c:</label>
			<input type="number" name="c" id="c" value="" tabindex="3" />
		</div>
		<div>
			<input type="submit" value="Submit" />
		</div>
	</form>
	<?php 
		if (isset($_POST['a'], $_POST['b'], $_POST['c'])) {
			$a=$_POST['a'];
			$b=$_POST['b'];
			$c=$_POST['c'];
			if ($a<$b+$c || $b<$a+$c || $c<$a+$b ) {
				if (($a==$b)&&($b==$c)&&($c==$a)) {
					echo "Đây là tam giác đều";
				} else if (($a==$b) || ($b==$c) || ($c==$a)) {
					echo "Đây là tam giác cân";
				} else if (($a*$a==$b*$b+$c*$c) || ($b*$b==$a*$a+$c*$c) || ($c*$c==$b*$b+$a*$a)) {
					echo "Đây là tam giác vuông";
				} else if(($a*$a > $b*$b+$c*$c) || ($b*$b > $a*$a+$c*$c) || ($c*$c > $a*$a+$b*$b)) {
	            	echo "Đây là tam giác tù";
	        	} else {
	            	echo "Đây là tam giác nhọn";
				}
			} else {
				echo "Không phải một tam giác";
			}
		}
	 ?>
</body>
</html>