<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	$dateIssued = date('2020-11-27');
	$dateReturn = date('2020-12-10');

// $result = date('Y-m-d', strtotime('-30 day', strtotime($dateReturn)));
// 	$result2 = strtotime($dateReturn) - strtotime($dateIssued);
// 	echo $result2 . "<br>";
// 	$motngay = 86400;
// 	$bayngay = $motngay*7;
// 	$haituan = $motngay * 14;
// 	if ($motngay <= $result2 && $result2 <= ($motngay * 7)) {
// 		$fine = 20000;
// 	} elseif ($result2 <= ($motngay*14)) {
// 		$fine = 50000;
// 	} else {
// 		$fine = 9999;
// 	}
// echo $fine;
$input = "Quang trần khương";
$arr = ['Trần Khương', 'Phạm Dung', 'Phương Thảo'];
foreach ($arr as $value) {
	$pattern = "/" . $value . "/i";
	echo $pattern . "<br/>";

	if (preg_match($pattern, $input) == 1) {
		echo "Đã tồn tại <br/>";
	} else {
		echo "Chưa tồn tại <br/>";
	}

}
// $ten1 = "Trần Quang Khương";
// $pattern = "/" . $ten1 . "/i";
// echo $pattern . "<br/>";
// $ten2 = "trầN quAng khươNg";

// echo (strtolower($ten1) === strtolower($ten2))?'Giống':'Khác';
// echo "<br/>";
// echo preg_match($pattern, $ten2);
	?>

</body>
</html>
