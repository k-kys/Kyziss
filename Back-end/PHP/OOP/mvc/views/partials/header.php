<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OOP MVC</title>
    <link rel="shortcut icon" href="http://mvc.local/public/icon/favicon.ico" type="image/x-icon"/>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <style>
        img.img-circle.img-avatar {
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://mvc.local/">PHP DEV</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class=""><a href="http://mvc.local/?controller=student">Student</a></li>
                    <li class=""><a href="http://mvc.local/?controller=class">Class</a></li>
                </ul>
                
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>

                <ul class="nav navbar-nav">
                    <li class=""><a href="http://mvc.local/?controller=page&action=ptb2">Ptb2</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <ul class="nav navbar-nav">
                        <li class=""><a href="http://mvc.local/?controller=page&action=register">Register</a></li>
                    </ul>
                    <?php if (Auth::check()): ?>
                        <li class="dropdown">
                            <a style="padding-bottom: 5px;" href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php $currentUser = Auth::getUser();
                                if ($currentUser['avatar'] != null) : ?>
                                    <img src="<?= Url::to($currentUser['avatar']) ?>" class="img-circle img-avatar" alt="Avatar" title="Avatar">
                                <?php endif ?>
                                <?= Auth::username() ?> <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="http://mvc.local/?controller=user&action=profile">Profile</a></li>
                                <li><a href="http://mvc.local/?controller=user&action=changePassword">Đổi mật khẩu</a></li>
                                <li><a href="http://mvc.local/?controller=page&action=logout">Logout</a></li>
                            </ul>
                        </li>
                        <?php else: ?>
                            <li><a href="http://mvc.local/?controller=page&action=login">Login</a></li>
                        <?php endif ?>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
