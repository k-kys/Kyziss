<?php 

include 'topmenu.php';
include 'connect.php';

$toSearch = $_POST['tosearch'];
$query = "SELECT * FROM products WHERE ";
$query_fields = Array();
$sql = "SHOW COLUMNS FROM products"; //1: vì tìm keyword trong all cột của bảng products
$columnlist = mysqli_query($connect, $sql) or die(mysql_error()); //2: gán cho biến danh sách cột
while ($arr = mysqli_fetch_array($columnlist, MYSQLI_ASSOC)) { //3: truy cập vào mọi cột của bảng sản phẩm và kiểm tra xem keyword có tìm thấy trong đó
	extract($arr);
	$query_fields[] = $Field . " LIKE('%" . $toSearch . "%')";
}
$query .= implode(" OR ",$query_fields);
$results = mysqli_query($connect, $query) or die(mysql_error());
$x = 1;

?>
<table border="0">
	<tr>
		<?php 
		while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
			if ($x <= 3) {
				$x += 1;
				extract($row);
				?>
				<td style="padding-right: 15px">
					<a href="itemdetails.php?itemcode=$item_code">
						<img src="<?= $imagename; ?>" style="max-width: 220px; max-height: 240px; width: auto; height: auto"><br/>
						<?= $item_name; ?> <br/>
					</a>
					<?= $price; ?> <br/>
				</td>
				<?php
			} else {
				$x = 1;
				?>
			</tr>
			<?php
		}
	}
	?>
</tr>
</table>