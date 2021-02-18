
Câu 4: Mảng là gì? Có mấy loại mảng trong PHP?

answer:

Mảng là một biến có thể chứa được nhiều phần tử, từ đó ta có thể dễ dàng lưu trữ, xắp xếp, hay xóa bỏ các phần tử trong mảng một cách dễ dàng.

Mảng bao gồm 2 thành phần là KEY và VALUE, key dùng để truy cập vào phần tử của mảng qua đó ta có thể gán giá trị hoặc lấy giá trị của các phần tử trong mảng.

Mảng(array) có 3 loại chính là:

MảNG TUẦN TỰ: là mảng có key tự động tạo là chữ số tăng dần bắt đầu từ 0.
    <?php
    $arr = ['phantu1', 'phantu2', 'phantun'];
     ?>

MẢNG KHÔNG TUẦN TỰ: là mảng có key mà bạn phải tự định nghĩa bằng các ký tự chữ hoặc số, và key không được sắp xếp bất kỳ thứ tự nào.
    <?php
    $arr = [
        'red' => 'Đây là màu đỏ',
        'blue' => 'Đây là màu xanh',
    ];
     ?>

MẢNG ĐA CHIỀU: là mảng có chứa ít nhất một mảng khác trong nó.

    <?php
    $arr = [
        'oto' => [
            'red' => 'Oto màu đỏ',
            'blue' => 'Oto màu xanh',
        ],
        'xemay' => [
            'yellow' => 'Xe máy màu vàng',
            'black' => 'Xe máy màu đen',
        ]
    ];

    echo $arr[oto][red];
     ?>
