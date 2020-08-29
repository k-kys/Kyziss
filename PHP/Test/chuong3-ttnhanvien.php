<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>::Thông tin nhân viên::</title>
</head>
<body>
	<?php 
		$hoDem=$_POST['hoDem'];
		$ten=$_POST['ten'];
		$luong=$_POST['luong'];

		$BHXH=(6/100)*$luong;
		$BHTN=0.01*$luong;

		if ($luong>=6001) {
			$pc=1000;
		}elseif ($luong>=5001) {
			$pc=300;
		}elseif ($luong>=4000) {
			$pc=500;
		}

		$luongTL=$luong+$BHXH+$BHTN+$pc;
	 ?>
	 <table align="center" cellspacing="5">
	 	<tr>
	 		<th colspan="2">Thông tin đầy đủ của nhân viên</th>
	 	</tr>
	 	<tr>
	 		<td>Họ và tên:</td>
	 		<td>  <?php echo $hoDem.' '.$ten; ?></td>
	 	</tr>
	 	<tr>
	 		<td>Lương cơ bản:</td>
	 		<td>  <?php echo $luong; ?></td>
	 	</tr>
	 	<tr>
	 		<td>Bảo hiểm xã hội:</td>
	 		<td>  <?php echo $BHXH; ?></td>
	 	</tr>
	 	<tr>
	 		<td>Bảo hiểm thất nghiệp:</td>
	 		<td>  <?php echo $BHTN ?></td>
	 	</tr>
	 	<tr>
	 		<td>Phụ cấp:</td>
	 		<td>  <?php echo $pc; ?></td>
	 	</tr>
	 	<tr>
	 		<td>Lương thực lĩnh:</td>
	 		<td>  <?php echo $luongTL ?></td>
	 	</tr>
	 </table>
</body>
</html>