<?php 
	//1. kết nối
	$link=mysqli_connect("localhost","root","","hpc_k18_it01");
	//2. đọc danh sách các bảng
	/*$lstTable=fbsql_list_tables("hpc_k18_it01",$link);
	//tổng số bảng
	$num= mysqli_num_rows($lstTable);
	echo 'Tổng số bảng: '.$num;*/
	$dbName="hpc_k18_it01";
	$sql="SHOW TABLES FROM $dbName";
	$result=mysqli_query($link,$sql);
	if (!$result) {
		echo "DB Error, could not list tables \n";
		echo "MySQL Error: ".mysqli_connect_error();
		exit;
	}
	while ($row=mysqli_fetch_row($result)) {
		echo "<h2>Table: {$row[0]}<br>";
		echo "</h2>";
	}
	mysqli_free_result($result);

 ?>