/**
 * Cho hàm hasFreeCourses để kiểm tra một danh sách khóa học
 * có khóa học nào miễn phí hay không.
 * Cho biến courses là tham số của hàm trên,
 * biến này là một array chứa nhiều object đại diện cho khóa học
 *
 * Hàm hasFreeCourses sẽ trả về true
 * nếu đối số truyền vào có chứa khóa học miễn phí
 * Hàm hasFreeCourses sẽ trả về false
 * nếu đối số truyền vào không chứa khóa học miễn phí
 */

var course = [
    { name: "Javascript", vnd: 1000000 },
    { name: "PHP", vnd: 990000 },
    { name: "HTML, CSS", vnd: 0 },
    // ...
];

function hasFreeCourses(courses) {
    var a = courses.some(function(course, index) {
        return course.vnd === 0;
    });
    console.log(a);
    return a;
}
hasFreeCourses(course);


// ------------------------------------------
// My some
/*
Tìm xem có bất kì 1 phần tử nào trong mảng không, trả về true/false
*/
Array.prototype.some2 = function(callback) {
  for (var index in this) {
    if (this.hasOwnProperty(index)) {
      if (callback(this[index], index, this)) {
        return true;
      }
    }
  }
  return false;
}

var courses = [
  {
    name: 'Javascript',
    coin: 680,
    isFinish: true,
  },
  {
    name: 'PHP',
    coin: 860,
    isFinish: false,
  },
  {
    name: 'Ruby',
    coin: 980,
    isFinish: false,
  },
]
var result  = courses.some(function (course, index, array) {
  return course.isFinish;
});

console.log(result);
