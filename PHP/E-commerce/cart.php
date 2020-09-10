<?php 
include 'topmenu.php';
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
include 'connect.php';
$message = "";
$quantity = "";
$action = "";
$query = "";

if (isset($_POST['quantity'])) {
	$quantity = trim($_POST['quantity']); // lấy số lượng từ POST
}
if ($quantity == '') { // nếu không SET thì tự đặt quantity=1
	$quantity = 1;
}

if ($quantity <= 0) { // số lượng không âm
	echo "Quantity value is invalid. ";
	echo "Go back and enter a valid value";
} else {
	if (isset($_REQUEST['icode'])) {
		$itemcode = $_REQUEST['icode'];
	}
	if (isset($_REQUEST['iname'])) {
		$itemname = $_REQUEST['iname'];
	}
	if (isset($_REQUEST['iprice'])) {
		$price = $_REQUEST['iprice'];
	}
	if (isset($_REQUEST['modified_quantity'])) {
		$modifiedQuantity = $_REQUEST['modified_quantity'];
	}
	$sess = session_id(); // biến lưa id phiên
	if (isset($_REQUEST['action'])) {
		$action = $_REQUEST['action']; // lấy action từ REQUEST
	}
	
	switch ($action) {
		case "add": // nếu action là thêm
			$query = "SELECT * FROM cart WHERE cart_sess = '$sess' AND cart_itemcode like '$itemcode'";
			$result = mysqli_query($connect, $query) or die(mysql_error());
			if (mysqli_num_rows($result) == 1) {
				$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				$qt = $row['cart_quantity'];
				$qt = $qt + $quantity;
				$query = "UPDATE cart SET cart_quantity=$qt WHERE cart_sess='$sess' AND cart_itemcode like '$itemcode'";
				$result = mysqli_query($connect, $query) or die(mysql_error());
			} else {
				$query = "INSERT INTO cart (cart_sess, cart_quantity, cart_itemcode, cart_itemname, cart_price) VALUES ('$sess', $quantity, '$itemcode', '$itemname', '$price')";
				$message = "<div align=\"center\"><strong>Item added.</strong></div>";
			}
			break;
		
		case "change":
			if ($modifiedQuantity == 0) {
				$query = "DELETE FROM cart WHERE cart_sess = '$sess' AND cart_itemcode like '$itemcode'";
				$message = "<div align=\"center\"><strong>Item deleted.</strong></div>"
			} else {
				if ($modifiedQuantity < 0) {
					echo "Invalid quantity entered";
				} else {
					$query = "UPDATE cart SET cart_quantity = $modifiedQuantity WHERE cart_sess = '$sess' AND cart_itemcode like '$itemcode'";
					$message = "<div style=\"width=200px; margin:auto;\">Quantity changed.</div>";
				}
			}
			break;

		case "delete":
			$query = "DELETE FROM cart WHERE cart_sess = '$sess' AND cart_itemcode like '$itemcode'";
			$message = "<div style=\"width=200px; margin:auto;\">Item deleted.</div>";
			break;
		case "empty":
			$query = "DELETE FROM cart WHERE cart_sess = '$sess'";
			break;
	}

	if ($query != "") {
		$results = mysqli_query($connect, $query) or die(mysql_error());
		echo $message;
	}
	include 'showcart.php';
	echo "<script lang=\"javascript\">updateCart();</script>"
}

 ?>
