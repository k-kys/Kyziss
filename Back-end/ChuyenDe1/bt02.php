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
    <title>Bài tập 2</title>
</head>
<body>
    <div class="container">
        <h2>Cho một danh sách các số, hãy tính trung bình giá trị, giá trị lớn nhất, giá trị nhỏ nhất các phần tử trong danh sách đó.</h2>

        <?php
        // thực hành với Mảng
        $list = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        $total = 0;
        $max = $list[0];
        $min = $list[0];
        $lengthList = count($list);
        foreach ($list as $value) {
            $total += $value;
            if ($max < $value) {
                $max = $value;
            }
            if ($min > $value) {
                $min = $value;
            }
        }
        $average = $total / $lengthList;
        
        echo "Giá trị trung bình: " . $average . "<br/>";
        echo "Giá trị lớn nhất: " . $max . "<br/>";
        echo "Giá trị nhỏ nhất: " . $min . "<br/>";
        ?>


        <!-- <?php
        // thực hành với hàm
        $list = [1, 2, 3, 4, 5, 6, 7, 8, 9];

        $max = max($list);
        $min = min($list);

        $total = 0;
        $lengthList = count($list);
        foreach ($list as $value) {
            $total += $value;
        }
        $average = $total / $lengthList;
        
        echo "Giá trị trung bình: " . $average . "<br/>";
        echo "Giá trị lớn nhất: " . $max . "<br/>";
        echo "Giá trị nhỏ nhất: " . $min . "<br/>";
        ?> -->
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>