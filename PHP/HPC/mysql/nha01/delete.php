<?php 
	if (isset($_GET['id'])) {
		include 'connect.php';
		$sql="DELETE FROM members WHERE ID='".$_GET['id']."'";
		if (mysqli_query($conn,$sql)) {
			echo "<script>alert('Delete successful'); location.href='list.php';</script>";
		}else{
			echo "<script>alert('Error Delete'); location.href='list.php';</script>";
		}
	}
 ?>