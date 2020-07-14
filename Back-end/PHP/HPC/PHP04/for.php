<?php 
	//for đầy đủ
	//in các số 1 -10
	for ($i=1; $i <= 10 ; $i++) { 
		echo $i.";";
	}
	echo "<hr>";
	//for khuyết tp1
	$i=1;
	for (; $i <= 10 ; $i++) { 
		echo $i.";";
	}
	echo "<hr>";
	//for khuyết tp2
	$i=1;
	for (; ; $i++) { 
		echo $i.";";
		if($i==10)break;
	}
	echo "<hr>";
	//for khuyết tp3
	$i=1;
	for (; $i <= 10 ;) { 
		echo $i.";";
		$i++;
	}
	echo "<hr>";
	//khuyết toàn bộ
	$i=1;
	for (; ;) { 
		echo $i.";";
		$i++;
		if($i==10)break;
	}
	echo "<hr>";
	//for không thân
	$i=1;
	for($i=1;$i<=10;$i++,echo $i.";"){}; //sai

	/*
	bài 2: tính tổng các số nguyên tố nhỏ hơn bằng 100 
			tính tổng từ 1 - 10 
			$tong=0;
			for ($i=0; $i <= 10 ; $i++) {
			$tong += $i; 
		echo "tổng bằng ".$tong;
	}
	echo "<hr>";
 ?>