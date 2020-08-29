<?php 
//khai báo biến và xác định kiểu dữ liệu, chuyển đổi kiểu dữ liệu
	echo "<h2>Khai báo sử dụng biến trong PHP</h2>";
	echo "Khai báo biến a = 11.5";
	$a = 11.5;
	echo "Giá trị của biến a : $a <br />";
	echo "Kiểu giá trị của biến a là: " . gettype($a) . "<br />";
	echo "Chuyển đổi kiểu dữ liệu của biến a về kiểu số nguyên <br/>";
	$a = (int)$a;
	echo "Biến a đã chuyển đổi từ kiểu Double về kiểu nguyên " . $a . " -- ";
	echo gettype($a);
	echo "<br/>";
	echo "Chuyển đổi biến a từ int về double <br/>";
	$a = (double)$a;
	echo "Biến sau khi chuyển đổi có giá trị là $a.0 và kiểu " . gettype($a) . "<br/>";
	echo "Chuyển đổi biến a từ kiểu double sang string <br/>";
	$a = (string)$a;
	echo "Biến a sau khi chuyển đổi từ kiểu double sang string có giá trị '$a' và kiểu dữ liệu " . gettype($a);
 ?>