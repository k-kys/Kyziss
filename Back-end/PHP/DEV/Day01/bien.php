<?php
	echo '<h1> Khái niệm biến trong PHP </h1>';
	//Khai báo và gán giá trị
	$name="Chung Trịnh";
	$age=40;

	//In 
	echo "Welcome to, ".$name;
	echo '<br/>';
	print_r($name);


	// Lấy ra liểu dữ liệu của biến sử dụng
	//Hàm gettype

	echo '<br/> Kiểu dữ liệu của biến name là:'.gettype($name);
	echo '<br/> Kiểu dữ liệu của biến age là:'.gettype($age);

	//settype

	echo '<br/>'. settype($age,"float");
	
	echo '<br/> Kiểu dữ liệu của biến age là:'.gettype($age);

	echo  '<br/> Là gì:' . isset($name);
	unset($name);

	echo  '<br/> Là gì:' . isset($name);
