<?php 
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    include "connect.php";
    $query = "SELECT * FROM accounts WHERE email = '{$email}' AND password = '{$password}'";
    $result = $conn->query($query); 
    if (!$result->num_rows) {
        echo "Login fail. Try <a href=\"login.php\">Login</a> or <a href=\"register.php\">Register</a>";
    } else {
        header('Location: index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
    <title>Login</title>
    <style>
        body {
            text-align: center;
        }
        form {
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container">
            
            <form action="" method="POST" role="form">
                <legend>Login</legend>
            
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" id="" placeholder="example@email.com">
                </div>
            
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" id="" placeholder="Password">
                </div>
            
                <button type="submit" name="login" class="btn btn-primary">Login</button>
            </form>
            
        <div>
            Do not have an account ? <a href="register.php">Register</a>
        </div>
    </div>
</body>
</html>