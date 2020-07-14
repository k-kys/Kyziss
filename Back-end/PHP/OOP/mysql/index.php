<?php
include 'connection.php';
if (!empty($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$keyword = null;
if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
}
$limit = 2;
$offset = ($page - 1) * $limit;

$url = 'index.php?';
$sqlTotal  = "SELECT count(*) as total FROM users";
$sql = "SELECT * FROM users LIMIT $limit OFFSET $offset";
if ($keyword != null) {
    $sqlTotal = "SELECT count(*) as total FROM users WHERE username like '%{$keyword}%'";
    $sql = "SELECT * FROM users WHERE username like '%{$keyword}%'  LIMIT $limit OFFSET $offset";
    $url = 'index.php?keyword=' . $keyword . '&';
}
$resultTotal = $connection->query($sqlTotal);
$totalRecord = $resultTotal->fetch_assoc()['total'];
$totalPage = ceil($totalRecord / $limit);



$result = $connection->query($sql);

$users = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
} else {
    echo "No Result";
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
            <div class="col-md-12">
                <form action="" method="GET" class="form-inline" role="form">
                    <div class="form-group">
                        <label class="sr-only" for="">Từ khóa</label>
                        <input value="<?= $keyword ?>" type="text" name="keyword" class="form-control" id="">
                    </div>

                    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                </form>
            </div>
            <div class="col-md-12">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Username</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($users as $user) {
                        ?>
                            <tr>
                                <td><?php echo $user['id']; ?></td>
                                <td><?php echo $user['username']; ?></td>
                                <td><?php echo $user['gender'] == 1 ? 'Male' : 'Female' ?></td>
                                <td><?php echo $user['address']; ?></td>
                                <td>
                                    <a class="btn btn-primary" href="edit.php?id=<?php echo $user['id'] ?>">Edit</a>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <ul class="pagination">
                    <?php if ($page > 1): ?>
                        <li><a href="<?=$url?>page=<?php echo $page - 1 ?>">&laquo;</a></li>
                    <?php endif ?>
                    <?php for ($i = 1; $i <= $totalPage ; $i++) {
                    ?>
                        <li class="<?= $page == $i ? 'active' : '' ?>"><a href="<?=$url?>page=<?= $i ?>" ><?= $i ?></a></li>
                    <?php
                    } ?>
                    <?php if ($page < $totalPage): ?>
                        <li><a href="<?=$url?>page=<?php echo $page + 1 ?>">&raquo;</a></li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
