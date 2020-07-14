<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Khi Click vào menu nào thì actived chỗ đó</title>
	<link rel="stylesheet" type="text/css" href="menu-actived.css">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<?php 
	// khai báo association array
	$arrMenu = array(
		"home" => "Trang chủ",
		"about" => "Giới thiệu",
		"product" => "Sản phẩm",
		"service" => "Dịch vụ",
		"contact" => "Liên hệ"
	);
	 ?>

	 <div id="main">
	 	<nav>
	 		<ul>
	 			<?php 
	 			// khai báo biến đếm
	 			$i = 0;
	 			// duyệt mảng từ đầu đến cuối
	 			foreach ($arrMenu as $key => $value) {
	 				$i++; // tăng i lên 1 sau mỗi lần lặp
	 				$selected = ""; // khai báo biến selected

		 			// kiểm tra nếu không lấy dc biến GET["view"] or lần lặp đầu
		 			if (!isset($_GET["view"]) && $i == 1) {
		 				// gán biến selected với giá trị
		 				$selected = 'class ="selected"';
		 			}

		 			// nếu lấy dc gtri biến GET và biến GET bằng với Key của array
		 			elseif (isset($_GET["view"]) && $_GET["view"] == $key) {
		 				$selected = 'class ="selected"';
		 			}
	 			 ?>
	 			<li class="active">
	 				<a <?= $selected; ?> href="menu-actived.php?view=<?= $key; ?>" ><?= $value;?></a>
	 			</li>
	 		<?php } ?>
	 		</ul>
	 	</nav>
	 </div>
</body>
</html>