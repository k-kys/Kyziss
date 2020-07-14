<?php
include 'connection.php';

$id = $_GET['id'];
$sql = "SELECT * FROM users where id = $id";

$result = $connection->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    die('User not found');
}

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
                <form action="update.php" method="POST" role="form">
                    <legend>Edit <?php echo $id ?></legend>
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input name="username" type="text" value="<?php echo $user['username'] ?>" class="form-control" id="" placeholder="QuyetTran">
                    </div>
                    <div class="form-group">
                        <div class="radio">
                            <label>
                                <input type="radio" name="gender" id="inputGender" value="1"
                                <?= $user['gender'] == 1 ? 'checked' : '' ?>
                                >
                                Male
                            </label>

                            <label>
                                <input type="radio" name="gender" id="inputGender" value="2"
                                <?= $user['gender'] == 2 ? 'checked' : '' ?>
                                >
                                Female
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <input name="address" value="<?= $user['address'] ?>" type="text" class="form-control" id="" placeholder="Ha Noi">
                    </div>


                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
