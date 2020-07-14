<?php 
	$conn=mysqli_connect("localhost","root","","nha01");
	if (!$conn) {
		die('Connect error !');
	}
	mysqli_query($conn,"SET CHARACTER SET 'utf8'");
 ?>