<?php View::header() ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="http://mvc.local/?controller=student&action=update" method="POST" role="form">
                <legend>Edit student: <?= $student['name'] ?></legend>
                <input type="hidden" name="_id" value="<?= $student['id'] ?>">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" value="<?= $student['name'] ?>" class="form-control" id="" placeholder="Nguyen Van A">
                </div>
                <div class="form-group">
                    <label for="">Code</label>
                    <input type="text" name="code" value="<?= $student['code'] ?>" class="form-control" id="" placeholder="1554258">
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" name="phone" value="<?= $student['phone'] ?>" class="form-control" id="" placeholder="01234589">
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <textarea name="address" id="inputAddress" class="form-control" rows="3" required="required"><?= $student['address'] ?></textarea>
                </div>

                <div class="form-group">
                    <label for="">Date of Birth</label>
                    <input type="date" name="dob" value="<?= $student['dob'] ?>" class="form-control" id="" placeholder="Nguyen Van A">
                </div>

                <div class="form-group">
                    <label for="">Gender</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="gender" id="inputGender" value="1" <?= $student['gender'] == 1 ? 'checked' : '' ?> >
                            Male
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="gender" id="inputGender" value="2" <?= $student['gender'] == 2 ? 'checked' : '' ?> >
                            Female
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>
<?php View::footer() ?>
