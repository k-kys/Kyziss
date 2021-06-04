/**
 * JSON
 *
 * Là một định dạng dữ liệu (chuỗi)
 * JavaScript Object Notation
 * JSON: Number, String, Boolean, Null, Array, Object
 *
 * Encode / Decode <=> Stringify (từ js type sang json) / Parse (từ json sang js type)
 */

// var json = '["Java","PHP"]';
// var json = '{"name":"Son Dang","age":18}';
var a = "1";
console.log(JSON.parse(a));

console.log(
    JSON.stringify({
        name: "Son Dang",
        age: 6,
        test: function() {},
    })
);