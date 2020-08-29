<?php 
	//in các số nguyên trong khoảng 0 -> 100 vừa chia hết cho 3 và 5
	$i=0;
	while ($i <= 100) {
		if ($i%5==0) {
			if ($i%3==0) {
				echo "Số chia hết cho cả 3 và 5 là ".$i. "<br>";
			}
		}
		$i++;
	}
	echo "<hr>";
 ?>
<footer>
    <marquee direction="left" width="15%"><h6><sub>©2019 Trần Quang Khương K18.CNTT01</sub></h6></div>
</footer>