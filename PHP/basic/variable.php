Tất cả các biến trong PHP đều được kí hiệu với dấu $ ở đầu.

Giá trị của một biến là giá trị của phép gán gần đây nhất của nó.

Các biến được gán với toán tử =, biến ở bên trái còn biểu thức được ước lượng ở bên phải.

Biến có thể, nhưng không cần, được khai báo trước khi gán giá trị.

Biến trong PHP không có các kiểu nội tại, tức là một biến không biết trước có hay không nó sẽ được sử dụng để lưu trữ một số hoặc một chuỗi ký tự.

Biến, được sử dụng trước khi chúng được gán, có các giá trị mặc định.

PHP làm rất tốt việc chuyển đổi tự động từ kiểu này sang kiểu khác khi cần thiết.

Biến trong PHP giống với Perl.



INTEGER − số nguyên. Ví dụ 1989
	bao gồm cả nguyên âm và nguyên dương, nhưng không bao gồm số thực. Kiểu số nguyên có thể trong hệ thập phân, hệ bát phân và hệ thập lục phân. Mặc định là hệ thập phân, hệ bát phân - số nguyên được chỉ định bắt đầu với số 0 và hệ thập lục phân bắt đầu với 0x.Đối với hầu hết các nền tảng phổ biến, miền giá trị từ –2,147,483,648 tới +2,147,483,647.
DOUBLE − số thực. Ví dụ 3.14159 hay 49.1.
	Theo mặc định kiểu double sẽ in số vị trí thập phân nhỏ nhất.
BOOLEAN − có 2 giá trị TRUE hoặc FALSE.
	Nếu giá trị là một số, nó là false nếu nó bằng 0 và true nếu khác 0.
	Nếu giá trị là một chuỗi, nó false nếu chuỗi là rỗng (không tồn tại kí tự nào) hoặc là chuỗi "0", nếu không là true.
	Giá trị của kiểu NULL luôn luôn là false.
	Nếu giá trị là một array, nó false nếu nó không chứa các giá trị khác và nếu không là true. Với một object, chứa một giá trị nghĩa là có một biến thành viên đã được gán một giá trị.
	Resource hợp lệ là true (mặc dù có một vài hàm trả về các resource khi chúng thành công, và trả về FALSE nếu thất bại).
	Đừng sử dụng double như là Boolean.
NULL − là một kiểu đặc biệt, nó chỉ có giá trị: NULL
	hằng đặc biệt NULL là viết hoa, nhưng thực sự nó là không phân biệt kiểu chữ.
	Nó ước lượng là FALSE trong một ngữ cảnh Boolean.
	Nó trả về FALSE khi được kiểm tra với hàm IsSet() trong PHP.
STRING − là chuỗi các kí tự.
	chuỗi sử dụng nháy đơn là một chuỗi tĩnh, còn chuỗi sử dụng nháy kép là một chuỗi động, thay đổi tùy theo giá trị của biến.
	Không có giới hạn về độ dài của chuỗi, có thể dài tùy ý nếu bộ nhớ cho phép.
	Các chuỗi được giới hạn bởi các dấu nháy kép được PHP xử lý bằng 2 cách sau đây:
	Các biến (bắt đầu với $) được thay thế bằng biểu diễn chuỗi của giá trị của nó.
	Các chuỗi kí tự bắt đầu với (\) được thay thế với một kí tự đặc biệt
	Các quy tắc thay thế:
	\n được thay thế bằng ký tự newline (dòng mới)
	\r được thay thế bởi ký tự carriage-return, được hiểu là đưa con trỏ về đầu dòng nhưng không xuống dòng.
	\t được thay thế bởi ký tự tab
	$ được thay thế bằng một dấu $
	\" được thay thế bằng một dấu nháy kép "
	\\ được thay thế bằng một dấu gạch chéo ngược \
ARRAY − là tập hợp được đặt tên và lập chỉ mục của các giá trị khác.
OBJECT − là instance (sự thể hiện) của các lớp mà lập trình viên tự định nghĩa, nó có thể đóng gói các các loại giá trị và hàm khác nhau, nó dành riêng cho các lớp.
RESOURCE − là một biến đặc biệt nó giữ tham chiếu tới các tài nguyên ngoại vi đến PHP (ví dụ: kết nối Database).