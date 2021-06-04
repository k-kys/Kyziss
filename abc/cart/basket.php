<?php
session_start();
ob_start();




?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Giỏ hàng</title>
</head>
<body>
 <h1>Trang basket</h1>
 <table border="1">
     <tr>
         <th>Tên sản phẩm</th>
         <th>Số lượng</th>
         <th>Giá</th>
         <th>Thành tiền</th>
     </tr>
     <?php
     // nếu chưa có hoa nào thì quay về trang mua hoa
if (!$_SESSION['arMuaHoa']) {
    header('location:muahoa.php');
}
     $tongtien = 0;
     foreach ($_SESSION['arMuaHoa'] as $hoa) {
        $thanhtien = $hoa['gia'] * $hoa['soluong'];
        $tongtien += $thanhtien;
        ?>
        <tr>
            <td> <a href=""><?= $hoa['tenhoa'];?></a></td>
            <td><?= $hoa['soluong'] ?></td>
            <td><?= number_format($hoa['gia'], 0, ",",".") ?>VND</td>
            <td><?= number_format($thanhtien, 0, ",",".") ?>VND</td>
        </tr>
    <?php } ?>
    <tr>
        <td colspan="4" align="right">Tổng tiền: <?= number_format($tongtien, 0, ",",".") ?>VND</td>
    </tr>
</table>
<a href="muahoa.php">Quay lại</a>
</body>
</html>
<?php
ob_end_flush();
?>
