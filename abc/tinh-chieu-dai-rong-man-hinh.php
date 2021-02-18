<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Tính chiều dài và rộng màn hình</title>
</head>

<body>
    <div class="container">
        <h3>Tính chiều dài và chiều rộng màn hình khi biết tỉ lệ và độ dài đường chéo</h3>
        <form action="" method="POST">
            <div class="form-group">
                <label for="">Độ dài đường chéo (inch)</label>
                <input type="number" step="0.0001" name="d" id="" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Tỉ lệ</label>
                <input type="number" name="r1" id=""> <b>:</b>
                <input type="number" name="r2" id="">
            </div>

            <button type="submit" name="cal" class="btn btn-primary">Calculate</button>
        </form>
        <?php
        if (isset($_POST['cal'])) {
            if ($_POST["d"] == '' || $_POST["r1"] == '' || $_POST["r2"] == '') {
                echo "Giá trị nhập thiếu";
            } else {
                (float) $d1 = $_POST["d"];
                (float) $r1 = $_POST["r1"];
                (float) $r2 = $_POST["r2"];

                (float) $r = ($r1 / $r2);
                (float) $d = $d1 * 2.54;
                $w = ($d) / (sqrt((1 / pow($r, 2)) + 1));
                $l = sqrt(pow($d, 2) - pow($w, 2));
                $chieudai = number_format($w, 2);
                $chieurong = number_format($l, 2);

        ?>
                <h4>Kích thước của màn hình là: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $chieudai ?> cm x <?= $chieurong ?> cm</h4>
        <?php
            }
        }

        ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>