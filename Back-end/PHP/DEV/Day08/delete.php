<?php 
include '../Day07/connect.php';

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "DELETE FROM users WHERE id = $id;";
	if ($conn->query($sql)) {
		echo "<script> alert('Delete successfully'); location.href='../Day07/index.php';</script>";
	} else {
		echo "<script> alert('Delete Error'); location.href='../Day07/index.php';</script>";
	}
}
 ?>
