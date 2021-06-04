// STRING
string.length: lấy độ dài chuỗi
string.indexOf(): trả về vị trí tìm đc đầu tiên trong chuỗi, ko có
return -1
string.lastIndexOf(chuỗi, vị trí bắt đầu tìm kiếm): trả về vị trí tìm đc đầu tiên trong chuỗi, ko có
return -1
string.search(chuỗi): tìm theo biểu thức chính quy
string.slice(start, end): cắt từ vị trí start đến end
string.replace(chuỗi cần thay, chuỗi thay vào): (/JS/g, 'Javascript') - > thay tất cả js bằng jsvascript
string.toUpperCase(): chuyển thành chữ hoa
string.toLowerCase(): chuyển thành chữ thường
string.trim(): bó kí tự trắng hai đầu
string.split(kí tự để tách): tách string thành array
string.charAt(vị trí): lấy kí tự từ vị trí
string[vịtri]
parseFloat(): chuyển thành float
parseInt(): chuyển thành int


/* ------------------------------------------------------------ */



// NUMBER
age.toString(): chuyển thành chuỗi
age.toFixed(số lg sau dấu phẩy): làm tròn


/* ------------------------------------------------------------ */



// ARRAY
Array.isArray(var): kiểm tra phải array không
age.length: đếm phần tử của mảng
age[vitri]: lấy phần tử theo index
age.toString(): chuyển array sang string
age.join(dấu ngăn cách): chuyển array thành chuỗi
age.pop(): xóa element cuối và trả về phần tử đã xóa, hết ptu thì
return undefined
age.push(element): thêm 1 / n phần tử mới vào cuối mảng và trả về độ dài mảng
age.shift(): xóa element đầu mảng và trả về phần tử đã xóa
age.unshift(element): thêm 1 / n element vào đầu mảng và trả về độ dài mảng
age.splice(start index, số lương muốn xóa, chèn vào vị trí start index): chèn, thêm, xóa mảng
age.concat(array): nối array
age.slice(vitri bắt đầu, số lượng cắt): cắt element

// Array methods:
var course = [{
        id: 1,
        name: "Javascript",
        coin: 250,
    },
    {
        id: 2,
        name: "HTML, CSS",
        coin: 0,
    },
    {
        id: 3,
        name: "Ruby",
        coin: 0,
    },
    {
        id: 4,
        name: "PHP",
        coin: 400,
    },
    {
        id: 5,
        name: "ReactJS",
        coin: 500,
    },
];

// course.forEach(function(course, index) {
//     console.log(index, course);
// });

// kiểm tra tất cả element phải thỏa mãn điều kiện nào đó - trả về boolean
var isFree = course.every(function(course, index) {
    // ktr lần lượt, index đầu tiên sai là dừng luôn
    return course.coin === 0;
});
console.log(isFree);

// ktra chỉ cần 1 element thỏa màn là ok, đúng cái là dừng
var isFree = course.some(function(course, index) {
    // ktr lần lượt, index đầu tiên sai là dừng luôn
    return course.coin === 0;
});
console.log(isFree);

// Tìm phần tử và trả về phần tử đó (chỉ 1 phần tử)
var course = course.find(function(course, index) {
    // ktr lần lượt, index đầu tiên đúng là dừng luôn
    return course.name === "Ruby";
});
console.log(course);

// Tìm phần tử và trả về phần tử đó (nhiều phần tử)
var listCourse = course.filter(function(course, index) {
    return course.name === "Ruby";
});
console.log(listCourse);

// Array map
// thay đổi elment của mảng
function courseHandler(item, index, originArray) {
    // console.log(course);
    // return {
    //     id: item.id,
    //     name: `Khoa hoc: ${item.name}`,
    //     coin: item.coin,
    //     coinText: `Gia: ${item.coin}`,
    //     index: index,
    //     originArray: originArray,
    // };
    return `<h2>${item.name}</h2>`;
}
var newCourses = courses.map(courseHandler);
console.log(newCourses.join(""));


