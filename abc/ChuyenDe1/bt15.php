<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Title Page</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<h2>Cho một danh sách, hãy cho biết từng giá trị trong danh sách đó xuất hiện bao nhiêu lần</h2>
			

			<?php 
			$ds = [1,2,3,4,5,1,2,3,1,2];
			$mangB = [];
			$dem = 1;
			$count = 0;
			// đếm số lần xuất hiện của 1 phần tử
			for ($i=0; $i < count($ds); $i++) { 
				for ($j = $i + 1; $j < count($ds); $j++) { 
					if ($ds[$i] == $ds[$j]) {
						$dem++;
						$m = $j;
						
						// dồn phần tử về bên trái 1 vị trí
						for ($k = $m + 1; $k < count($ds); $k++) { 
							$ds[$m] = $ds[$k];
							$m++;
						}
						// bỏ phần tử cuối
						array_pop($ds);
					}
				}
				$mangB[$count] = $dem;
				$count++;
				$dem = 1;
			}
			echo "Phần tử ";
			for ($i=0; $i < count($ds); $i++) { 
				echo $ds[$i] . "\t";
			}
			echo "<br/>Số lần : ";
			for ($i=0; $i < count($mangB); $i++) { 
				echo $mangB[$i] . "\t";
			}
			
			?>
		</div>


		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="Hello World"></script>
	</body>
	</html>