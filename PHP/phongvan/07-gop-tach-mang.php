
Câu 7: Trong PHP để gộp mảng ta dùng hàm gì? Để tách mảng ta dùng hàm gì?

answer:

array_merge($array1, $array2, $array3,…)    dùng để nối các mảng thành một mảng duy nhất
<?php
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));
# Array ( [0] => red [1] => green [2] => blue [3] => yellow )
?>

*** *** ***

array_slice(array,start,[length],[preserve])    dùng để tách mảng thành một mảng nhỏ hơn.
<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange");
array_splice($a1,0,2,$a2);
print_r($a1);
# Array ( [0] => purple [1] => orange [c] => blue [d] => yellow )
?>

    - array   Required. Specifies an array

    - start   Required. Numeric value. Chỉ định nơi hàm sẽ bắt đầu xóa các phần tử.
                0 = giá trị đầu tiên. (như vd trên)
                Nếu giá trị này được đặt thành một số âm, hàm sẽ bắt đầu từ phần tử cuối cùng.
                    <?php array_splice($a1,-1,1,$a2); # Array ( [a] => red [b] => green [c] => blue [0] => purple [1] => orange )?>
                -2 có nghĩa là bắt đầu từ phần tử cuối cùng thứ hai của mảng.
                    <?php array_splice($a1,-2,1,$a2); # Array ( [a] => red [b] => green [0] => purple [1] => orange [d] => yellow ) ?>

    - length  Optional. Numeric value. Chỉ định số lượng phần tử sẽ bị xóa và cả độ dài của mảng được trả về.
                Nếu giá trị này được đặt thành số âm, thì hàm sẽ dừng cách phần tử cuối cùng.
                    <?php array_splice($a1,0,-1,$a2); # Array ( [0] => purple [1] => orange [d] => yellow )?>
                Nếu giá trị này không được đặt, hàm sẽ xóa tất cả các phần tử, bắt đầu từ vị trí được đặt bởi tham số start. (preserve không có tác dụng)
                    <?php array_splice($a1,1); # Array ( [a] => red ) ?>

    - preserve   Optional. Chỉ định một mảng với các phần tử sẽ được chèn vào mảng ban đầu.
                Nếu nó chỉ là một phần tử, nó có thể là một chuỗi và không nhất thiết phải là một mảng.
