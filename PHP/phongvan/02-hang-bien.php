
Câu 2: Hằng trong PHP khác gì so với biến? Nếu 1 hằng được định nghĩa 2 lần, thì liệu có bị lỗi không?

answer:

Hằng và biến trong PHP là khái niệm khác nhau:

Đầu tiên khác nhau là cách khai báo:
    Biến thì chỉ cần dùng ký tự $ để gắn hoặc lấy giá trị.
    Hằng dùng hàm define() gắn giá trị và dùng constant() để lấy giá trị.

Điểm khác biệt lớn nhất là hằng là không thể thay đổi trong suốt quá trình chạy chương trình, biến thì có.

Nêu 1 hằng được định nghĩa 2 lần thì chương trình vẫn chạy được bình thường tuy nhiên hằng chỉ có giá trị của lần định nghĩa đầu tiên.
