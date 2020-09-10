<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Chi tiết sản phẩm</title>
</head>
<body>
	<?php 
	include 'topmenu.php';
	include 'connect.php';
	$code = $_REQUEST['itemcode'];
	$query = "SELECT item_code, item_name, description, imagename, price FROM products WHERE item_code LIKE '$code'";
	$results = mysqli_query($connect, $query) or die(mysqli_error()); // 1: truy cập sp trùng với mã sp
	$row = mysqli_fetch_array($results, MYSQLI_ASSOC);
	extract($row);

	 ?>
	 <table width="100%" cellspacing="0" cellpadding="5">
	 	<tr>
	 		<td style="padding: 3px;" rowspan="6">
	 			<img src="<?= $imagename; ?>" alt="" style="max-width: 200px; max-height: 260px; width: auto; height: auto">
	 		</td>
	 		<td colspan="2" align="center" style="font-family: verdana; font-size: 150%">
	 			<b><?= $item_name; ?></b>
	 		</td>
	 	</tr>
	 	<tr>
	 		<td colspan="2">
	 			<table>
	 				<tr>
	 					<td>
	 						<?php 
	 						$itemname = urlencode($item_name);
	 						$itemprice = $price;
	 						$itemdescription = $description;
	 						$pfquery = "SELECT feature1, feature2, feature3, feature4, feature5, feature6 FROM productfeatures WHERE item_code LIKE '$code'"; // 2: truy cập các cột tính năng sp
	 						$pfresults = mysqli_query($connect, $pfquery);
	 						$pfrow = mysqli_fetch_array($pfresults, MYSQLI_ASSOC);
	 						extract($pfrow);
	 						echo $feature1;
	 						 ?>
	 					</td>
	 					<td>
	 						<?= $feature2; ?>
	 					</td>
	 				</tr>
	 				<tr>
	 					<td><?= $feature3; ?></td>
	 					<td><?= $feature4; ?></td>
	 				</tr>
	 				<tr>
	 					<td><?= $feature5; ?></td>
	 					<td><?= $feature6; ?></td>
	 				</tr>
	 				<tr>
	 					<form method="post" action="cart.php?action=add&icode=$item_code&iname=$itemname&iprice=$itemprice" >
	 						<tr>
	 						<td colspan="2" style="font-family: verdana; font-size: 150%;">
	 							Quantity: <input type="text" name="quantity" size="2"> &nbsp;&nbsp;&nbsp;
	 							Price: <?= $itemprice; ?>
	 						</td>
	 						</tr>
	 						<tr>
	 							<td colspan="2">
	 								<input type="submit" name="buynow" value="Buy now" style="font-size: 150%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 								<input type="submit" name="addtocart" value="Add to Cart" style="font-size: 150%;">
	 							</td>
	 						</tr>
	 					</form>
	 				</tr>
	 			</table>
	 		</td>
	 	</tr>
	 </table>
	 <p style="font-size: 140%;">Description </p>
	 <?= $itemdescription; ?>
</body>
</html>