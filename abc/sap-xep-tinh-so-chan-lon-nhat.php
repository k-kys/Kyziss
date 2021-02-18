<?php
$arr = array(5, 6, 1, 0, 3);
$count = count($arr);
// for ($i = 0; $i < ($count - 1); $i++) {
//     for ($j = $i + 1; $j < $count; $j++) {
//         if ($arr[$i] < $arr[$j]) {
//             $tg = $arr[$j];
//             $arr[$j] = $arr[$i];
//             $arr[$i] = $tg;
//         }
//     }
// }
// print_r($arr);
$arr3 = [8, 6];
$arr2 = array_replace($arr, $arr3);

print_r($arr2);
