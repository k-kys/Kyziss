<?php 
	// tính tổng từ 1 -> 10
	$tong=0;
	for ($i=0; $i <= 10 ; $i++) {
		$tong += $i; 
	}
	echo "tổng bằng ".$tong."<br>";
	echo "<hr>";
	//tính tổng các số nguyên tố <=100
	function checkSNT($n){
		// n<2 -> không phải SNT
		if ($n<2) {
			return false;
		}
		//khi n>=2
		for ($i=2; $i < ($n-1) ; $i++) { 
			if ($n%$i==0) {
				return false;
			}
		}
		return true;
	}
	$t=0;
	echo "Các số nguyên tố nhỏ hơn 100 là <br>";
	for ($i=0; $i < 100; $i++) { 
		if (checkSNT($i)) {
			echo $i." ; ";
			$t+=$i;
		}
	}
	echo "<br>Tổng các số nguyên tố nhỏ hơn 100 là: ".$t;
 ?>
 <footer>
    <marquee direction="left" width="15%"><h6><sub>©2019 Trần Quang Khương K18.CNTT01</sub></h6></div>
</footer>