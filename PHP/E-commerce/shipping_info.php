<?php 
include 'topmenu.php';
if (session_start() == PHP_SESSION_NONE) {
	session_start();
}
if (isset($_SESSION['cartamount'])) {
	$cartAmount = $_SESSION['cartamount'];
}
include 'connect.php';
$email_adress = "";

// e-mail và pass nhập trong Login được lưu trữ trong mảng $_SESSION sẽ được truy xuất và gán cho các biến $email_address và $password
if (isset($_SESSION['email_address'])) {
	$email_address=$_SESSION['email_address'];
}

if (isset($_SESSION['password'])) {
	$password=md5($_SESSION['password']);
}

if ((isset($_SESSION['email_address']) && $_SESSION['email_address'] != "") || (isset($_SESSION['password']) && $_SESSION['password'] != "")) {
	$query = "SELECT * FROM customers where email_address like '$email_address' and password like '$password'"; // lấy tất cả các chi tiết của khách truy cập từ bảng customers
	$results = mysqli_query($connect, $query) or die(mysql_error());
	$row = mysqli_fetch_array($results, MYSQLI_ASSOC);
	extract($row);

 ?>
<!-- 
	Hiển thijthoong tin khách hàng 
User có thể dùng thông tin khi đăng ký tài khoản để nhận sản phẩm, hoặc có thể cung cấp thông tin mới
Sau khi cung cấp thông tin, user click vào nút Supply Payment Infomation để thanh toán
-->
 <form action="purchase.php" method="POST">
 	<table border="0" cellspacing="1" cellpadding="3">
 		<tr>
 			<td colspan="2" align="center">Your infomation available with us:</td>
 		</tr>
 		<tr>
 			<td>Email address:</td>
 			<td><input type="text" size="20" name="email_address" value="<?=$email_address;?>"></td>
 		</tr>
 		<tr>
 			<td>Complete Name:</td>
 			<td><input type="text" size="50" name="complete_name" value="<?=$complete_name;?>"></td>
 		</tr>
 		<tr>
 			<td>Address:</td>
 			<td><input type="text" size="80" name="address1" value="<?=$address1;?>"></td>
 		</tr>
 		<tr>
 			<td></td>
 			<td><input type="text" size="80" name="address2" value="<?=$address2;?>"></td>
 		</tr>
 		<tr>
 			<td>City:</td>
 			<td><input type="text" size="30" name="city" value="<?=$city;?>"></td>
 		</tr>
 		<tr>
 			<td>State:</td>
 			<td><input type="text" size="30" name="state" value="<?=$state;?>"></td>
 		</tr>
 		<tr>
 			<td>Country:</td>
 			<td><input type="text" size="30" name="country" value="<?=$country;?>"></td>
 		</tr>
 		<tr>
 			<td>Zip Code:</td>
 			<td><input type="text" size="20" name="zipcode" value="<?=$zipcode;?>"></td>
 		</tr>
 		<tr>
 			<td>Phone No:</td>
 			<td><input type="text" size="30" name="phone_no" value="<?=$phoneNo;?>"></td>
 		</tr>

 		<tr>
 			<td colspan="2" align="center">Please update shipping infomation if different from the show below: </td>
 		</tr>
 		<tr>
 			<td>Address to deliver at: </td>
 			<td><input type="text" size="80" name="shipping_address1" value="<?=$address1;?>"></td>
 			<td><input type="text" size="80" name="shipping_address2" value="<?=$address2;?>"></td>
 		</tr>
 		<tr>
 			<td>City:</td>
 			<td><input type="text" size="30" name="shipping_city" value="<?=$city;?>"></td>
 		</tr>
 		<tr>
 			<td>State:</td>
 			<td><input type="text" size="30" name="shipping_state" value="<?=$state;?>"></td>
 		</tr>
 		<tr>
 			<td>Country:</td>
 			<td><input type="text" size="30" name="shipping_city" value="<?=$country;?>"></td>
 		</tr>
 		<tr>
 			<td>Zip Code:</td>
 			<td><input type="text" size="20" name="shipping_city" value="<?=$zipcode;?>"></td>
 		</tr>
 		<tr>
 			<td><input type="submit" name="submit" value="Supply Payment Infomation"></td>
 			<td><input type="reset" name="reset" value="Cancel"></td>
 		</tr>
 	</table>
 </form>
 <?php 
 } ?>