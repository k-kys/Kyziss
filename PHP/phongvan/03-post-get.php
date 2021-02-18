
Câu 3: Phân biệt $_POST và $_GET trong php?

answer:

Cả $_GET và $_POST đều được dùng để gửi dữ liệu lên server.

$_GET: Gửi dữ liệu lên server thông qua URL, nên thông tin dữ liệu hiển thị lên url vì thế bảo mật kém, dữ liệu gửi lên bị giới hạn 1024 ký tự.
$_POST: Gửi dữ liệu lên server dưới dạng ẩn thông qua HTTP Header vì thế nó có tính bảo mật cao hơn so với GET, dữ liệu gửi lên không bị giới hạn.
Tuy nhiên tốc độ thực thi xử lý của Post chậm hơn Get.
