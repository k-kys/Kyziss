<?php

$array = array('Xin', 'Chao', 'Cac ban');

// var_dump(in_array('Xin', $array));
// var_dump(in_array('Xin2', $array));

// echo $array[0] . $array[1] . $array[2] . '<br>';
$array2 = [
    'vn' => 'Viet Nam',
    'us' => 'United State',
    'uk' => 'United Kingdom',
];
foreach ($array2 as $key => $value) {
    echo $key . ' =====> ' . $value . "<br>";
}

// echo count($array);
// echo $array2['vn'];


// $b = 10;
// var_dump(is_array($array));
// var_dump(is_array($b));

// $notAscArray = [1, 3, 2, 5, 4];
// print_r($notAscArray);
// echo "<br>";
// sort($notAscArray);
// print_r($notAscArray);

// $notAscArray = [1, 3, 2, 5, 4];
// print_r($notAscArray);
// echo "<br>";
// rsort($notAscArray);
// print_r($notAscArray);


// Sắp xếp mảng kết hợp


// $ranking = [
//     'vn' => 10,
//     'laos' => 9,
//     'campuchia' => 11
// ];
// $keys = array_keys($ranking);

// echo "<pre>";
// print_r($keys);
// asort($ranking);

// print_r($ranking);

// $array = [1, 2, 3, 4, 5];
// echo "<pre>";
// print_r($array);
// $firstElement = array_shift($array);
// $firstElement = array_shift($array);
// $lastElement = array_pop($array);
// echo $firstElement;
// echo $lastElement;
// echo "<pre>";
// print_r($array);
// $i = 1;
// while ($i <= 1000) {
//     echo "Anh yeu em";
//     $i++;
// }

// for ($i=0; $i < 1000; $i++) {
//     echo "Anh Yeu Em";
// }

$array = [1, 2, 4, 6 ,7 , 8];
// for ($i = 0; $i < count($array) ; $i++) {
//     echo $array[$i] . '<br>';
// }


// foreach ($array as $key => $value) {
//     echo $value . '<br>';
// }

// function giaiPTB2($a, $b, $c)
// {
//     $delta = pow($b, 2) - 4 * $a * $c;
//     if ($delta == 0 ) {
//         echo "phuong trinh co nghiem kep";
//     } else if ($delta > 0) {
//         echo "phuong trinh co 2 nghiem phan biet";
//     } else {
//         echo "phuong trinh vo nghiem";
//     }
// }

// giaiPTB2(1,2,1);
//
//
//
// date_default_timezone_set('asia/ho_chi_minh');
// echo date('d/m/Y H:i:s');

// function print_name($name)
// {
//     $nameArray = explode(" ", $name);
//     $firstName = array_shift($nameArray);
//     $lastName = array_pop($nameArray);
//     return [$firstName, $lastName];
// }
// $result = print_name("Nguyen Duy Khanh");
// var_dump($result);
//
$string = 'Xin chao cac ban';
if (strpos($string, 'Xin') !== false) {
    echo "Xau nam trong chuoi";
} else {
    echo "Xau ko nam trong chuoi";
}
?>