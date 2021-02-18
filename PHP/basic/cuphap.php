ĐIỂM KHÁC NHAU GIỮA LỆNH PRINT VÀ LỆNH ECHO

Trong PHP, về cơ bản thì hai lệnh này khá giống nhau, tuy nhiên đôi khi bạn cũng nên để ý đến hai điểm khác nhau sau:

Lệnh print là một hàm số, khi được thực thi nó sẽ trả về kết quả là 1, nếu không thì trả về kết quả 0. Do đó, bạn có thể gán kết quả của lệnh print này cho một biến, còn với lệnh echo thì không.

<?php 
	$viet = print 'abcd'; 
	$jack = echo 'cdef'; //sai
	?>

	Lệnh print chỉ có thể được sử dụng với một tham số, trong khi lệnh echo có thể được dùng với nhiều tham số.
	<?php
   echo 'v','i','e','t'; //dùng với 4 tham số
   echo ('j'),('a');     //dùng được cả dấu ngoặc cho từng tham số

   print 'c';         //đúng
   print 'k','t';     //sai
   ?>

   PHP KHÔNG PHÂN BIỆT KHOẢNG TRẮNG

   PHP PHÂN BIỆT KIỂU CHỮ

   LỆNH TRONG PHP LÀ CÁC BIỂU THỨC ĐƯỢC KẾT THÚC BỞI DẤU CHẤM PHẢY (;)

   BIỂU THỨC LÀ SỰ KẾT HỢP CỦA CÁC TOKEN TRONG PHP
   Các khối nhỏ nhất trong PHP là các token (mà không thể phân chia được nữa), ví dụ: các số (3.14159), các chuỗi (.two.), các biến ($two), hằng số (TRUE), và các từ đặc biệt mà tạo nên chính cú pháp của PHP như if, else, while, for, …

   DẤU NGOẶC ÔM TẠO CÁC KHỐI PHP
   Mặc dù các lệnh không thể được kết hợp giống như các biểu thức, nhưng bạn luôn luôn có thể đặt một dãy các lệnh được bao quanh bởi các dấu ngoặc ôm ở bất cứ đâu để tạo các khối PHP.

   Các lệnh PHP sau là tương đương:
   <?php 
   if (3 == 2 + 1)
   	print("Học PHP hay nhất tại VietJack.<br>");
   
   if (3 == 2 + 1)
   {
   	print("Học PHP");
   	print(" hay nhất tại VietJack.<br>");
   }
   ?>