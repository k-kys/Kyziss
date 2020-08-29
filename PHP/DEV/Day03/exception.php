<?php 
	function isSoChan($number){
		if (is_string($number)) {
			throw new Exception("Error Processing Request", 1);
		}
		return$number % 2 == 0;
	}

	$a = 10;
	$b = 0;
	try {
		if ($b == 0) {
			throw new Exception("Lỗi chia cho 0", 1);
			return $a / $b;
		}
	} catch (Exception $e) {
		echo $e->getMessage();
	}

	try{
		var_dump(isSoChan(10));
	}catch (Exception $exception){
		echo 'Số bạn nhập không phải là số';
	}
	try{
		var_dump(isSoChan('abc'));
	}catch (Exception $exception){
		echo 'Số bạn nhập không phải là số';
	}
	
 ?>