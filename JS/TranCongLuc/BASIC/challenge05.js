// Đề giống bài 03 nhưng dùng Array, Obj, While tính só lượng, và giá trị ngẫu nhiên

/**
 * 0 <= random <= 1
 * 0 -> 250
 * 0 * 250 <= random * 250 <= 1 * 250
 * 0 <= x <= 250
 * 
 * Có 3 dạng làm tròn trong JavaScript (Math) :
 *      - Luôn làm tròn xuống => Math.floor();
 *      - Luôn làm tròn lên => Math.ceil()
 *      - Làm tròn theo quy tắc lấy mốc 0.5 làm chuẩn :  => Math.round();
 *              >0.5 làm tròn lên
 *              <0.5 làm tròn xuống
 */
// BT : lấy ramdom (min, max)
// (100 -> 1000),
// (200 -> 300)

function randomArray(n, max) {
    var arr = [];
    for (let index = 1; index <= n; index++) {
        var num = Math.random() * max; // Số lẻ
        num = Math.ceil(num); // làm trồn lên
        arr.push(num);
    }
    return arr;
}


// var bills = randomArray(3, 500);
// console.log(bills);


var john = {
    firstName: 'John',
    lastName: 'Smith',
    bills: randomArray(10, 500),
    calTips: function() {
        // Nếu số lượng hóa đơn là 10 => chạy 10 lần để tính tip
        // Số lượng hóa đơn lấy từ bills.length
        this.tips = []; // tạo phần tử tiền tip cho Obj
        this.totalValues = []; // tạo phần tử tổng giá trị thanh toán cho Obj

        var length = this.bills.length; // số lượng hóa đơn
        for (let index = 0; index < length; index++) {
            var percent;
            var bill = this.bills[index]; // giá trị hóa đơn tại vị trí index
            if (bill < 50) {
                percent = 0.2;
            } else if (bill <= 200) {
                percent = 0.15;
            } else {
                percent = 0.1;
            }

            this.tips[index] = bill * percent; // gán giá trị cho phần tử tip
            // this.totalValues[index] = this.tips[index] + bill;
            this.totalValues[index] = this.tips[index] + this.bills[index]; // gán giá trị cho phân tử tổng thanh toán
        }
    }
}

john.calTips();

console.log("john = ", john);