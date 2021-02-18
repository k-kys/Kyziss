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
	$result2 = strtotime($dateReturn) - strtotime($dateIssued);
	echo $result2 . "<br>";
	$motngay = 86400;
	$bayngay = $motngay*7;
	$haituan = $motngay * 14;
	if ($motngay <= $result2 && $result2 <= ($motngay * 7)) {
		$fine = 20000;
	} elseif ($result2 <= ($motngay*14)) {
		$fine = 50000;
	} else {
		$fine = 9999;
	}
echo $fine;

	?>

</body>
</html>
