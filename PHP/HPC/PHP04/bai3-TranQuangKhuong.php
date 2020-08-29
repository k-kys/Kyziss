<?php 
	$n=$_POST['n'];
	$min=0;
	$max=0;
	for ($i=0; $i <= $n ; $i++) { 
		if($min>$i){
			$min=$i;
		}
		if($max<$i){
			$max=$i;
		}
	}
	echo "Số lớn nhất là ".$max."<br>";
	echo "Số nhỏ nhất là ".$min."<br>";
 ?>
<footer>
    <marquee direction="left" width="15%"><h6><sub>©2019 Trần Quang Khương K18.CNTT01</sub></h6></div>
</footer>