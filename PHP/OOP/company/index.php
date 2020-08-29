<?php
include 'congnhan.php';
include 'kysu.php';
include 'nhanvien.php';
include 'company.php';

$worker = new CongNhan('Tran Quyet', 25, 'Nam', 'Hà Nội', 10);
$worker4 = new CongNhan('Tran Quyet', 19, 'Nữ', 'Hà Nội', 10);
$worker2 = new CongNhan('Tran Quyet 1', 25, 'Nam', 'Hà Nội', 10);
$worker3 = new CongNhan('Tran Quyet 2', 25, 'Nam', 'Hà Nội', 10);
$engineer = new KySu('Nguyen Van A', 30, 'Nam', 'Hà Nam', 'IT');
$staff = new Staff('Nguyễn Thị C', 19, 'Nữ', 'Bắc Ninh', 'Make Product');

$company = new Company;
$company->addNewStaff($worker);
$company->addNewStaff($worker2);
$company->addNewStaff($worker4);
$company->addNewStaff($worker3);
$company->addNewStaff($engineer);
$company->addNewStaff($staff);

$staffsWithName = $company->findByName('Tran Quyet');
// $array = [1, "0", Object];



$companyStaffs = $company->all();
// echo "<pre>";
// var_dump($companyStaffs);

// die();
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
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Fullname</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($companyStaffs as $staff) : ?>
                            <tr>
                                <td><?= $staff->fullname ?></td>
                                <td><?= $staff->age ?></td>
                                <td><?= $staff->gender ?></td>
                                <td><?= $staff->address ?></td>
                            </tr>
                        <?php endforeach ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>