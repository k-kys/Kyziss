<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<title>Item list</title>
</head>
<body>
	<?php 
	include 'menu.php';
	include 'connect.php';
	$category = $_REQUEST['category'];
	$query = "SELECT item_code, item_name, description, imagename, price FROM products WHERE category LIKE '$category' ORDER BY item_code";
	$results = mysqli_query($connect, $query) or die(mysql_error());
	$x = 1;
	?>
	<table border="0" align="center">
		<tr>
			<?php 
			while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
	 				if ($x <= 3) { //chỉ hiển thị ba sản phẩm trong một dòng
	 					$x += 1;
	 					extract($row);
	 					?>
	 					<td style="padding-right: 15px">
	 						<a href="itemdetails.php?itemcode=$item_code"> <!-- hiển thị thông tin sản phẩm chi tiết -->
	 							<img src="<?= $imagename ?>" style="max-width: 220px; max-height: 240px; width: auto; height: auto;"/> <br/>
	 							<?= $item_name ?> <br/>
	 						</a>
	 						<?= $price ?> <br/>
	 					</td>
	 					<?php 
	 				} else {
	 					$x = 1;
	 					?>
	 				</tr><tr>
	 					<?php
	 				}
	 				
	 			}
	 			?>
	 		</table>
	 	</body>
	 	</html>