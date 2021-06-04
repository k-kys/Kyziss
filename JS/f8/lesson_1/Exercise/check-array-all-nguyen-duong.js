/**
 * Cho trước hàm checkPositiveNumbers có tham số numbers
 * sẽ nhận một mảng gồm các phần tử là những số bất kì.
 * Hàm này được tạo ra với mục đích kiểm tra toàn bộ các chữ số
 * trong mảng numbers có phải là số dương hay không.
 *
 * Nếu toàn bộ phần tử trong mảng numbers là số dương
 * hàm sẽ trả về true.
 * Nếu một trong các phần tử của mảng numbers không phải số dương
 * hàm sẽ trả về false
 */
function checkPositiveNumbers(numbers) {
    var a = numbers.every(function(number, index) {
        return number > 0 ? true : false;
    });
    console.log(a);
    return a;
}

checkPositiveNumbers([5, -8, 2, 1]);