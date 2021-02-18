<?php
// khai báo một chuỗi Regular Expression chỉ cần bắt đầu bằng ký tự / và kết thúc cũng là ký tự /


// pattern ktra subject có tồn tại chuỗi abc không
$pattern = '/abc/';
// $subject = 'abc';
$subject = 'mabcd';
if (preg_match($pattern, $subject, $match)) {
    echo 'Chuỗi RegEx so khớp <br/>';
    var_dump($match);
}
//Trong ví dụ này chuỗi $pattern = '/abc/' có ý nghĩa là tìm trong chuỗi $subject xem có tồn tại chuỗi abc không. Vì $subject = 'abc' nên kết quả hàm preg_match trả về kết quả đúng.
// thay subject thành 'mabcd'. Kết quả trả về vẫn là đúng tại vì trong $subject tuy có giá trị là mabcd nhưng tách nhỏ ra thì nó tồn tại chuỗi abc nên kết quả so khớp là đúng.


