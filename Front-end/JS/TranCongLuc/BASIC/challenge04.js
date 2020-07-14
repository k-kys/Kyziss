/* 
Mark và John muốn so sánh chỉ số BMI với nhau (Body Mass Index - Chỉ số khối cơ thể). hãy giúp tính toán chỉ số này bằng công thức:
    BMI = mass/height^2 = KhoiLuong / ChieuCao^2    (kg/met)
*/

function calBMI(params) {
    return this.mass / this.height ** 2;
}

var John = {
    name: 'John',
    mass: 60,
    height: 1.7,
    BMI: calBMI // lấy hàm bên ngoài vào
        // BMI: function() {
        //     return this.mass / this.height ** 2;
        // }
}

var Mark = {
    name: 'Mark',
    mass: 59,
    height: 1.68,
    BMI: calBMI // lấy hàm bên ngoài vào
}

console.log("BMI John: ", John.BMI());
console.log("BMI Mark: ", Mark.BMI());


if (John.BMI() > Mark.BMI()) {
    console.log("BMI của John cao hơn BMI của Mark");
} else if (John.BMI() === Mark.BMI()) {
    console.log("BMI của John bằng BMI của Mark");
} else {
    console.log("BMI của John thấp hơn BMI của Mark");
};