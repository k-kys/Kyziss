<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	if (!isset($totalAmount)) {
		$totalAmount = 0;
	}
	$totalQuantity = 0;
	if (!session_id()) {
		session_start();
	}
	include 'connect.php';
	$sessId = session_id();
	$query = "SELECT * FROM cart WHERE cart_sess = '$sessId'"; // truy vấn ktra xem có sp nào trong cart
	$results = mysqli_query($connect, $query) or die(mysql_error());
	if (mysqli_num_rows($results) == 0) {
		echo "<div style=\"width:200px; margin:auto;\">Your cart is empty</div>";
	} else {
		?>
		<table border="1" align="center" cellpadding="5">
			<tr>
				<td>Item Code</td>
				<td>Quantity</td>
				<td>Item Name</td>
				<td>Price</td>
				<td>Total Price</td>
			</tr>
			<?php 
			while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
				extract($row);
				?>
				<tr>
					<td><?= $cart_itemcode; ?></td>
					<td>
						<form method="POST" action="cart.php?action=chang&icode=<?=$cart_itemcode?>">
							<input type="text" name="modified_quantity" size="2" value="<?=$cart_quantity?>">
							
						</td>
						<td><?=$cart_itemname;?></td>
						<td><?=$cart_price?></td>
						<td>
							<?php 
							$totalQuantity += $cart_quantity;
							$totalPrice = number_format($cart_price * $cart_quantity, 2);
							$totalAmount += ($cart_price * $cart_quantity);
							echo $totalPrice;
							?>
						</td>
						<td>
							<input type="submit" name="submit" value="Change quantity">
						</form>
					</td>
					<td>
						<form method="POST" action="cart.php?action=delete&icode=<?=$cart_itemcode?>">
							<input type="submit" name="submit" value="Delete item">
						</form>
					</td>
				</tr>
				<tr>
					<td>Total</td>
					<td><?=$totalQuantity?></td>
					<td></td>
					<td></td>
					<td>
						<?php 
						$totalAmount = number_format($totalAmount, 2);
						echo $totalAmount; ?>
					</td>
				</tr>
			</table><br/>
			<div style="width: 400px; margin: auto;">You currently have <?=$totalQuantity;?> product(s) selectedin your cart</div>
			<table border="0" style="margin: auto">
				<tr>
					<td style="padding: 10px;">
						<form method="POST" action="cart.php?action=empty">
							<input type="submit" name="submit" value="Empty cart" style="font-family: verdana;font-size: 150%;">
						</form>
					</td>
					<td>
						<form method="POST" action="checklogin.php">
							<input type="hidden" name="cartamount" id="cartamount" value="<?=$totalAmount;?>">
							<input type="submit" name="submit" value="Check out" style="font-family: verdana;font-size: 150%;">
						</form>
					</td>
				</tr>
			</table>
			<?php
		}
	}
	
	?>
</body>
</html>