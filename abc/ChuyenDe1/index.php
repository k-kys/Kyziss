<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>HTML for CRUD</title>
</head>

<body>
    <div class="container">
        <?php
        require('process.php');

        $db_con = new MySqlDrive();
        $query = "SELECT * FROM student";
        $result = mysqli_query($db_con->db_connect(), $query);
        ?>
        <?php if (isset($_SESSION['message'])) : ?>

            <div>
                <h3>
                    <?= $_SESSION['message']; ?>
                    <?php session_destroy(); ?>
                </h3>
            </div>
        <?php endif ?>

        <div class="row">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Roll</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?= $row['name']; ?></td>
                            <td><?= $row['phone']; ?></td>
                            <td><?= $row['roll']; ?></td>
                            <td>
                                <a href="index.php?edit=<?= $row['id'] ?>" class="btn btn-default">Edit</a>
                                <a href="process.php?delete=<?= $row['id'] ?>" class="btn btn-default">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <br />

        <form action="process.php" method="POST" role="form">
            <legend>Form title</legend>

            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" id="" value="<?= $name ?>" placeholder="Input field">
            </div>

            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" class="form-control" name="phone" id="" value="<?= $phone ?>" placeholder="Input field">
            </div>

            <div class="form-group">
                <label for="">Roll</label>
                <input type="number" class="form-control" name="roll" id="" value="<?= $roll ?>" placeholder="Input field">
            </div>

            <div class="form-group">
                <input type="hidden" value="<?= $id ?>" name="id">
                <?php if ($update == true) : ?>
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                <?php else : ?>
                    <button type="submit" name="save" class="btn btn-primary">Submit</button>
                <?php endif ?>
            </div>
        </form>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </div>
</body>

</html>