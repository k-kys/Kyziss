
Câu 6: Để chuyển mảng thành chuỗi ta dùng hàm gì? Để tách chuỗi thành mảng ta dùng hàm gì?

answer:

implode(separator,array)    dùng để chuyển mảng thành một chuỗi
<?php
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr);
# Hello World! Beautiful Day!
?>

separator   Optional. Chỉ định những gì cần đặt giữa các phần tử mảng. Mặc định là "" (một chuỗi trống)
array   Required. Mảng để tham gia vào một chuỗi


 *** *** ***

explode(separator,string,[limit])   dùng để chuyển một chuỗi thành mảng.
<?php
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));
# Array ( [0] => Hello [1] => world. [2] => It's [3] => a [4] => beautiful [5] => day. )
?>

- separator   Required. Chỉ định nơi ngắt chuỗi
- string  Required. Chuỗi để tách
- limit   Optional. Chỉ định số phần tử mảng để trả về.
    Những giá trị khả thi:
        Greater than 0 - Trả về một mảng có tối đa (các) phần tử giới hạn
        Less than 0 - Trả về một mảng ngoại trừ các phần tử -limit cuối cùng
        0 - Trả về một mảng có một phần tử


--------------------------------------
Ngoài ra ta có hàm join($ky_tu,$array) giống hàm implode

