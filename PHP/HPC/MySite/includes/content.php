<?php 
	$go=isset($_REQUEST['go'])?$_REQUEST['go']:'';
	switch ($go) {
		case "dangNhap":
			include('includes/dangNhap.php');
			break;
		case "dangKy"
			include('includes/dangKy.php');
			break;
		default:
			echo "<h3> Xin chào... </h3>";
			break;
	}
 ?>