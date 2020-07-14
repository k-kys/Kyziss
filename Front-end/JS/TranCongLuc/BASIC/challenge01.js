// Challenge 01;

// Tính chỉ số BMI
var massMark = 70
var massJohn = 82
var heightMark = 1.65
var heightJohn = 1.82
var bmiMark = massMark / (heightMark ** 2)
var bmiJohn = massJohn / (heightJohn ** 2)
console.log('Chi so bmi cua Mark : ', bmiMark);
console.log('Chi so bmi cua John : ', bmiJohn);
// var checkbmi
// if (bmiMark > bmiJohn) {
//     checkbmi = true
// } else {
//     checkbmi = false
// }
// console.log('BMI cua Mark lon hon BMI cua John ? ', checkbmi);
var isMarkHigher = bmiMark > bmiJohn;
console.log('BMI of Mark > BMI of John ? ', isMarkHigher);