<?php 
$totalQuantity = 0;
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
include 'connect.php';
$sess = session_id();
$query = "SELECT * FROM cart WHERE cart_sess = '$sess'";
$results = mysqli_query($connect, $query) or die(mysql_error());
while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
	extract($row);
	$totalQuantity += $cart_quantity;
}
echo $totalQuantity;
 ?>