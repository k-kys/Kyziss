<?php 
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
    echo '<h2>Số ngày của tháng ' . $month . ' năm ' . $year . ' là: ' . $date . '</h2>';
?>