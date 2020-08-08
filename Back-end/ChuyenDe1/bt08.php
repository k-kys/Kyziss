<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bài tập 8</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <h2>Cho một danh sách và cho một giá trị nhập vào từ bàn phím. Chừng nào còn tồn tại phần tử đó trong danh sách, hãy xóa hết nó</h2>
            <form action="" method="POST" role="form">
                <legend>Form title</legend>

                <div class="form-group">
                    <label for="">Nhập số:</label>
                    <input type="text" class="form-control" name="num" id="" placeholder="Input field">
                </div>

                

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <?php 
            $ds = [1, 4, 6, 8, 1, 6, 8];
            echo "Mảng cho sẵn: ";
            print_r($ds);

            if (isset($_POST['num'])) {
                $num = $_POST['num'];
                $check = false;
                $vitri = -1;
                
                
                do {
                    for ($i=0; $i < count($ds) - 1; $i++) { 
                        if ($ds[$i] == $num) {
                            $vitri = $i;
                            $check = true;
                            break;
                        }

                    }

                    if ($vitri != -1) {
                        // Dồn phần tử i về bên trái 1 vị trí
                        for ($i = $vitri + 1; $i < count($ds); $i++) { 
                            $ds[$vitri] = $ds[$i];
                            $vitri++;
                        }
                        // Bỏ phần tử cuối
                        array_pop($ds);
                        echo "<hr/>Mảng sau khi xóa phần tử: ";
                        for ($i=0; $i < count($ds); $i++) { 
                            echo $ds[$i] . " ";
                        }
                    } 
                    $vitri = -1;
                } while ($check == true);


                

                // if ($vitri != -1) {
                // echo "<br/>Mảng sau khi xóa phần tử: ";
                // for ($i=0; $i < count($ds); $i++) { 
                //     echo $ds[$i] . " ";
                // }
                // } else {
                //     echo "Phần tử không có trong mảng";
                // }
                
            }
            ?>
        </div>


        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="Hello World"></script>
    </body>
    </html>