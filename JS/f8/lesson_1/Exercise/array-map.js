/**
 * Hãy xử lý để hàm trên trả về một mảng mới gồm các phần tử được chuyển đổi sang kiểu dữ liệu boolean
 */
// var inputs = [1, "hi", false, 8, undefined, "", NaN];

// function convertToBoolean(inputs) {
//     return Boolean(inputs);
// }
// var newInputs = inputs.map(convertToBoolean);
// console.log(newInputs);

/**
 * Cho trước biến inputs là một array gồm các phần tử là các chữ số bất kì. Trong hàm run, hãy trả về array mới từ array inputs đã cho với giá trị các phần tử có giá trị x 3 lần.
 */
// var inputs = [4, -8, 9];

// function run(inputs) {
//     return typeof inputs == "number" ? inputs * 3 : false;
// }
// var newInputs = inputs.map((x) => x * 3);
// console.log(newInputs);

/**
 * xử lý để hàm convertToNumber trả về một array mới từ array inputs, các phần tử trong array trả về được chuyển đổi sang kiểu dữ liệu number.
 */
// var inputs = ["1", "6", "2", "8"];
// console.log(inputs);

// function convertToNumber(inputs) {
//     return parseInt(inputs);
// }
// var newInputs = inputs.map((index) => parseInt(index));
// console.log(newInputs);

/**
 * xử lý để hàm convertToString trả về một array mới từ array numbers, các phần tử trong array trả về được chuyển đổi sang kiểu dữ liệu string.
 */
// var inputs = [1, 20, -8, 0, 16];
// console.log(inputs);

// function convertToString(inputs) {
//     return inputs.toString();
// }
// var newInputs = inputs.map((index) => index.toString());
// console.log(newInputs);

/*-------------------------------------------------- */

/**
 * Viết lại method map()
 * @param {*} callback
 * @returns
 */
var courses = ["JS", "PHP", "Ruby"];

// Callback Viết lại map()
Array.prototype.map2 = function(callback) {
    var output = [],
        arrayLength = this.length;
    for (var i = 0; i < arrayLength; ++i) {
        var result = callback(this[i], i);
        output.push(result);
        // console.log("result: ", result);
    }
    return output;
};

var htmls = courses.map2(function(course) {
    return `<h2>${course}</h2>`;
});
console.log(htmls.join(""));