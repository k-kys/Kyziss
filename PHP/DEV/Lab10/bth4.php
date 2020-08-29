<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài thực hành 4 - Labguide10</title>
</head>
<body>
	<?php 
//sử dụng phương thức GET trên form để xây dựn chức năng tìm kiếm sản phẩm
	 ?>
	 <form action="bth401.php" method="get">
	 	<table width="300">
	 		<caption>
	 			<h2>Tìm kiếm sản phẩm</h2>
	 		</caption>
	 		<tr>
	 			<td>Tên sản phẩm</td>
	 			<td>
	 				<input type="text" name="product" id="product">
	 			</td>
	 		</tr>
	 		<tr>
	 			<td>Loại sản phẩm</td>
	 			<td>
	 				<select name="category" id="category">
	 					<option value="Dell">Dell</option>
	 					<option value="HP">HP</option>
	 					<option value="Lenovo">Lenovo</option>
	 					<option value="Acer">Acer</option>
	 					<option value="Asus">Asus</option>
	 					<option value="Sony">Sony</option>
	 				</select>
	 			</td>
	 		</tr>
	 		<tr>
	 			<td>Giá sản phẩm</td>
	 			<td>
	 				<input type="text" name="price" id="price"/>
	 			</td>
	 		</tr>
	 		<tr>
	 			<td></td>
	 			<td>
	 				<input type="submit" name="search" id="search" value="Tìm kiếm"/>
	 			</td>
	 		</tr>
	 	</table>
	 </form>
</body>
</html>