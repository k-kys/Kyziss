<?php 
//in các số nguyên từ 1- 10
	$i=1;
	do {
		echo $i.";";
		$i++;
	} while ($i <= 10);
	echo "<hr>";
	//tính tổng các số chẵn 1-10
	$i=2;
	$tong=0;
	do {
		$tong += $i;
		$i+2;
	} while ($i <= 10);
	echo "tổng bằng ".$tong;
 ?>