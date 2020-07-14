<?php
include '../request.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="store.php" method="POST" role="form">
                    <legend>Create new User</legend>

                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control" id="" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" name="password" class="form-control" id="" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="">Gender</label> <br>
                        <input type="radio" name="gender" checked value="1"> Nam <br>
                        <input type="radio" name="gender" value="2"> Nữ
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" name="address" class="form-control" id="" placeholder="">
                    </div>


                    <button type="submit" class="btn btn-success">Add new User</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
