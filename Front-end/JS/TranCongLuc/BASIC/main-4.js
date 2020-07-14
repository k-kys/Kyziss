// ARRAY

// Cách khai báo 1
var arrStudents = [
    'Tran Van A',
    'Tran Thi B',
    'Tran Quang C'
];
console.log('arrStudents = ', arrStudents);
console.log('arrStudents length = ', arrStudents.length);
console.log('arrStudents[0] = ', arrStudents[0]);
console.log('arrStudents length - 1 = ', arrStudents[arrStudents.length - 1]);

// Cách khai báo 2
var arrStudents2 = new Array('Tran A', 'Nguyen B', 'Ly C');
console.log('arrStudents2 = ', arrStudents2);

// C, C++ và Java -> array chỉ lưu trữ 1 kiểu dl
// Js -> bản chất array là 1 Object
console.log('Type of arrStudents : ', typeof arrStudents);

var arrDemo = [
    'Tran Van A',
    28,
    true, [123, 456, 789]
]
console.log('arrDemo = ', arrDemo);
console.log('arrDemo[3] = ', arrDemo[3]);
console.log('arrDemo[3][2] = ', arrDemo[3][2]);