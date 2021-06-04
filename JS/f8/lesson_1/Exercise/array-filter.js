/**
 *Trong hàm cho trước, hãy trả về một array mới gồm
 *các phần tử trong array strings có chứa giá trị của biến keyword.
 *Trường hợp không có phần tử phù hợp trả về mảng rỗng.
 */
var keyword = "hi";
var strings = ["hi", "abc", "chuỗi", "123"];

function findStringsInArrayByKeyword(keyword, strings) {
    var a = strings.filter(function(value, index) {
        return value.search(keyword) != -1;
    });
    console.log(a);
    return a;
}
findStringsInArrayByKeyword(keyword, strings);

// My filter
Array.prototype.filter2 = function(callback) {
  var output = [];
  for (var index in this) {
    if (this.hasOwnProperty(index)) {
      var result = callback(this[index], index, array);
      if (result) {
        output.push(this[index]);
      }
    }
  }
}

var courses = [
  {
    name: 'Javascript',
    coin: 680,
  },
  {
    name: 'PHP',
    coin: 860,
  },
  {
    name: 'Ruby',
    coin: 980,
  },
]
var filterCourse = courses.filter(function (course, index, array) {
  return course.coin > 700;
});

console.console.log(filterCourse);
