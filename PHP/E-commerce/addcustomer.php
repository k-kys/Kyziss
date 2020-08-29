<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add customer</title>
</head>
<body>
	Email:<?= $_POST["email_address"]?> <br/>
	Pass:<?= $_POST["password"]?> <br/>
	rePass:<?= $_POST["re_password"]?> <br/>
	Complete Name:<?= $_POST["complete_name"]?> <br>
	Address 1:<?= $_POST["address1"]?> <br>
	Address 2:<?= $_POST["address2"]?> <br>
	City:<?= $_POST["city"]?> <br>
	State:<?= $_POST["state"]?> <br>
	Country:<?= $_POST["country"]?> <br>
	Zip Code:<?= $_POST["zip_code"]?> <br>
	Phone No:<?= $_POST["phone_no"]?> <br>
</body>
</html>