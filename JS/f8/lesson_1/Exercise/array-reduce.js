/** LỖI
 * Cho biến numbers là một mảng chứa các giá trị số bất kì. Trong hàm cho trước, hãy trả về tổng của toàn bộ giá trị của các phần tử trong mảng numbers
 */
// var number = [1, 3, 4];

// function sum(accu, value) {
//     return accu + value;
// }
// console.log(number.reduce(sum, 0));
// console.log(number.reduce((accu, value) => accu + value, 0));

/** LỖI
 * Cho biến inputs là một mảng chứa các giá trị có thể là bất kì kiểu dữ liệu nào. Trong hàm cho trước, hãy trả về tổng của toàn bộ giá trị số hợp lệ của các phần tử trong mảng inputs
 */
var inputs = [1, 2, function() {}, NaN];

function sumNumbers(accumulator, currentValue) {
    if (typeof currentValue === "number") {
        console.log(accumulator);
        var total = accumulator + currentValue;
    }
    return total;
}
console.log(inputs.reduce(sumNumbers, 0));

// Flat - làm phẳng mảng
var depthArray = [1, 2, [3, 4], 5, 6, [7, 8, 9]];
var flatArray = depthArray.reduce(function(flatOutput, depthItem) {
    return flatOutput.concat(depthItem);
}, []);
console.log(flatArray);

var topics = [{
        topic: "Front-end",
        courses: [{
                id: 1,
                title: "HTML, CSS",
            },
            {
                id: 2,
                title: "Javascript",
            },
        ],
    },
    {
        topic: "Back-end",
        courses: [{
                id: 1,
                title: "PHP",
            },
            {
                id: 2,
                title: "NodeJS",
            },
        ],
    },
];

var newCourses = topics.reduce(function(course, topic) {
    return course.concat(topic.courses);
}, []);

console.log(newCourses);

var htmls = newCourses.map(function(course) {
    return `
        <div>
            <h2>${course.title}</h2>
            <p>ID: ${course.id}</p>
        </div>
    `;
});

console.log(htmls.join(""));