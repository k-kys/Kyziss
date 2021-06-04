<?php
$output_dir = "uploads/";//Đường dẫn tới thư mục cần upload
//Chúng ta cần để thư mục với đường dẫn tương đối
if (isset($_FILES["INPUT_FILE_NAME "])) { //Kiểm tra xem bạn có chọn file để upload hay không với INPUT_FILE_NAME bạn sẽ khai báo ở bước 3
    $ret = array(); //Khai báo một biến tạm  kiễu Array lữu trữ file vừa upload.
    $error = $_FILES["INPUT_FILE_NAME "]["error"]; // Khai báo một biến tạm  kiễu Array lữu trữ lổi nếu xẩy ra lổi

    if (!is_array($_FILES["INPUT_FILE_NAME "]["name"])) { //Kiểm tra trường hợp bạn upload đơn file
        $fileName = $_FILES["INPUT_FILE_NAME "]["name"]; // lấy tên File
        move_uploaded_file($_FILES["INPUT_FILE_NAME "]["tmp_name"], $output_dir.$fileName); //Upload file
        $ret[]= $fileName; // Gán File vừa upload vào mãng luu trữ
    } else { //Kiểm tra trường hợp bạn upload nhiều file
        $fileCount = count($_FILES["INPUT_FILE_NAME "]["name"]); // Đếm tổng số file upload
        for ($i=0; $i < $fileCount; $i++) { // Do chúng ta up nhiều File nên chúng ta tạo một vòng lặp để xửa lý upload từ File một
            $fileName = $_FILES["INPUT_FILE_NAME "]["name"][$i];  // lấy tên File thứ i
            move_uploaded_file($_FILES["INPUT_FILE_NAME "]["tmp_name"][$i], $output_dir.$fileName); // Upload file thứ i
            $ret[]= $fileName; // Gán File vừa upload vào mãng luu trữ
        }
    }
    echo json_encode($ret); // return về dạn json  mảng luu trữ file vừa upload.
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="uploadfile.css" rel="stylesheet"> -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- <script src="jquery.uploadfile.js"></script> -->
</head>
<body>
    <div id="codevivu-uploader">Upload</div>






    <script>
        $(document).ready(function()
        {
            $("#codevivu-uploader").uploadFile({
                url:"YOUR_FILE_UPLOAD_URL",
                fileName:"INPUT_FILE_NAME"
            });
        });
    </script>
    <script>
        $(document).ready(function()
        {
            $("#codevivu-uploader").uploadFile({
                url:"YOUR_FILE_UPLOAD_URL",
                fileName:"INPUT_FILE_NAME",
                dragDrop: true,
                showDelete: true,
                showDownload:true,
                deleteCallback: function (data, pd) {
                  for (var i = 0; i < data.length; i++) {
                     $.post("YOUR_FILE_DELETE_URL", {op: "delete",name: data[i]},
                         function (resp,textStatus, jqXHR) {
                   //Show Message
                   alert("File Deleted");
               });
                 }
         pd.statusbar.hide(); //You choice.

     },
     downloadCallback:function(filename,pd) {
       location.href="YOUR_FILE_DOWNLOAD_URL?filename="+filename;
   }
});
        });
    </script>
</body>
</html>
