<?php 
	function checkSNT($n){
			/*if ($n<2) {
				echo "Yêu cầu số phải lớn hơn 100";
			}else{
				$test = "Số n thỏa mãn điều kiện > 100";
			}*/
			for ($i=2; $i <= ($n-1) ; $i++) { 
					if ($n%$i==0) {
						$check = false;
						break;
					}
				}
			$check = false;
			$arrSNT[] = array();
			$j = 0;
			if ($check == true) {
				$arrSNT[$j] = $n[$i];
				$j++;
			}
			return $arrSNT;
		}
		
 ?>