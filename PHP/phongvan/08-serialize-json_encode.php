
Câu 8: Cho biết sự khác nhau giữa serialize và json_encode? Lý giải theo cách bạn hiểu?

answer:

json_encode(value, options, depth):
    là phương thức dùng để chuyển đổi một mảng(Array) hoặc Object thành string(chuỗi) dữ liệu JSON để sử dụng khi lưu trữ trong database,
        <?php
        $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
        echo json_encode($age);
        # {"Peter":35,"Ben":37,"Joe":43}
        ?>

        - value   Required. Specifies the value to be encoded
        - options Optional. Chỉ định một bitmask
                            (JSON_FORCE_OBJECT, JSON_HEX_QUOT, JSON_HEX_TAG, JSON_HEX_AMP, JSON_HEX_APOS, JSON_INVALID_UTF8_IGNORE, JSON_INVALID_UTF8_SUBSTITUTE, JSON_NUMERIC_CHECK, JSON_PARTIAL_OUTPUT_ON_ERROR, JSON_PRESERVE_ZERO_FRACTION, JSON_PRETTY_PRINT, JSON_UNESCAPED_LINE_TERMINATORS, JSON_UNESCAPED_SLASHES, JSON_UNESCAPED_UNICODE, JSON_THROW_ON_ERROR)
        - depth   Optional. Chỉ định độ sâu tối đa

    và để chuyển đổi ngược lại ta dùng json_decode(string, assoc, depth, options) để chuyển đổi một chuỗi dữ liệu JSON sang dạng mảng(Array) hoặc object để sử dụng trong code PHP.
        <?php
        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
        var_dump(json_decode($jsonobj));
        # object(stdClass)#1 (3) { ["Peter"]=> int(35) ["Ben"]=> int(37) ["Joe"]=> int(43) }
        ?>

        - string  Required. Specifies the value to be encoded
        - assoc   Optional. Chỉ định một giá trị Boolean.
                            Khi được đặt thành true, đối tượng trả về sẽ được chuyển đổi thành một mảng kết hợp. (associative array)
                            Khi được đặt thành false, nó sẽ trả về một đối tượng. False là mặc định (object)
        - depth   Optional. Chỉ định độ sâu đệ quy (recursion depth). Độ sâu đệ quy mặc định là 512
        - options Optional. Chỉ định một bitmask
                            (JSON_BIGINT_AS_STRING, JSON_INVALID_UTF8_IGNORE, JSON_INVALID_UTF8_SUBSTITUTE, JSON_OBJECT_AS_ARRAY, JSON_THROW_ON_ERROR)

*** *** ***

serialize(array):
    là phương thức dùng để chuyển một mảng(Array) hoặc Object thành string(chuỗi) dữ liệu theo chuẩn của PHP để ta có thể lưu trữ hoặc truyền tải,
        <?php
        $data = serialize(array("Red", "Green", "Blue"));
        echo $data;
        # a:3:{i:0;s:3:"Red";i:1;s:5:"Green";i:2;s:4:"Blue";}
        ?>

    khi muốn chuyển nó lại thành lại một mảng hoặc phương thức ta dùng phương thức unserialize(string, options).
        <?php
        $test = unserialize($data);
        var_dump($test);
        # array(3) { [0]=> string(3) "Red" [1]=> string(5) "Green" [2]=> string(4) "Blue" }
         ?>

         options    Optional. Chỉ định các tùy chọn được cung cấp cho hàm, dưới dạng một mảng kết hợp. Có thể là một mảng các tên lớp nên được chấp nhận, false để chấp nhận không có lớp nào hoặc true để chấp nhận tất cả các lớp. true là mặc định.
