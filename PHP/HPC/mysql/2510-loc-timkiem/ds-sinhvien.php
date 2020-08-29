<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh sách thông tin sinh viên</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

	<link href="https://fonts.googleapis.com/css?family=Bungee+Shade&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Paaji&display=swap" rel="stylesheet">
	<style type="text/css">
		h2{
			font-family: 'Bungee Shade', cursive;
		}
		#fontchu{
			font-family: 'Baloo Paaji', cursive;
		}
	</style>
</head>
<body>
	<?php 
	include 'ketnoi.php';
	$sql ="SELECT MaSV, HoSV, TenSV, Phai, NgaySinh, sinhvien.MaKH, HocBong, TenKH ";
	$sql .="FROM sinhvien JOIN khoa ON sinhvien.MaKH=khoa.MaKH";
	//xử lí truy vấn cần lọc theo khoa
	if (isset($_GET['makh'])) {
		$sql .=" Where sinhvien.MaKH='".$_GET['makh']."'";
	}
	//thực thi truy vấn
	$result=mysqli_query($ketnoi,$sql);
	//xử lí đọc data từ bảng khoa, hiển thị lên combobox
	$sqlKhoa="Select * From khoa";
	$resKhoa=mysqli_query($ketnoi,$sqlKhoa);
	?>
	<section class="container">
		<h2 style="text-align: center">DANH SÁCH THÔNG TIN SINH VIÊN</h2>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th colspan="9" id="fontchu">Chọn khoa: 
						<select name="cbKhoa" id="cbKhoa" class="form-control" onchange="location.href='ds-sinhvien.php?makh='+this.value;">
							<option>---Lọc theo khoa---</option>
							<?php 
							while($khoa=mysqli_fetch_array($resKhoa)):
								?>
								<option value="<?php echo $khoa["MaKH"] ?>" <?php echo (isset($_GET["makh"])==true && $_GET["makh"]==$khoa["MaKH"])?"selected":""; ?>>
									<?php echo $khoa["TenKH"];	 ?>
								</option>
							<?php endwhile; ?>
						</select>
					</th>
				</tr>
				<tr id="fontchu">
					<th>STT</th>
					<th>Mã SV</th>
					<th>Họ SV</th>
					<th>Tên SV</th>
					<th>Phái</th>
					<th>Ngày sinh</th>
					<th>Tên khoa</th>
					<th>Học bổng</th>
					<th>Chức năng</th>
				</tr>
			</thead>

			<tbody>
				<?php 
				$stt=0;
				while($row=mysqli_fetch_array($result)):
					$stt++;
					?>
					<tr>
						<td><?php echo $stt; ?></td>
						<td><?php echo $row["MaSV"]; ?></td>
						<td><?php echo $row["HoSV"]; ?></td>
						<td><?php echo $row["TenSV"]; ?></td>
						<td><?php echo $row["Phai"]==1?"Nam":"Nữ" ?></td>
						<td><?php echo $row["NgaySinh"]; ?></td>
						<td><?php echo $row["TenKH"]; ?></td>
						<td><?php echo number_format($row["HocBong"]); ?></td>
						<td>
							<a href="#" title="Sửa"><i class="fas fa-edit"></i></a>
							<a href="#" title="Xóa"><i class="fas fa-trash"></i></a>
						</td>
					</tr>
				<?php endwhile; ?>
			</tbody>

			<tfoot id="fontchu">
				<?php 
					if (mysqli_num_rows($result)==0) :
				?>
					<tr>
						<td colspan="9" class="alert-warning"><i>Chưa có thông tin sinh viên của khoa</i></td>
					</tr>
				<?php else: ?>
					<tr>
						<td colspan="9" class="alert-primary">
							<i>Tổng số: <?php echo mysqli_num_rows($result); ?></i>
						</td>
					</tr>
				<?php endif; ?>
				</tfoot>
			</table>
		</section>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
	</html>