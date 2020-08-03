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
<title>Bài tập 5</title>
</head>
<body>
<div class="container">
    <h2>Cho một danh sách và cho một giá trị nhập vào từ bàn phím,hãy cho biết phần tử đó có trong danh sách không? trường hợp có thì cho biết vị trí cuối cùng nó xuất hiện</h2>
    <form action="" method="POST" role="form">
        <legend>Form title</legend>
    
        <div class="form-group">
            <label for="">Nhập số</label>
            <input type="text" class="form-control" name="num" id="" placeholder="Input field">
        </div>
    
        
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php 
        $ds = [1, 2, 5, 3, 1, 7, 3, 2, 1];
        $countds = count($ds);
        if (isset($_POST['num'])) {
            $num = $_POST['num'];
            $check = false;
            $vitri = -1;
            for ($i = $countds - 1; $i >= 0; $i--) { 
                if ($ds[$i] == $num) {
                    $check = true;
                    $vitri = $i + 1;
                    break;
                }
            }
            if ($check == true) {
                echo "Phần tử có trong mảng ở vị trí " . $vitri;
            } else {
                echo "Phần tử không có trong mảng";
            }
        }
     ?>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>