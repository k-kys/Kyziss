<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script type="text/javascript" src="https://www.2checkout.com/checkout/api/2co.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script>
		var successCallback = function(data) {
			var myForm = document.getElementById('payment-form');
			// set the token as the value for the token input
			myForm.token.value = data.response.token.token;
			myForm.submit();
		};
		// called when token creation fails
		var errorCallback = function(data) {
			// retry the token request if ajax call fails
			if (data.errorCode === 200) {
				call tokenRequest();
			} else {
				alert(data.errorMsg);
			}
		};
		var tokenRequest = function() {
			// setup token request arguments
			var args = {
				sellerId : "102626791",
				publishableKey:  "E0F6517A-CFCF-11E3-8295-A7DD28100996",
				ccNo: $("#card-number").val(),
				cvv: $("#card-cvc").val(),
				expMonth: $("#card-expiry-month").val(),
				expYear: $("#card-expiry-year").val()
			};
			// make the token request
			TCO.requestToken(successCallback, errorCallback, args);
		};
		$(function(){
			//pull in the public encryption key for our enviroment
			TCO.loadPubkey('production');
			$("#payment-form").submit(function (e) {
				// call our token request function
				tokenRequest();
				// prevent form from submitting
				return false;
			});
		});
	</script>
</head>
<body>
	<?php 
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	if (isset($_SESSION['cartamount'])) {
		$cartAmount = $_SESSION['cartamount'];
	}

	$complete_name = $_POST['complete_name'];
	$address1 = $_POST['address1'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zipcode = $_POST['zipcode'];
	$country = $_POST['country'];
	$shipping_address1 = $_POST['shipping_address1'];
	$shipping_address2 = $_POST['shipping_address2'];
	$shipping_city = $_POST['shipping_city'];
	$shipping_state = $_POST['shipping_state'];
	$shipping_country = $_POST['shipping_country'];
	$shipping_zipcode = $_POST['shipping_zipcode'];
	$phone_no = $_POST['phone_no'];

	$_SESSION['complete_name'] =$complete_name;
	$_SESSION['address1'] =$address1;
	$_SESSION['city'] =$city;
	$_SESSION['state'] =$state;
	$_SESSION['zipcode'] =$zipcode;
	$_SESSION['country'] =$country;
	$_SESSION['shipping_address1'] =$shipping_address1;
	$_SESSION['shipping_address2'] =$shipping_address2;
	$_SESSION['shipping_city'] =$shipping_city;
	$_SESSION['shipping_state'] =$shipping_state;
	$_SESSION['shipping_country'] =$shipping_country;
	$_SESSION['shipping_zipcode'] =$shipping_zipcode;
	$_SESSION['phone_no'] =$phone_no;

	 ?>

	 <span class="payment-errors"></span>
	 <form action="placeorder.php" method="POST" id="payment-form">
	 	<input type="hidden" name="token" id="token" value="">
	 	<table border="0" cellspacing="1" cellpadding="3">
	 		<tr>
	 			<td colspan="2" align="center">Online Payment Form</td>
	 		</tr>
	 		<tr>
	 			<td>Card Number</td>
	 			<td><input type="text" size="20" id="card-number" autocomplete="off"></td>
	 		</tr>
	 		<tr>
	 			<td>CVC</td>
	 			<td><input type="text" size="4" id="card-cvc" autocomplete="off"></td>
	 		</tr>
	 		<tr>
	 			<td>Full Name</td>
	 			<td><input type="text" size="80" id="name" autocomplete="off"></td>
	 		</tr>
	 		<tr>
	 			<td>Expiration (MM/YYY)</td>
	 			<td><input type="text" size="2" id="card-expiry-month"><input type="text" size="4" id="card-expiry-year"></td>
	 		</tr>
	 		<tr>
	 			<td>Amount to Pay:</td>
	 			<td><?=$cartamount;?></td>
	 		</tr>
	 		<tr>
	 			<td colspan="2" align="center"><input type="submit" name="submit" value="Submit" onclick="formSubmit()"></td>
	 		</tr>
	 	</table>
	 </form>
</body>
</html>