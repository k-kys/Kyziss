<?php 
	//Ex: viết chương trình in ra các số nguyên tố <=n và tính tổng
	echo "Running.....";
	function isPrime($x){
		if ($x<2) {
			return false;
		}
		for ($i=2; $i <= (int)$x/2; $i++) { 
			if ($x%$i==0) {
				return false;
			}
		}
		return true;
	}
		//end of function
		//test
		$n=20;
		$tong=0;
		echo "<h3> Dãy các số nguyên tố <= $n </h3>";
		for ($i=2; $i <=$n ; $i++) { 
			if (isPrime($i)==true) {
				echo "<b> $i ;</b>";
				$tong+=$i;
			}
		}
		echo "<h2> Tổng: ".$tong;
	
 ?>