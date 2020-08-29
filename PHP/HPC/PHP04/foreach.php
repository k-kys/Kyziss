<?php 
	$arr = array('one','two','three' );
	foreach ($arr as $value ) {
		echo $value."<br>";
	}
	echo "<hr>";
	$mang = array(100,200,150,250,300);
	$tong=0;
	foreach ($mang as $key => $value) {
		$tong+=$value;
		echo "<br>mảng[".$key."] bằng ".$value;

	}
	echo "<br>tổng bằng ".$tong;
 ?>