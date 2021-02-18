
Câu 13: Mysql_close() cần thiết như thế nào trong thực tế ?. Vì sao ít thấy người dùng áp dụng nó?

answer:

Mysql_close() được dùng để đóng kết nối đến cơ sở dữ liệu đã mở trước đó.
    Điều này rất cần thiết vì nó giúp giảm tải xử lý của database,
        + hiểu đơn giản thế này một người truy cập tới website của bạn và website của bạn có kết nối database và điều đó đồng nghĩa với việc sẽ có ít nhất một kết nối database được tạo, vậy 100 người sẽ có 100 kết nối, và giả sử dụng trong đó có 99 người không sử dụng nữa nhưng kết nối vẫn còn hiệu lực thì điều này có nghĩa là thay vì database phải xử lý chỉ có 1 kết nối mà nó phải xử lý 100 kết nối.

Vì sao ít người dùng
    + đầu tiên vì hiệu quả mang lại của hàm này rất khó thấy trong các trường hợp thông thường, trên thực tế khi người dùng không còn sử dụng nữa thì sau một khoảng thời gian ngắn kết nối này sẽ tự động đóng,
    + thứ hai vì ít người có thể nhìn thấy được vấn đề nếu không có dịp tiếp xúc hoặc làm việc với lượng dữ liệu lớn thì sẽ thấy việc mở hoặc đóng một conneciton kịp thời và chính xác sẽ tiết kiệm được rất nhiều tài nguyên cho hệ thống cũng như tốc độ xử lý của hệ thống,

    => vì thế hàm này rất cần thiết khi bạn quản lý tài nguyên và tốc độ thực thi của hệ thống hay của website.
