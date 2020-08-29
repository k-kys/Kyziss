// React Native : lập trình Mobile

var firstName = 'khuong';
var age = 20

console.log('Bien firstName = ', firstName);
console.log("Bien age = ", age);
console.log("Ten va tuoi: " + firstName + ' ' + age);

var isMarried, job;
isMarried = false;
job = 'teacher'
console.log('isMarried = ', isMarried);

age = 'Twenty'; // Đột biến giá trị (từ sổ 20 thành chữ)
// alert(firstName + ' is a ' + age + ' year old ' + job + ' is he married ? ' + isMarried)
console.log(firstName + ' is a ' + age + ' year old ' + job + ' is he married ? ' + isMarried);



// Toan tu
var x, y
x = 10
y = 2
console.log('x += y', x += y);
console.log('x ** y', x ** y);

// Typeof : xac dinh kieu du lieu cua bien hien tai
console.log('Typeof x = ', typeof x);
console.log('Typeof firstName = ', typeof firstName);
console.log('Typeof isMarried = ', typeof isMarried);



var number1 = 50;
var number2 = 150;
var average = (number1 + number2) / 2;
console.log("trung bimh (50 + 150) / 2 = ", average);