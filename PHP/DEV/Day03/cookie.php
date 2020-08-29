<?php 
	setcookie('user_visit_count',0,time() + 60 * 60);

	$count = $_COOKIE['user_visit_count'];
	$count++;

	setcookie('user_visit_count',$count,time() + 60 * 60);
	setcookie('user_name',$count,time() + 60 * 60);
	echo "set cookie success <br> {$count}";
 ?>