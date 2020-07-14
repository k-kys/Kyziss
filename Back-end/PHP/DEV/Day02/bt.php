<?php 
//Ex 1: Viết 1 function, input là 1 số int >100, output là mảng tất cả các số nguyên tố.
	function checkSNT($n){
			if ($n < 2) {
				return false;
			}
			for ($i = 2; $i < ($n-1) ; $i++) { 
				if ($n % $i == 0) {
					return false;
				}
			}
			return true;
		}

		$so = 90;
		if ($so <= 100) {
			echo 'Yêu cầu số phải lớn hơn 100.';
		}else{
			echo "Các số nguyên tố nhỏ hơn" . $so . " là: <br>";
			for ($i = 0; $i < $so; $i++) { 
				if (checkSNT($i)) {
					echo $i." ; ";
				}
			}
		}


		echo '<hr>';
//Ex 2: Viết function truyền vào tháng, năm. Output là số ngày trong tháng.
	function soNgay($thang, $nam){
        if ($nam % 4 == 0 && $nam % 100 != 0 || $nam % 400 == 0) {
            switch($thang){
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                $ngay = 31;
                break;
            case 4:
            case 6:
            case 9:
            case 11:
                $ngay = 30;
                break;
            case 2:
                $ngay = 29;
                break;
            }
        }else{
            switch($thang){
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                $ngay = 31;
                break;
            case 4:
            case 6:
            case 9:
            case 11:
                $ngay = 30;
                break;
            case 2:
                $ngay = 28;
                break;
            }
        }
        return $ngay;
    }

    $year = 2019;
    $month = 1;
    $date = soNgay($month, $year);
    echo 'Số ngày của tháng ' . $month . ' năm ' . $year . ' là: ' . $date;
 ?>
