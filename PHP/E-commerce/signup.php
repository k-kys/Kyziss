<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
	<title>Signup</title>
	<script lang="javascript" type="text/javascript" src="checkform.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="col-md-6">
			<form action="addcustomer.php" method="POST" role="form" onsubmit="return validate(this);">
				<legend style="font-family: lobster">Signup</legend>
				
				<div class="form-group">
					<label for="">Email address: </label>
					<input type="text" class="form-control" name="email_address" id="" placeholder="Input field">
					<span id="emailmsg"></span>
				</div>
				
				<div class="form-group">
					<label for="">Password: </label>
					<input type="password" class="form-control" name="password" id="" placeholder="Input field">
					<span id="passwdmsg"></span>
				</div>

				<div class="form-group">
					<label for="">ReType Password: </label>
					<input type="password" class="form-control" name="re_password" id="" placeholder="Input field">
					<span id="repasswdmsg"></span>
				</div>

				<div class="form-group">
					<label for="">Complete Name: </label>
					<input type="text" class="form-control" name="complete_name" id="" placeholder="Input field">
					<span id="usrmsg"></span>
				</div>

				<div class="form-group">
					<label for="">Adress: </label>
					<input type="text" class="form-control" name="address1" id="" placeholder="Input field">
					<input type="text" class="form-control" name="address2" id="" placeholder="Input field">
				</div>

				<div class="form-group">
					<label for="">City: </label>
					<input type="text" class="form-control" name="city" id="" placeholder="Input field">
				</div>

				<div class="form-group">
					<label for="">State: </label>
					<input type="text" class="form-control" name="state" id="" placeholder="Input field">
				</div>

				<div class="form-group">
					<label for="">Country: </label>
					<input type="text" class="form-control" name="country" id="" placeholder="Input field">
				</div>

				<div class="form-group">
					<label for="">Zip Code: </label>
					<input type="text" class="form-control" name="zip_code" id="" placeholder="Input field">
				</div>

				<div class="form-group">
					<label for="">Phone No: </label>
					<input type="text" class="form-control" name="phone_no" id="" placeholder="Input field">
				</div>
				
				<button type="submit" class="btn btn-primary">Submit</button>
				<button type="reset" class="btn btn-primary">Reset</button>
			</form>
		</div>
	</div>
</body>
</html>