/**
 * TRUY XUẤT PHẦN TỬ BẰNG SELECTOR CSS
 * Yêu cầu nắm rõ phần Selector của CSS
 *      #demoId {}
 *      .demoClass {}
 *      Attribute Selector
 * 
 * Có thể sư dụng cách này để thay thế cho việc truy xuấttrong file main.js 
 *      - getElementById
 *      - getElementsByClassName
 *      - getElementsByTagName
 * 
 *      - querySelector("#demoId") -> Return 1 phần tử đầu tiên tìm thấy được mà match với Selector
 *      - querySelectorAll(".demoClass") -> Return nhiều phần tử match với Selector truyền vào -> Không phải là array. Muốn ép kiểu về array : Array.from()
 */


//  1 Phần tử
var demoId = document.querySelector("#demo");
console.log("querySelector demoId = ", demoId);
console.log("querySelector demoClass = ", document.querySelector(".demo")); // return class đầu tiên nó nhìn thấy thôi

// Nhiều phần tử
var demoClass = document.querySelectorAll(".demo");
console.log("querySelectorAll demoClass = ", demoClass);
console.log("querySelectorAll demoClass (array)= ", Array.from(demoClass)); // ép về kiểu array

demoClass = Array.from(demoClass); // biến thể của demoClass
console.log("querySelectorAll demoClass (array)= ", demoClass.push(123)); // ép về kiểu array, chèn thêm vào cuối mảng
console.log(demoClass);

// thao tác với button
var btnModal = document.querySelector("[data-toggle='modal']");
console.log(btnModal);