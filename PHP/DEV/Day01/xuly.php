<?php 
		//1. get
		echo  "<p> GET:";
		if(isset($_GET['btnDangNhap'])){
			$tk=$_GET['tenDangNhap'];
			$mk=$_GET['matKhau'];

			echo "<h1> Welcome to, $tk </h1>";
			echo "<p> Mật khẩu của ông là: $mk";
		}
		//2. Post
		echo "<hr/>";
		echo  "<p> POST:";
		if(isset($_POST['btnDangNhap'])){
			$tk=$_POST['tenDangNhap'];
			$mk=$_POST['matKhau'];

			echo "<h1> Welcome to, $tk </h1>";
			echo "<p> Mật khẩu của ông là: $mk";
		}
		echo "<hr/>";
		//3. request
		echo  "<p> _REQUEST:";
		if(isset($_REQUEST['btnDangNhap'])){
			$tk=$_REQUEST['tenDangNhap'];
			$mk=$_REQUEST['matKhau'];

			echo "<h1> Welcome to, $tk </h1>";
			echo "<p> Mật khẩu của ông là: $mk";
		}

?>