<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Bài tập 4</title>
</head>
<body>
<div class="container">
    <h2>Cho một danh sách và cho một giá trị nhập vào từ bàn phím, hãy cho biết phần tử đó có trong danh sách không? trường hợp có thì cho biết vị trí đầu tiên nó xuất hiện</h2>

    <form action="" method="POST" role="form">
            <legend>Form title</legend>

            <div class="form-group">
                <label for="">Nhập số tìm kiếm</label>
                <input type="text" class="form-control" name="num" placeholder="Input field">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

<?php
$arr = [1, 2, 5, 6, 8, 9];
if (isset($_POST['num'])) {
    $num = $_POST['num'];
    if (in_array($num, $arr)) {
        $vt = array_search($num, $arr);
        echo "<h4>Có số " . $num . " trong danh sách tại vị trí " . $vt . "</h4>";
    } else {
        echo "<h4>Không có số " . $num . " trong danh sách</h4>";
    }

}

?>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>