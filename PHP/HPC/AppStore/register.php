<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div class="container">
        
        <form action="addaccount.php" method="POST" role="form">
            <legend>Register</legend>
        
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" id="" placeholder="example@email.com">
            </div>
        
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" id="" placeholder="Name">
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" id="" placeholder="Password">
            </div>
        
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
        
    </div>
</body>
</html>