
Câu 5: Mảng tuần tự là gì? Khác gì với bất tuần tự? Để duyệt mảng ta dùng vòng lặp nào?

answer:

Mảng tuần tự là mảng có key là chữ số bắt đầu từ 0 và tăng dần. Nó khác với mảng bất tuần tự là các phần tử trong nó KEY được sắp xếp tăng dần từ 0 còn mảng bất từ tự thì không.

Để duyệt mảng tả có thể dùng bất cứ vùng lập nào? Tuy nhiên chuẩn nhất là dùng vòng lập foreach, vì vòng lập này được nhà phát triển PHP xây dựng riêng cho việc duyệt mảng, nêu nó dễ sử dụng hơn, tốc độ xử lý của nó nhanh hơn.

<?php
foreach ($variable as $key => $value) {
    # code...
}
 ?>
