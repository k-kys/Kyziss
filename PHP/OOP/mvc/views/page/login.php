<?php View::header() ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-push-3">
            <?php View::alert() ?>
                <form action="http://mvc.local/?controller=page&action=postLogin" method="POST" role="form">
                    <legend>Login</legend>

                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control" id="" placeholder="Admin">
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" id="" placeholder="********">
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
        </div>
    </div>
</div>
<?php View::footer() ?>
