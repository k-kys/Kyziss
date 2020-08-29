<?php 
$thang = '';
if (isset($_POST["submit"])) {
	$month = (int)$_POST["thang"];
	switch ($month) {
		case 1:
			$thang .= "Tháng giêng";
			break;
		case 2:
			$thang .= "Tháng hai";
			break;
		case 3:
			$thang .= "Tháng ba";
			break;
		case 4:
			$thang .= "Tháng tư";
			break;
		case 5:
			$thang .= "Tháng năm";
			break;
		case 6:
			$thang .= "Tháng sáu";
			break;
		case 7:
			$thang .= "Tháng bảy";
			break;
		case 8:
			$thang .= "Tháng tám";
			break;
		case 9:
			$thang .= "Tháng chín";
			break;
		case 10:
			$thang .= "Tháng mười";
			break;
		case 11:
			$thang .= "Tháng mười một";
			break;
		default:
			$thang .= "Tháng chạp";
			break;
	}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chuyển số tháng sang dạng chữ</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
	<form action="" method="POST" role="form">
		<legend>Nhập vào số tháng chuyển thành chữ</legend>

		<div>
			<?php if($thang) { ?>
			<h3>Bạn nhập vào : <?php echo $thang; } ?></h3>
		</div>
	
		<div class="form-group">
			<label for="">Số tháng</label>
			<input type="text" class="form-control" name="thang" id="thang" placeholder="Nhập vào số tháng">
		</div>
	
		
	
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>
	</form>
	</div>
</body>
</html>