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
<title>Tính tổng các phần tử trong danh sách</title>
</head>
<body>
<div class="container">
    <h2>Cho một danh sách các số, hãy tính tổng các phần tử trong danh sách đó</h2>

    <?php 
        $list = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $total = 0;
        foreach ($list as $key => $value) {
            $total += $value;
        }
        echo "Tổng của mảng [1,2,3,4,5,6,7,8,9,10] là : " . $total;
    ?>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>