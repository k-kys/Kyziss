// OBJECT


// Cách khai báo Object 1
// key: value
var student = {
    fullName: 'Trần Quang Khương',
    year: 2000,
    score: {
        maths: 9,
        physics: 8.5,
        chemistry: 8
    },
    calAverage: function name() {
        // console.log('Run Method calAverage');
        // console.log(this);
        var maths = this.score.maths;
        var physics = this.score.physics;
        var chemistry = this.score.chemistry;

        return (maths + physics + chemistry) / 3;

    }
}
console.log('student = ', student);
console.log('student.fullName = ', student.fullName);
console.log('student.score.maths = ', student.score.maths);

var average = student.calAverage(); // method của Object
console.log('average = ', average);

console.log('======================================');

// Cách khai báo Object 2
var student2 = new Object();
console.log('student2 = ', student2);

student2.fullName = 'Trần Văn A';
student2.year = 2001;
student2.score = {
    maths: 4,
    physics: 6.5,
    chemistry: 9
};
student2.calAverage = student.calAverage; // copy code từ student.calAverage vào student2.calAverage
// student2.calAverage = function() {
//     var maths = this.score.maths;
//     var physics = this.score.physics;
//     var chemistry = this.score.chemistry;

//     return (maths + physics + chemistry) / 3;
// };

// console.log('student2.fullName : ', student2.fullName);
console.log('student2 = ', student2);
console.log('student2.calAverage = ', student2.calAverage());

var objDemo = {
    'full_name': 'Nguyen van C',
    'full-name': 'Hoang Thị D'
}
console.log('objDemo full_name: ', objDemo.full_name);
console.log('objDemo.full-name: ', objDemo.full - name); // lõi vì vừa có "." vừa có "-" 
console.log('objDemo[\'full - name\']: ', objDemo['full-name']); // nên phải dùng trong ngoặc vuông để tránh lỗi