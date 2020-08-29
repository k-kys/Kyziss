<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<title>Document</title>
</head>
<body>
	<form action="display.php" method="get" role="form">
		<legend>Form title</legend>
	
		<div class="form-group">
			<label for="">Name: </label>
			<input type="text" class="form-control" name="name" id="" placeholder="Input field">
		</div>
	
		<div class="form-group">
			<label for="">Email address: </label>
			<input type="text" class="form-control" name="email" id="" placeholder="Input field">
		</div>
	
		<button type="submit" class="btn btn-primary">Submit</button>
		<button type="reset" class="btn btn-primary">reset</button>
	</form>
</body>
</html>