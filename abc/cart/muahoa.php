<?php
// khởi tạo session
session_start();
// sử dụng được hàm header()
ob_start();

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $tenhoa = $_POST['ten'];
    $soluong = $_POST['soluong'];
    $gia = $_POST['gia'];
    if (!isset($_SESSION['arMuaHoa']['id'])) {
        $_SESSION['arMuaHoa']['id'] = array(
            'tenhoa' => $tenhoa,
            'soluong' => $soluong,
            'gia' => $gia
        );
    } else {
        $_SESSION['arMuaHoa'][$id]['soluong'] += $soluong;
    }
    header('location:basket.php');
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <style type="text/css">
        body{
            width: 500px;
            margin-top: 20px auto;
        }
        h4{
            background-color: #00a19c;
            padding: 10px;
            margin-bottom: 0px;
            color: white;
        }
        div{
            background-color: #c7eeeb;
            padding: 5px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h4>Mua hoa</h4>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 form-control-label">ID Hoa</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="id" value="" id="inputEmail3" placeholder="ID hoa">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 form-control-label">Tên hoa</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="ten" id="inputPassword3" placeholder="Tên hoa">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 form-control-label">Số lượng</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="soluong" value="" id="inputEmail3" placeholder="Số lượng">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 form-control-label">Giá</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="gia" value="" id="inputEmail3" placeholder="Giá">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-secondary" name="submit">Mua hoa</button>
            </div>
        </div>
    </form>
</body>
</html>

<?php
ob_end_flush();
 ?>
