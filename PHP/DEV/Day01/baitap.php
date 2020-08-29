<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài tập tính toán trên form</title>
</head>
<body>
	<?php 
		//Kiểm tra khi người dùng submit form
		//Thực hiện tính toán
		if(isset($_POST['btnTinhToan'])){
			$so_a=$_POST['so_a'];
			$so_b=$_POST['so_b'];

			$ket_qua = 0;

			$pheptinh = $_POST['pheptinh'];
			switch ($pheptinh) {
				case "+":
					$ket_qua=$so_a + $so_b;
					break;
				case "-":
					$ket_qua=$so_a - $so_b;
					break;
				case "*":
					$ket_qua=$so_a * $so_b;
					break;
				case "/":
					$ket_qua=$so_a / $so_b;
					break;
				case "%":
					$ket_qua=$so_a % $so_b;
					break;
				default:
					// code...
					break;
			}
		}
		$ket_qua = isset($ket_qua)?$ket_qua:"";
		$so_a = isset($so_a)?$so_a : "";
		$so_b = isset($so_b)?$so_b : "";
		$pheptinh = isset($pheptinh)?$pheptinh : "+";
	?>
	<form action="" method="post">
		<label for="so_a">Số a:</label>
		<input type="text" name="so_a" id="so_a" value="<?php echo $so_a;?>">
		<br>
		<label for="so_b">Số b:</label>
		<input type="text" name="so_b" id="so_b" value="<?php echo $so_b;?>">
		<br>
		<label for="luachon">Chọn phép tính:</label>
		<select name="pheptinh" id="luachon">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
			<option value="%">%</option>
		</select>
		<br>
		<input type="submit" value="Tính toán" name="btnTinhToan">
		<br>
		<label for="ket_qua">Kết quả:</label>
		<input type="text" name="ket_qua" id="ket_qua" value="<?php echo $ket_qua; ?>">

	</form>
</body>
</html>