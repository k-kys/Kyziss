// My every
/**
 * every2
 * Tất cả phải thoả mãn điều kiện
 */
Array.prototype.every2 = function(callback) {
  var output = true;
  for (var index in this) {
    if (this.hasOwnProperty(index)) {
      var result = callback(this[index], index, this)
      if (!result) {
        output = false;
        break;
      }
    }
  }
  return output;
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
var result  = courses.every(function (course, index, array) {
  return course.isFinish;
});

console.log(result);
