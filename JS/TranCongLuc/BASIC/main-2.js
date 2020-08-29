var name = "John";
var age = 16;
console.log("age = ", age);
console.log("age >= 20 ", age >= 20); // false
console.log("age < 30 ", age < 30); // true
console.log("!(age < 30)", !(age < 30)); // false

console.log("age >= 20 && age < 30 ", age >= 20 && age < 30); // false
console.log("age >= 20 || age < 30 ", age >= 20 || age < 30); // true

if (age < 13) {
    console.log(name + ' là một cậu học sinh');
} else if (age >= 13 && age <= 18) {
    console.log(name + ' là một cậu bé tuổi teen');
} else if (age > 18 && age < 30) {
    console.log(name + ' là một người đàn ông trung niên');
} else {
    console.log(name + ' là một người trưởng thành');
}

console.log('============ Switch(job) =================');
var job = 'designer';
switch (job) {
    case 'designer':
        console.log(name + ' là một Designer');
        break;
    case 'worker':
        console.log(name + ' là một Công nhân');
        break;
    case 'teacher':
        console.log(name + ' là một Giáo viên');
        break;

    default:
        console.log(name + ' là một người có công việc nào đó');
        break;
}


console.log('============ Switch(age) =================');
switch (true) {
    case age < 13:
        console.log(name + ' là một cậu học sinh');
        break;
    case age >= 13 && age <= 18:
        console.log(name + ' là một cậu bé tuổi teen');
        break;
    case age > 18 && age < 30:
        console.log(name + ' là một người đàn ông trung niên');
        break;

    default:
        console.log(name + ' là một người trưởng thành');
        break;
}


// Truthy & Falsy
// Falsy : null, undefined, NaN, 0, '', false

var height = 0;
if (height || height == 0) {
    console.log("Height có giá trị ", height);
} else {
    console.log("Height không có giá trị ", height);
}

// === vừa so sánh kiểu dữ liệu, vừa so sánh giá trị
// == chỉ so sánh giá trị

var height2 = '23'; // string
if (height2 === 23) {
    console.log("Chạy vào đây");
} else {
    console.log("Chạy vào bên dưới else");
}