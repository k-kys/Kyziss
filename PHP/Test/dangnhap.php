<?php 
	$taikhoan=$_POST['taikhoan'];
	$matkhau=$_POST['matkhau'];
	if ($taikhoan=="admin" && $matkhau=="admin123") {
		echo "<h1>Xin chào, $taikhoan";
	}else{
		echo "Thông tin tài khoản hoặc mật khẩu sai.";
	}
 ?>