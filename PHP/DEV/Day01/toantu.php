<?php 
	//Các toán tử trong PHP
	//1. Toán tử số học: +; -; *; /; %
	$a=100;
	$b=150;

	$c=$a+$b;
	echo "<p> $a + $b = $c";
	
	$c=$a-$b;
	echo "<p> $a - $b = $c";

	$c=$a*$b;
	echo "<p> $a * $b = $c";

	$c=$a/$b;
	echo "<p> $a / $b = $c";

	$c=$a%$b;
	echo "<p> $a % $b = $c";

	echo "<hr/>";

	//2. Toán tử tăng / giảm
	echo "<h2> Toán tử tăng / giảm: ++; --";
	$t = $a++;
	echo "<p> $t++ = $a";

	$c = $a--;
	echo "<p> $a-- = $c";

	$c = ++$a;
	echo "<p> ++$a = $c";
	
	//3. Phép toán so sánh: >; >=; <; <=; ==; !=
	echo "<h2>Phép toán so sánh: >; >=; <; <=; ==; != </h2>";
	$c= $a<$b; 
	echo "<p> $a < $b => $c";

	//4. Toán tử điều khiện
	// (điều_kiện) ? (biểu_thức_1) : (biểu_thức_2)
	echo "<h2> Toán tử điều khiện <br/>
	(điều_kiện) ? (biểu_thức_1) : (biểu_thức_2)";

	$max = ($a > $b)? $a : $b;
	echo "<p> ($a > $b) ? $a : $b = $max";
	

?>

