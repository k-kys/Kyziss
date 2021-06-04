/**
 * Viết lại method forEach()
 * @param {*} callback
 */

// forEach
Array.prototype.forEach2 = function(callback) {
    for (var index in this) {
        if (this.hasOwnProperty(index)) {
            callback(this[index], index, this);
        }
        // console.log('index: ', index);
    }
};

var courses = new Array(100);
courses.push("JS", "PHP");
courses.forEach2(function(course, index, array) {
    console.log(course, index, array);
});