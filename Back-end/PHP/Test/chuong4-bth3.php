<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tính giai thừa</title>
</head>
<body>
	<form method="post">
		<div>
			<label>Nhập số n: </label>
			<input type="number" name="n">
		</div>
		<input type="submit" name="submit" value="Tính">
	</form>
	<?php 
		if (isset($_POST['submit'])) {
			//lâý giá trị trên form
			$n=$_POST['n'];
			$gt=1;
			echo "```````````````````````<br>";
			echo "Giai thừa của: <br>";
			for ($i=1; $i < $n ; $i++) { 
				$gt*=$i;
				echo $i." * ";
			}
			if ($i==$n) {
					echo $i;
					$gt*=$i;
				}
			echo "<br>là: ".$gt;
		}
	 ?>
</body>
</html>