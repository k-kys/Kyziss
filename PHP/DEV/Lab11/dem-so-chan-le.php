<?php 
if (isset($_POST["submit"])) {
	$soChan = $soLe = "";
	$tongChan = $tongLe = 0;
	$number = $_POST["number"];
	$i = 1;
	while ($i <= $number) {
		if ($i % 2 == 0) {
			$soChan .= $i . ",";
			$tongChan += $i;
		} else {
			$soLe .= $i . ",";
			$tongLe += $i;
		}
		$i++;
	}

	echo "Danh sách các số Chẵn: $soChan <br/>";
	echo "Tổng các số Chẵn: $tongChan <br/>";
	echo "Danh sách các số Lẻ: $soLe <br/>";
	echo "Tổng các số Lẻ: $tongLe <br/>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đếm số chẵn lẻ</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<form action="" method="POST" role="form">
			<legend>Hiển thị danh sách số chẵn lẻ và tổng tương ứng</legend>
		
			<div class="form-group">
				<label for="">Nhập số bất kỳ</label>
				<input type="text" class="form-control" name="number" id="number" placeholder="Số bất kỳ">
			</div>
		
			
		
			<button type="submit" class="btn btn-primary" name="submit">Submit</button>
		</form>
	</div>
</body>
</html>