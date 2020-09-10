<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Items List</title>
</head>
<body>
	<?php 
	include 'connect.php';
	$query = "SELECT item_code, item_name, description, imagename, price FROM products";
	$results = mysqli_query($connect, $query) or die(mysql_error());
	$x = 1;
	?>
	<table border="0" align="center">
		<tr>
			<?php 
			while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
				if ($x <= 3) {
					$x += 1;
					extract($row);
					?>
					<td style="padding-right: 15px">
						<a href="itemdetails.php?itemcode=<?= $item_code; ?>">
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