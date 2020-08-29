// ARRAY METHOD

var arrDemo = [
    'John',
    'Smith',
    28,
    true,
    'Smith'
]
console.log('arrDemo = ', arrDemo);

// arr.push(phần tử) : thêm 1 phần tử vào cuối array
console.log('arrDemo.push(123, 234) = ', arrDemo.push(123, 234)); // returrn về length mới sau khi thêm phần tử
console.log('arrDemo = ', arrDemo);

// array.unshift(phần tử) : thêm 1 phần tử vào vị trí đầu array
console.log('arrDemo.unshift(456, 567) = ', arrDemo.unshift(456, 567)); // returrn về length mới sau khi thêm phần tử
console.log('arrDemo = ', arrDemo);

// array.pop() : xóa phần tử cuối cùng
console.log('arrDemo.pop = ', arrDemo.pop()); // returrn giá trị phần tử bị xóa
console.log('arrDemo = ', arrDemo);

// array.shift() : xóa phần tử đầu tiên của mảng
console.log('arrDemo.shift() = ', arrDemo.shift()); // returrn giá trị phần tử bị xóa
console.log('arrDemo = ', arrDemo);

// array.indexOf() : ktra phần tử xem có tồn tại không. Nếu tồn tại returrn về vị trí đầu tiên xuất hiện trong mảng, nếu không tồn tại returrn về -1
console.log('arrDemo.indexOf(\'Smith\') = ', arrDemo.indexOf('Smith')); // returrn vị trí đầu tiên xuất hiện
console.log('arrDemo.indexOf(\'smith\') = ', arrDemo.indexOf('smith')); // return về -1 vì không tìm thấy trong array

if (arrDemo.indexOf(true) !== -1) {
    console.log('John đã kết hôn');
} else {
    console.log('John chưa kết hôn');
};

// array.lastIndexOf() : ktra phần tử xem có tồn tại không. Nếu tồn tại returrn về vị trí đầu tiên xuất hiện trong mảng, nếu không tồn tại returrn về -1
// Nếu IndexOf và lastIndexOf trả về cùng 1 giá trị -> giá trị đó là duy nhất
console.log('arrDemo.lastIndexOf(\'Smith\') = ', arrDemo.lastIndexOf('Smith')); // returrn vị trí đầu tiên xuất hiện
console.log('arrDemo.lastIndexOf(\'smith\') = ', arrDemo.lastIndexOf('smith')); // return về -1 vì không tìm thấy trong array