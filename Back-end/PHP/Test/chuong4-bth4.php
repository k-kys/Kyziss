<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nhập n in ra tổng $tong+=1/$n</title>
</head>
<body>
	<form action="#" method="post">
		<div>
			<label for="">Nhập n:</label>
			<input type="number" name="n"/>
		</div>
	
		<div>
			<input type="submit" value="Submit" />
		</div>
	</form>
	<?php 
		if (isset($_POST['n'])) {
			$n=$_POST['n'];
			$tong=0;
			for ($i=1; $i < $n; $i++) { 
				echo "1/$i + ";
				$tong+=1/$i;
			}
			if ($i==$n) {
				echo "1/$i";
				$tong+=1/$i;
			}
			echo "<br/>Kết quả: ".$tong;
		}
	 ?>
</body>
</html>