// Reduce(func, biến lưu trữ)
// lấy về giá trị duy nhất sau tính toán
// var totalCoin = 0;
// for (var course of courses) {
//     totalCoin += course.coin;
// }
// console.log(totalCoin);
// var i = 0;

function coinHandler(accumulator, currentValue, currentIndex, originArray) {
    // i++;
    var total = accumulator + currentValue.coin;
    // console.table({
    //     "Lượt chạy: ": i,
    //     "Biển tích trữ: ": accumulator,
    //     "Giá khóa học: ": currentValue.coin,
    //     "Tích trữ được: ": total,
    // });
    // console.log(currentValue);
    return total;
}

var total = courses.reduce(coinHandler, 0);
var total2 = courses.reduce((a, b) => a + b.coin, 0);
console.log(total);


/* ------------------------------------------------------------ */



// FUNCTION
// a-z A-z 0-9 $
// gọi hàm call()
function showDialog() {
    alert('Hi, xin  chào các bạn');
}
showDialog();

// Tham số
function writeLog(message) {
    console.log(message);
}
writeLog('Test message');

// arguments
function writeLog2() {
    var myString = '';
    // gán element của arguments cho param
    for (var param of arguments) {
        myString += `${param} - `;
    }
    console.log(myString);
}
writeLog2('log 1', 'log 2', 'log 3');

// Declaration function: có thể gọi trước khi định nghĩa (hosting)
function name(params) {

}

// Expression function: có thể đặt tên hoặc không
var showMessage2 = function() {

}

setTimeout(function() {

});

var myObject = {
    myFunction: function() {

    }
}


/* ------------------------------------------------------------ */


// OBJECT in Javascript
var myObject = {
    key: value
}

var myInfo = {
    name: 'Son Dang',
    age: 21,
    address: 'Hanoi, VN'
};

myInfo.email = 'email@mail.com'

console.log(myInfo);

// thêm key
var emailKey = "email";
var myInfo = {
    name: "Son Dang",
    // 'my-name': 'Son Dang',
    age: 21,
    address: "Hanoi, VN",
    [emailKey]: "email$email.com",
    getName: function() {
        return this.name;
    },
};

myInfo.email = "email@mail.com";
myInfo["my-email"] = "email@mail.com";

console.log(myInfo);
console.log(myInfo.name);
console.log(myInfo["address"]);
var myKey = "address";
console.log(myInfo[myKey]);
console.log(myInfo.getName);

// Xóa key
delete myInfo.age;

// Object constructor
function User(firstName, lastName, avatar) {
    this.firstName = firstName;
    this.lastName = lastName;
    this.avatar = avatar;
    this.getName = function() {
        return `${this.firstName} ${this.lastName}`;
    };
}

// Object prototype - Basic
// Thêm sau khi hàm tạo đươc tạo ra
User.prototype.className = "F8"; // thêm thuộc tính
User.prototype.getClassName = function() {
    // thêm method
    return this.className;
};

var author = new User("Son", "Dang", "Avatar");
var user = new User("Vu", "Nguyen", "Avatar");
author.title = "Chia se dao";
user.comment = "Co php khong ad";
console.log(user.className);
console.log(user.getName());

// Đối tượng Date
var date = new Date();
var year = date.getFullYear();
var month = date.getMonth() + 1;
var day = date.getDate();

console.log(`${day}/${month}/${year}`);


/* ------------------------------------------------------------ */


// IF ELSE
if (condition) {
    //
} else if () {
    //
} else {
    //
}


// SWITCH CASE (> 3 case mới dùng)
var date = 5;
switch (date) {
    case 2: // ===
        console.log("Hom nay la thu 2");
        break;
    case 3:
        console.log("Hom nay la thu 3");
        break;
    case 4:
        console.log("Hom nay la thu 4");
        break;
    default:
        console.log("Khong biet");
}


