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
            <div class="col-md-6">
                <form action="proccess_calc.php" method="POST" role="form">
                    <legend>Calculator</legend>

                    <div class="form-group">
                        <label for="">Number a</label>
                        <input type="text" name="numa" class="form-control" id="">
                    </div>

                    <div class="form-group">
                        <label for="">Number b</label>
                        <input type="text" name="numb" class="form-control" id="">
                    </div>

                    <div class="form-group">
                        <label for="">Operator</label>
                        <select name="operator" id="input" class="form-control" required="required">
                            <option value="+">Add</option>
                            <option value="-">Sub</option>
                            <option value="/">Divide</option>
                            <option value="*">Multiply</option>
                        </select>
                    </div>


                    <button type="submit" class="btn btn-primary">Calculate</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
