
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Phương trình bậc 2</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<form action="" method="POST" role="form">
		<!-- <legend>Form title</legend>
			
		<div class="form-group">
			<label for="">label</label>
			<input type="text" class="form-control" id="" placeholder="Input field">
		</div> -->
	
		<table width="250">
			<caption>Giải phương trình bậc hai: ax<sup>2</sup>+bx+c = 0</caption>
			<tr>
				<td>Số a</td>
				<td><input type="text" name="soA" id="soA" /></td>
			</tr>
			<tr>
				<td>Số b</td>
				<td><input type="text" name="soB" id="soB" /></td>
			</tr>
			<tr>
				<td>Số c</td>
				<td><input type="text" name="soC" id="soC" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="giaiPt" value="Giải phương trình"></td>
			</tr>
		</table>
	
		<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
		<?php 
// kiểm tra user click giaiPt
if (isset($_POST['giaiPt'])) {
	# Lấy tất cả thông tin nhập từ form
	$a = $_POST["soA"];
	$b = $_POST["soB"];
	$c = $_POST["soC"];

	# kiểm tra số nhập vào trên form
	if ($a == 0) {
		if ($b == 0) {
			if ($c == 0) {
				echo 'Phương trình ' . $a . 'x<sup>2</sup> + ' . $b . 'x + ' . $c . ' = 0 có vô số nghiệm.';
			} else {
				echo 'Phương trình ' . $a . 'x<sup>2</sup> + ' . $b . 'x + ' . $c . ' = 0 vô nghiệm.';
			}
		} else {
			echo 'Phương trình ' . $a . 'x<sup>2</sup> + ' . $b . 'x + ' . $c . ' = 0 có nghiệm là: <br/> x = ' . $c / $b;
		}
	} else {
		// Trường hợp a,b,c <> 0
		$delta = $b * $b - 4 * $a * $c;
		// delta > 0 phương trình có 2 nghiệm phân biệt
		if ($delta > 0) {
			$x1 = (- $b + sqrt($delta)) / (2 * $a);
			$x2 = (- $b - sqrt($delta)) / (2 * $a);
			echo 'Nghiệm của phương trình: ' . $a . 'x<sup>2</sup> + ' . $b . 'x + ' . $c . ' = 0<br/>';
			echo "x1 = $x1<br/>";
			echo "x2 = $x2<br/>";
		} elseif ($delta == 0) {	// delta == 0 pt có nghiệm kép
			$x= - $b / (2 * $a);
			echo "phương trình có nghiệm kép: x = $x<br/>";
		} else {	// delta < 0 ptr vô nghiệm
			echo 'Phương trình vô nghiệm';
		}
	}
}
 ?>
	</form>
</body>
</html>