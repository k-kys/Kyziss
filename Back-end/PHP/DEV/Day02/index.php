<?php 
/*
	$array=array('Xin','Chao','Cac ban');
	var_dump(in_array('Xin',$array));
	echo $array[0] . $array[1] . $array[2] . '<br>';
*/
	/*
	$array2=[
		'vn' => 'Viet Nam',
		'us' => 'United State',
		'uk' => 'United Kingdom',
	];
	foreach ($array2 as $key => $value) {
		echo $key . ' --- ' . $value . '<br>';
	}
*/
	/*echo $array2['vn'] . '<br>';
	echo count($array) . '<br>';
	var_dump(is_array($array)) . '<br>';
	*/
/*
	$notAscArray=[1, 3, 2, 5, 4];
	var_dump($notAscArray);
	echo '<br>';
	print_r($notAscArray);
	echo '<br>';
	sort($notAscArray);
	print_r($notAscArray);
	*/
/*
	$ranking = [
		'vn' => 10,
		'laos' => 9,
		'campuchia' => 11
	];
	asort($ranking);
	print_r($ranking);
	$key = array_keys($ranking);
	echo "<pre>";
	print_r($ranking);
*/
/*
$array = [1, 2, 3, 4, 5];
echo "<pre>";
print_r($array);
$firstElement = array_shift($array);
echo $firstElement;
echo "<pre>";
print_r($array);
*/
/*
$i=1;
while ($i <= 1000) {
	echo "I love you";
	$i++;
}
*/
/*
for ($i = 0; $i < 1000 ; $i++) { 
	echo "Anh yeu em ";
}
*/
/*
$array=[1, 2, 4, 6, 7, 8];
for ($i = 0; $i < count($array) ; $i++) { 
	echo $array[$i] . '<br>';
}
*/
/*
$array=[1, 2, 4, 6, 7, 8];
foreach ($array as $key => $value) {
	echo $value . '<br>';
}
*/

/*
$result = 0;
function ptBac2($a, $b, $c)
{
	$totalResult = 0;
	$delta = $b * $b - 4 * $a * $c;
	if ($delta > 0) {
		$totalResult = 2;
	}elseif ($delta == 0) {
		$totalResult = 1;
	}else{
		$totalResult = 0;
	}
	return $totalResult;
}
//ptBac2($a, $b, $c);
$result = ptBac2(1, 2, 1);
echo 'So nghiem la: ' . $result;
*/
/*
date_default_timezone_set('asia/ho_chi_minh');
echo date('d/m/Y H:i:s');
*/
/*
//Ham Explode
function XuLyChuoi($str){
	$nameArr = explode(" ", $str);
	$ho = array_shift($nameArr);
	$ten = array_pop($nameArr);
	return [$ho, $ten];
}
$hoten = XuLyChuoi("Con Bo");
var_dump($hoten);
*/
/*
$string = 'Xin chao cac ban';
echo strpos($string, 'Xinh');
var_dump(strpos($string, 'Xinh'));
*/
// bt1: viết 1 hàm input là 1 số int >100, đầu ra là mảng tất cả các số nguyên tố.
// bt2: viết function truyền vào tháng, năm. Output là ngày trong tháng
?>