<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hàm rand() lấy 1 số random trong 1 dãy trước</title>
</head>
<body>
    <?php
        srand(microtime() * 1000);
        $num = rand(1, 4);  //ngẫu nhiên từ 1 đến 4

        switch ($num) {
            case 1: $hinhAnh = "./img/gai1.jpg";
                break;
            case 2: $hinhAnh = "./img/gai2.jpg"; 
                break;
            case 3: $hinhAnh = "./img/gai3.jpg"; 
                break;
            case 4: $hinhAnh = "./img/gai4.jpg";
                break;
        }
        echo "Hình ảnh ngẫu nhiên:<br/> <img src=$hinhAnh />";
    ?>
</body>
</html>