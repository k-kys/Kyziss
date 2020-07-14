/* 
John và gđ đi nghỉ dưỡng tại Phan Thiết và đã thưởng thức tại 3 nhà hàng khác nhau. Hóa đơn cho mỗi nhà hàng là $124, $48, $268.
Vì đây là nhà hàng 5* nên giúp John trả tiền Tip cho hợp lí theo quy luật sau:
    Tip 20% nếu hóa đơn nhỏ hơn $50.
    Tip 15% nếu hóa đơn khoảng $50 - $200.
    Tip 10% nếu hóa đơn lớn hơn $200.

*/

var bills = [124, 48, 268];
console.log('bills = ', bills);

function tinhTip(bill) {
    var percent;

    if (bill < 50) {
        percent = 0.2 // 20%
    } else if (bill <= 200) {
        percent = 0.15 // 15%
    } else {
        percent = 0.1 // 10%
    }

    return percent * bill;
};

var tips = [
    tinhTip(bills[0]),
    tinhTip(bills[1]),
    tinhTip(bills[2]),
];
console.log('tips = ', tips);

var tips2 = [];
tips2.push(tinhTip(bills[0]));
tips2.push(tinhTip(bills[1]));
tips2.push(tinhTip(bills[2]));
console.log('tips2 = ', tips2);

var tips3 = []; // length = 0
tips3[tips3.length] = tinhTip(bills[0]); //length = 1 -> index hợp lệ = 0
tips3[tips3.length] = tinhTip(bills[1]); //length = 2 -> index hợp lệ = 0,1
tips3[tips3.length] = tinhTip(bills[2]); //length = 3 -> index hợp lệ = 0,1,2
console.log('tips3 = ', tips3)

var tong = [
    bills[0] + tips[0],
    bills[1] + tips[1],
    bills[2] + tips[2],
];


console.log('Tip = ', tips, '\nTổng = ', tong);