<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Website tự tạo</title>
	<link rel="icon" type="image/png" href="./faviconTQK/favicon-32x32.png">
	<link rel="stylesheet" type="text/css" href="contents/css/index.css">
	<link rel="stylesheet" type="text/css" href="contents/css/header.css">
	<link rel="stylesheet" type="text/css" href="contents/css/menu.css">
	<link rel="stylesheet" type="text/css" href="contents/css/noidung.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Quicksand:400,500,700&amp;subset=vietnamese">
</head>
<body>
	<header>
		<?php //tiêu đề
		include 'includes/header.php';
		?>
	</header>
	<nav>
		<?php //menu
		include("includes/menu.php");
		?>
	</nav>
	<aside>
		<button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
		<!-- thường đc dùng tạo sidebar -->
		<div>
			<h1>Tạo menu dọc đa cấp</h1>
			
			<!--tạo menu cấp 1-->
			<nav id="mainNav">
				<ul>
					<li>
						<a href="" class="">Laptop Dell</a>
						<ul>	<!--tạo menu cấp 2-->
							<li><a href="">Dell Inspiron</a></li>
							<li><a href="">Dell Vostro</a></li>
							<li><a href="">Dell XPS</a></li>
							<li><a href="">Dell Latitude</a></li>
							<li>
								<a href="">Alienware</a>
								<ul>	<!--tạo menu cấp 3-->
									<li><a href="">RAM 2G</a></li>
									<li><a href="">RAM 4G</a></li>
									<li><a href="">RAM 6G</a></li>
									<li><a href="">RAM 8G</a></li>
									<li><a href="">RAM 16G</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="">Laptop HP</a></li>
					<li><a href="">Laptop Lenovo</a></li>
					<li><a href="">Laptop Acer</a></li>
					<li><a href="">Laptop Asus</a></li>
				</ul>
			</nav>
		</div>
	</aside>
	<main> <!-- Nội dung chính của trang -->
		<article>
			<!-- Nội dung bài biết độc lập (blog,forum) -->
		</article>
		<section>
		<!-- định nghĩa các phần trong tài liệu
			trang đăng nhập, đăng ký lưu thông tin user tương tự cookie -->
			<?php //nội dung
			include 'includes/noidung.php';
			?>
		</section>
	</main>
	<footer>
		<?php //chân trang
		include("includes/footer.php");
		?>
	</footer>
</body>
</html>