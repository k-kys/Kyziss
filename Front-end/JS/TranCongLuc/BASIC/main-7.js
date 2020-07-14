// FOR LOOP

function calAverage() {
    this.average = (this.maths + this.physics) / 2;
    return this.average;
}

var arrStudent = [{
    fullName: 'Nguyen Van A',
    maths: 9,
    physics: 5
}, {
    fullName: 'Nguyen Van B',
    maths: 8,
    physics: 8
}, {
    fullName: 'Nguyen Van C',
    maths: 7.6,
    physics: 5.2
}, {
    fullName: 'Nguyen Van D',
    maths: 8.5,
    physics: 7.6
}, ];

for (let index = 0; index < arrStudent.length; index++) {
    arrStudent[index].calAverage = calAverage; // gán thêm method vào Object
    arrStudent[index].calAverage(); // gọi method trong Obj ra luôn, method này chạy sẽ sinh ra 1 phần tử average
    // console.log(arrStudent[index]);

}
console.log("arrStudent = ", arrStudent);


console.log("=============================");

// For/im

// Mỗi hs có số lượng điểm khác nhau
// Score không phải 1 mảng -> không có length
var calAverage2 = function() {
    var total = 0;
    var totalScore = 0;
    for (key in this.score) {
        total += 1;
        totalScore += this.score[key];
        // console.log("Score " + key + " = ", this.score[key]);
        // console.log("key: ", key);
    }
    return totalScore / total;
    // console.log("total = ", total);
    // console.log("totalScore = ", totalScore);
}

var studentA = {
        fullName: 'Tran Van A',
        year: 2000,
        score: {
            maths: 9.0,
            physics: 8.5,
            chemistry: 8
        },
        calAverage: calAverage2
    }
    // studentA.calAverage();

var studentB = {
    fullName: 'Tran Van B',
    year: 2000,
    score: {
        maths: 9.0,
        physics: 8.5,
        chemistry: 8,
        english: 7.5
    },
    calAverage: calAverage2
}

console.log("TB StudentA = ", studentA.calAverage());
console.log("TB StudentB = ", studentB.calAverage());

console.log("===========================================")

// WHILE

var index = 0;
while (index <= 10) {
    console.log("While index = ", index);
    index++;
}

var index = 1;
do {
    console.log("Do/While index = ", index);
} while (index <= -1);