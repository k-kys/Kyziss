/**
 * Thay đổi class : Add, Delete
 * Thay đổi attribute : Edit
 * Thêm mới một attribute cho 1 phần tử
 * Bắt được sự kiện click chuột người dùng
 * Thêm 1 phần tử gắn vào trong cấu trúc HTML
 * ......
 * -> Làm hiệu ứng động cho phần tử đó
 * Phải xác ddingj được mình áp dụng công việc trên cho phần tử nào ?
 * 
 * 
 * 1. Học cách truy xuất phần tử bằng JS
 *  - Truy xuất bằng ID -> HTML Element -> Một phần tử HTML
 *  - Truy xuất bằng class -> HTML Collection Of -> Tập hợp nhiều phần tử HTML
 *      HTML Collection không phải array
 *  -Truy xuất bằng tên thẻ <a><body>... -> HTML Collection     
 *  - Truy xuất bằng Selector của CSS
 * 
 */



//  Truy xuất bằng ID
var demoId = document.getElementById("demo")
console.log(demoId)

// Truy xuất bằng Class
var demoClass = document.getElementsByClassName("demo")
console.log(demoClass)
    // console.log(demoClass[0])
    // console.log(demoClass[1])
    // console.log('Length demoClass = ', demoClass.length);

var demoClassArray = Array.from(demoClass)
demoClassArray.push("123");
console.log(demoClassArray);

for (let index = 0; index < demoClass.length; index++) {
    console.log("Phần tử thứ ", index, "là : ", demoClass[index])

}

// Truy xuất bằng tên thẻ <tagname>
var div = document.getElementsByTagName("div");
console.log("div = ", div);

var h1 = document.getElementsByTagName("h1");
console.log('h1 = ', h1);