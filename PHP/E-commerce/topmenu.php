<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bintu Online Bazar</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script language="javascript" type="text/javascript">
		function makeRequestObject() {
			var xmlhttp=false;
			try {
				xmlhttp = new ActiveXObject('Msxml2.XMLHTTP'); // 1: tạo một đối tượng XMLHttpRequest, cho phép mã JavaScript thực hiện các yêu cầu máy chủ HTTP không đồng bộ. 
			} catch(e) {
				try {
					xmlhttp = new ActiveXObject('Microsoft.XMLHTTP'); // 2
				} catch(E) {
					xmlhttp = false;
				}
			}
			if (!xmlhttp && typeof XMLHttpRequest != 'undefined' {
				xmlhttp = new XMLHttpRequest(); // 3: tạo đối tượng XML
			}
			return xmlhttp;
		}

		function updateCart() { // 4: hàm hiển thị số lượng các mục trong giỏ hàng
			var xmlhttp = makeRequestObject();
			xmlhttp.open('GET', 'countcart.php', true); // 5:yêu cầu đến máy chủ bằng phương thức GET và truyền tên tệp để thực thi trên máy chủ
			xmlhttp.onreadystatechange = function(){ //6:theo dõi trạng thái của yêu cầu và phản hồi
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) { //7:trạng thái phản hồi của máy chủ readyState=4 yêu cầu đã hoàn thành; Giá trị trạng thái 200 có nghĩa là không có lỗi. Mỗi khi readyState thay đổi, chức năng onreadystatechange sẽ được thực thi
					var ajaxCart = document.getElementById("cartcountinfo"); // 8:truy cập phần tử với ID cartcountinfo, số lượng giỏ hàng được trả về sẽ được hiển thị

					ajaxCart.innerHTML = xmlhttp.responseText;
				}
			}
			xmlhttp.send(null);
		}
	</script>
</head>
<body>
	<table width="100%" cellpadding="0" cellspacing="0">
		<col style="width: 30%; border: none;">
		<col style="width: 40%">
		<col style="width: 20%">
		<tr>
			<td style="background-color: cyan; color: blue;"></td>
			<td style="background-color: cyan; color: blue;"></td>
			<td style="background-color: cyan; color: blue;">
				<?php 
				if (session_status() == PHP_SESSION_NONE) {
					session_start();
				}
				if (isset($_SESSION['email_address'])) {
					echo "Welcome " . $_SESSION['email_address'] . "&nbsp;&nbsp;&nbsp;"; // 9:hiển thị thông báo chào mừng cùng với địa chỉ e-mail của người dùng nếu người dùng đã đăng nhập và biến phiên tồn tại
					echo "<a href=\"logout.php\">Log out</a></td></tr>";
				} else {
					echo "<a href=\"signin.php\">Login</a>&nbsp;&nbsp;&nbsp;";
					echo "<a href=\"signup.php\">Sign up</a></td></tr>";
				}
				
				?>
				<!-- <span id="userinfo">
					<a href="signin.php">Login</a> &nbsp;&nbsp;&nbsp;
					<a href="signup.php">Sign up</a>
				</span>
			</td>
		</tr> -->
		<tr>
			<td style="font-size: 35px; color: blue; background-color: cyan;"> <!-- kích thước chữ 35px -->
				<b>Bintu Online Bazar</b>
			</td>
			<td bgcolor="cyan">
				<form method="post" action="searchitems.php"> <!-- điều hướng đến searchitems.php -->
					<input size="50" type="text" name="tosearch">
					<input type="submit" name="submit" value="Search">
				</form>
			</td>
			<td bgcolor="cyan"><a href="cart.php"><img style="max-width: 40px; max-height: 40px; width: auto; height: auto;" src="./img/cart.png" alt=""><span id="cartcountinfo"></span></a></td> <!-- span id=cartcountinfo, được use để show số lượng product được chọn trong cart -->
		</tr>
	</td>
</tr>
</table>

<div class="container">
	<nav>
		<ul class="nav">
			<li><a href="index.php">Home</a></li>
			<li class="dropdown">
				<a href="index.php">Electronics</a>
				<ul>
					<li><a href="itemlist.php?category=cellphone">Smart Phone</a></li>
					<li><a href="itemlist.php?category=laptop">Laptop</a></li>
					<li><a href="index.php">Camera</a></li>
					<li><a href="index.php">Television</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="index.php">Home & Furniture</a>
				<ul class="large">
					<li><a href="index.php">Kitchen Essentials</a></li>
					<li><a href="index.php">Bath Essentials</a></li>
					<li><a href="index.php">Furniture</a></li>
					<li><a href="index.php">Dining & Serving</a></li>
					<li><a href="index.php">Cookwake</a></li>
				</ul>
			</li>
			<li><a href="index.php">Books</a></li>
		</ul>
	</nav>
</div>

</body>
</html>