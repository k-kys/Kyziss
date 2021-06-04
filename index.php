<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous"></script>


  <!-- Latest compiled and minified CSS & JS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->



</head>
<body>
  <?php
$html = <<<HTML
<p>
  Chi&#7871;c l&aacute; cu&#7889;i c&ugrave;ng
  <p>
    <img style="width: 25%;" data-filename="illustration-stylish-young-man-avatar-man-profile_15870-706.jpg" src="/storage/images/book/description/1619585637_0.png">
  </p>
  <p>
    <img style="width: 215px;" data-filename="avatar5.png" src="/storage/images/book/description/1619593163_1.png">
  </p>
  <p>m&ocirc; t&#7843;</p>
  <p>
    <img style="width: 50%;" data-filename="Hinh-anh-quyen-sach (4).jpg" src="/storage/images/book/description/1619663965_2.png"><br>
  </p>
  <p></p>
</p>
HTML;

$dom = new \DOMDocument();
$dom->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
$images = $dom->getElementsByTagName('img');
var_dump($images);
  ?>








<!--

  <p>
    Chiếc lá cuối cùng
  </p>
  <p>
    <img style="width: 25%;" data-filename="illustration-stylish-young-man-avatar-man-profile_15870-706.jpg" src="/storage/images/book/description/1619585637_0.png">
  </p>
  <p>
    <img style="width: 215px;" data-filename="avatar5.png" src="/storage/images/book/description/1619593163_1.png">
  </p>
  <p>mô tả</p>
  <p>
    <img style="width: 50%;" data-filename="Hinh-anh-quyen-sach (4).jpg" src="/storage/images/book/description/1619663965_2.png"><br>
  </p>
  <p></p>
  <p></p>
 -->

<?php


if(a=0 and b=0; "pt vô định";
  if(a=0 and b<>0; "pt vô nghiệm";
    if(a<>0 and b=0; 0; (-b/a))
  )
)

if(a=0, if(b=0, if(c=0, "Vô số nghiệm", "Vô nghiệm"), -c/b), if(delta<0, "Vô nghiệm", if(delta=0, -b/2a, (-b-sqrt(delta))/(2*a))))



(ngay_di-ngay_den) * don_gia_khau_phan_an




 ?>

</body>
</html>
