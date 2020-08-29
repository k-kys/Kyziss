<?php View::header(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php View::alert(); ?>
            <h1>Danh sách sinh viên</h1>
            <a href="http://mvc.local/?controller=student&action=create" class="btn btn-primary">Add new student</a>
            <br><br>
            <form action="" method="GET" class="form-inline" role="form">
            
                <div class="form-group">
                    <label class="sr-only" for="">Name</label>
                    <input type="hidden" name="controller" value="student">
                    <input type="text" name="name" class="form-control" id="" value="<?= GetRequest::get('name') ?>" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="">Class</label>
                    <select name="class_id" id="inputClass_id" class="form-control" required="required">
                        <option value="">Select</option>
                        <option value="">PHP</option>
                        <option value="">JAVA</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Dob</th>
                        <th>Gender</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($students as $student): ?>
                        <tr>
                            <td><?= $student['id'] ?></td>
                            <td><?= $student['name'] ?></td>
                            <td><?= $student['code'] ?></td>
                            <td><?= $student['phone']?></td>
                            <td><?= $student['address']?></td>
                            <td><?= $student['dob']?></td>
                            <td><?= $student['gender'] == 1 ? 'Nam' : 'Nữ' ?></td>
                            
                            <td>
                                <?php if(Auth::isAdmin()): ?>
                                <a href="http://mvc.local/?controller=student&action=destroy&id=<?= $student['id'] ?>" class="btn btn-danger btn-delete">Delete</a>
                                <a href="http://mvc.local/?controller=student&action=edit&id=<?= $student['id'] ?>" class="btn btn-primary">Edit</a>
                            <?php endif ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <?= $paginate ?>
        </div>
    </div>
</div>



<script>
    $(document).ready(function () {
        $('.btn-delete').click(function (event) {
            let isDelete = confirm('Bạn có muốn xóa bản ghi này hay không');
            if (!isDelete) {
                event.preventDefault();
            }
        })
    })
</script>

<?php View::footer(); ?>
