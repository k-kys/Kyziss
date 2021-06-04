<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Image Upload & Resize</h1>
        <form action="{{ url('resize/resize_image') }}" method="post" enctype="multipart/form-data">
            @csfr
            <div class="row">
                <div class="col-md-4">
                    <h3>Select Image</h3>
                </div>
                <div class="col-md-4">
                    <input type="file" name="image" class="image">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
            </div>
        </form>
        <br>
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>{{ $message }}</strong>
</div>
<div class="row">
    <div class="col-md-6">
        <strong>Original Image:</strong>
        <br>
<img src="/images/{{ Session::get('imageName') }}" class="img-responsive img-thumbnail" alt="">
    </div>
    <div class="col-md-4">
        <strong>Thumbnail Image:</strong>
        <br>
<img src="/thumbnail/{{ Session::get('imageName') }}" class="img-thumbnail" alt="">
    </div>
</div>
        @endif
    </div>
</body>
</html>
