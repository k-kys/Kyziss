<?php View::header() ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <?php View::alert() ?>
            <form action="http://mvc.local/?controller=student&action=store" method="POST" role="form">
                <legend>Add new Student</legend>

                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" id="" value="<?= FormData::get('name') ?>" placeholder="Nguyen Van A">
                </div>
                <div class="form-group">
                    <label for="">Code</label>
                    <input type="text" name="code" class="form-control" id="" value="<?= FormData::get('code') ?>" placeholder="1554258">
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" name="phone" class="form-control" id="" value="<?= FormData::get('phone') ?>" placeholder="01234589">
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <textarea name="address" id="inputAddress" class="form-control" rows="3" required="required"><?= FormData::get('address') ?></textarea>
                </div>

                <div class="form-group">
                    <label for="">Date of Birth</label>
                    <input type="date" name="dob" class="form-control" id="" value="<?= FormData::get('dob') ?>" placeholder="Nguyen Van A">
                </div>

                <div class="form-group">
                    <label for="">Gender</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="gender" id="inputGender" value="1" <?= FormData::get('gender') == 1 ? 'checked' : '' ?>>
                            Male
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="gender" id="inputGender" value="2" <?= FormData::get('gender') == 2 ? 'checked' : '' ?> checked>
                            Female
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Add</button>
            </form>
        </div>
    </div>
</div>
<?php View::footer() ?>
