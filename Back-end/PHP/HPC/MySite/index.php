<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MySite</title>
	<link rel="stylesheet" href="contents/css/nav.css">
	<link rel="stylesheet" href="contents/css/style.css">
</head>
<body>
	<header>
		<!-- include header.php -->
		<?php 
			include('includes/header.php');
		 ?>
	</header>
	<nav>
		<!-- menu -->
		<!-- include nav.php -->
		<?php 
			include('includes/nav.php');
		 ?>
	</nav>
	<section id="content">
		<!-- nội dung -->
		<!-- content.php -->
		<?php include('includes/content.php'); ?>
	</section>
	<footer>
		<!-- include footer.php -->
		<?php 
			include('includes/footer.php');
		 ?>
	</footer>
</body>
</html>