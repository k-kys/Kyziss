<?php 
	//Biến Hằng là giá trị không đổi trong suốt quá trình thực thi
	//Định nghĩa hằng số trong php, sử dụng gàm define
	define('DEV', 'Welcome to Devmaster Academy!');

	define('urlPath', 'https://localhost:8080/prj01/');

	//Sử dụng
	echo DEV;
	echo '<p>';
	echo constant("DEV");

	// Các biến hằng cung cấp sẵn

	echo '<p> File: '. __FILE__;

	echo '<p> Current line: '. __LINE__;


	
	
	
