<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add customer</title>
</head>
<body>
	<?php 
	$connect = mysqli_connect("localhost", "root", "", "shopping") or die("Please, check the server connection.");

	$emailAdress = $_POST['email_address'];
	$password = md5($_POST["password"]);
	$repassword = md5($_POST["re_password"]);
	$completeName = $_POST['complete_name'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$zipcode = $_POST['zip_code'];
	$phoneNo = $_POST['phone_no'];

	$sql = "INSERT INTO customers(email_address, password, complete_name, address1, address2, city, state, country, zip_code, phone_no) VALUES ('$emailAdress', '$password', '$completeName', '$address1', '$address2', '$city', '$state', '$country', '$zipcode', '$phoneNo')";

	$result = mysqli_query($connect, $sql) or die(mysql_error());

	if ($result) {
		?>
		<p>Dear, <?= $completeName ?> your account is successfully created. </p>
		<?php
	} else {
		echo "Some error occurred. Please use different email address";
	}
	 
	 ?>
</body>
</html>