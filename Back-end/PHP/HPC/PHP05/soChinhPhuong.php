<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tìm các số chính phương và tính tổng</title>
</head>
<body>
	
	<!--
		1. Thiết kế form với ô nhập text
			-nhập số nghuyên dương n
		2. Viết hàm bằng ngôn ngữ PHP
			-kiểm tra số x có phải là số chính phương hay không ?
		3. In ra các số chính phương <= n
			-sử dụng hàm kiểm tra ở trên
	-->
	
	
	<form action="" method="post">
		<div class="form-group">
			<label for="num">Nhập một số nguyên n: </label>
			<input type="text" id="num" name="num">
		</div>
		<input type="submit" name="btCP" value="Tính">
	</form>

	<?php 
		//hàm kiểm tra số chính phương
		function kiemtraCP($x){
			$flag=false;
			for ($i=2; $i <= (int)$x/2; $i++) { 
				if ($i*$i==$x) {
					$flag=true;
					break;
				}
			}
			return $flag;
		}
		//kết thúc hàm

		//khi chọn submit thực hiện tính toán
		if (isset($_POST['btCP'])) {
			#lấy giá trị trên ô nhập
			$n=(int)$_POST['num'];
			$tong=0;
			echo "<h3> Các số chính phương <= n là:</h3>";
			for ($i=1; $i <=$n ; $i++) { 
				if (kiemtraCP($i)==true) {
					echo " $i ;";
					$tong+=$i;
				}
			}
			echo "<h3> Tổng: ".$tong;
		}
	
	 ?>

</body>
</html>
