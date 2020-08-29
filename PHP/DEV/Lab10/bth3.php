<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài thực hành 3 - Labguide10</title>
	<!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	https://use.fortawesome.com/349cfdf6.js
	https://kit-pro.fontawesome.com/releases/v5.11.2/css/pro.min.css 	-->
</head>
<body>
	<?php 
		/*
		sử dụng PHP với phương thức POST trên form để lấy dữ liệu từ user nhập vào trên form -> hiển thị ra thông tin User nhập vào
		 */
	?>
	<form action="bth301.php" method="post">
		<table width="450" align="center">
			<caption>
				<h3>Đăng ký thành viên</h3>
			</caption>
			<tr>
				<td>Tên đăng nhập</td>
				<td>
					<input type="text" name="userName" id="userName" placeholder="Tên đăng nhập" />
				</td>
			</tr>
			<tr>
				<td>Mật khẩu</td>
				<td>
					<input type="password" name="matkhau" id="matkhau" placeholder="Mật khẩu" />
				</td>
			</tr>
			<tr>
				<td>Họ và tên</td>
				<td>
					<input type="text" name="fullName" id="fullName" placeholder="Họ tên" />
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>
					<input type="email" name="email" id="email" placeholder="Thư điện tử" />
				</td>
			</tr>
			<tr>
				<td>Giới tính</td>
				<td>
					<input type="radio" name="gender" id="male" value="Nam" />
					<label for="male">Nam</label>
					<input type="radio" name="gender" id="female" value="Nữ" />
					<label for="female">Nữ</label>
				</td>
			</tr>
			<tr>
				<td>Sở thích</td>
				<td>
					<input type="checkbox" name="hobby[]" id="dabong" value="Đá bóng" />
						<label for="dabong">Đá bóng</label>
					<input type="checkbox" name="hobby[]" id="caulong" value="Cầu lông" />
						<label for="caulong">Cầu lông</label>
					<input type="checkbox" name="hobby[]" id="dulich" value="Du lịch" />
						<label for="dulich">Du lịch</label>
					<input type="checkbox" name="hobby[]" id="nghenhac" value="Nghe nhạc" />
						<label for="nghenhac">Nghe nhạc</label>
					<input type="checkbox" name="hobby[]" id="bongban" value="Bóng bàn" />
						<label for="bongban">Bóng bàn</label>
				</td>
			</tr>
			<tr>
				<td>Tỉnh thành</td>
				<td>
					<select name="province" id="province">
						<option value="">--Chọn tỉnh--</option>
						<option value="Hà Nội">Hà Nội</option>
						<option value="Hải Phòng">Hải Phòng</option>
						<option value="Hải Dương">Hải Dương</option>
						<option value="Hưng Yên">Hưng Yên</option>
					</select>
				</td>
			</tr>
			<tr>
				<td valign="top">Mô tả</td>
				<td>
					<textarea cols="20" rows="5" name="description" id="description" placeholder="Mô tả thông tin"></textarea>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" id="submit" value="Đồng ý"/>
					<input type="reset" name="reset" id="reset" value="Làm lại">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>