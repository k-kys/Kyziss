// 'Hàm' là một nhóm chức năng thực iện thao tác tính toán, xử lí logic sau đó trả về giá trị
// 'Thủ tục' là một nhóm chức năng thực iện thao tác tính toán, xử lí logic nhưng không trả về giá trị
// Cách 1
// function name(params) {
//     return
// }
// Cách 2
// var variable = function name(params) {
//     return
// }
// Cách 3
// var variable = (params) => {
//     return
// }


var yearJohn = 0;

function tinhTuoi(year) {
    // code
    return 2020 - year;
}

function thayDoiNamSinh() {
    yearJohn = 1990;
}

thayDoiNamSinh(); // Lời gọi hàm

var age = tinhTuoi(yearJohn);
console.log("Tuổi John = ", age);

//------------------------------------------------------------------------------------

var tinhTuoi2 = function(year) {
    return 2020 - year;
}
var thayDoiNamSinh2 = function(year) {
    yearJohn = 1991;
}

thayDoiNamSinh2() // Function call
var age = tinhTuoi2(yearJohn);
console.log("Tuoi John2 = ", age);

// ----------------------------------------------------------------------------------

var tinhTuoi3 = (year) => {
    return 2020 - year;
}

var thayDoiNamSinh3 = () => {
    yearJohn = 1992;
}

thayDoiNamSinh3();
var age = tinhTuoi3(yearJohn);
console.log("Tuoi John3 = ", age);



function printContent(firstName, job) {
    switch (job) {
        case 'teacher':
            console.log(firstName + " la mot giao vien");
            break;
        case 'designer':
            console.log(firstName + ' la mot nguoi thiet ke');

        default:
            console.log(firstName + ' lam mot nghe nao do');
            break;
    }
}

printContent('khuong', 'teacher');
printContent('khương', 'cave');