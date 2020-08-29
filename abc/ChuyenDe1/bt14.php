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
			<h2>Cho 2 danh sách A và B, hãy đưa ra phần hợp của 2 danh sách đó</h2>
			

			<?php 
			$dsA = [1,2,3,4,5];
			$dsB = [4,5,6,7,8];
			print_r($dsA); echo "<br/>";
			print_r($dsB); echo "<br/>";
			$count = 0;
			for ($i=0; $i < count($dsA); $i++) { 
				for ($j=0; $j < count($dsB); $j++) { 
					if ($dsA[$i] == $dsB[$j]) {
						$count++;
					}
				}
				if ($count == 0) {
					$dsBsize = count($dsB) + 1;
					$dsB[$dsBsize - 1] = $dsA[$i];
				}
				$count = 0;
			}
			echo "Hợp của hai mảng là: ";
			print_r($dsB);
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