// TERNARY OPERATOR - toán tử 3 ngôi
var course = {
    name: "Javascript",
    coin: 250,
};
// (condition)?true:false;
var result = course.coin > 0 ? `${course.coin} Coins` : "Free";
console.log(result);



/* ------------------------------------------------------------ */



// LOOP
// For loop
for (let i = 1; i <= 1000; i++) {
    console.log(i);
}

// For in : có bn key chạy bấy nhiêu lần, duyệt qua mảng có ptu trống (empty element)
var myInfo = {
    name: "SonDang",
    age: 18,
    address: "Hanoi",
};

for (var key in myInfo) {
    console.log(myInfo[key]);
}

var languages = ["JS", "PHP", "Rb"];
for (var key in languages) {
    console.log(languages[key]);
}

var myString = "Javascript";
for (var key in myString) {
    console.log(myString[key]);
}

// For of
var languages = ["Javascript", "PHP", "Java"];
var myInfo = {
    name: "khuong",
    age: 21,
};
console.log(Object.keys(myInfo));
console.log(Object.values(myInfo));
for (var value of Object.keys(myInfo)) {
    console.log(myInfo[value]);
}
for (var value of Object.values(myInfo)) {
    console.log(value);
}


// Break & Continue in loop
for (let i = 0; i < 10; i++) {
    console.log(i);
    if (i >= 5) {
        break;
    }
}

for (let i = 0; i < 10; i++) {
    if (i % 2 !== 0) {
        // chia dư thì là số lẻ -> bỏ qua chạy tiếp for
        continue;
    }
    console.log(i);
}


// Nested For loop
var myArray = [
    [1, 2],
    [3, 4],
    [5, 6],
];

for (let i = 0; i < myArray.length; i++) {
    for (let j = 0; j < myArray[i].length; j++) {
        console.log(myArray[i][j]);
    }
}


// While loop
var myArray = ["JS", "PHP"];
var i = 0;
while (i < myArray.length) {
    console.log(myArray[i]);
    i++;
}

// Do/While
var i = 0;
var isSuccess = false;
do {
    i++;
    console.log("Nap the lan " + i);
    if (false) {
        isSuccess = true;
    }
} while (!isSuccess && i < 4);



/* ------------------------------------------------------------ */



// Includes method
// var title = "Responsive web design";
// console.log(title.includes("web"));

// var courses = ["JS", "php", "dart"];
// console.log(courses.includes("JS"));

/**
 * Nếu includes có thể sử dụng trên input thì hãy tìm chuỗi F8 (nếu input là string) hoặc tìm phần tử F8 (nếu input là array). Nếu tìm thấy thì hàm run trả về true, trường hợp khác trả về false.
 */

var input = "Học lập trình tại F2";

function run(input) {
    return typeof input == "string" || Array.isArray(input) ?
        input.includes("F8") :
        false;
}
console.log(run(input));



/* ------------------------------------------------------------ */




/* MATH
Math.PI
Math.round(): làm tròn .5 làm tròn lên/ .49 làm tròn xuống
Math.abs(): giá trị tuyệt đối
Math.ceil(): làm tròn trên / trần
Math.floor(): làm tròn dưới / sàn
Math.random(): ngẫu nhiên Math.floor(Math.random() * 100)
Math.min()
Math.max()
*/
var random = Math.floor(Math.random() * 100);
// var bonus = ["10 coin", "20 coin", "30 coin", "40 coin", "50 coin"];
// console.log(bonus[random]);

// if (random < 50) {
//     console.log("Cường hóa thành công");
// }

console.log(Math.max(-180, 33, 456565, -1192));

/* ------------------------------------------------------------ */


// Callback
// 1.là hàm (function) 
// 2.đc TRUYỀN QUA ĐỐI SỐ khi gọi hàm khác
// 3.được gọi lại (trong hàm nhận đối số)

/* ------------------------------------------------------------ */