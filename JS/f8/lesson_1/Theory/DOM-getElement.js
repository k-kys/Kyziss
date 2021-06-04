// HTML DOM: Document Object Model
/**
 * Có 3 thành phần
 * 1. Element: tag [id,class, tag, CSS selector, HTML collection]
 * 2. Attribute: thuộc tính trong tag
 * 3. Text
 */
// Node: điểm gồ lên

// ----------------------------------
// Javascript: Browser | Server (NodeJS)
// Browser: HTML->DOM->WEB API (application programing interface)

// console.log(document);
document.write("Hello Guys!");
var headingNode = document.getElementsById("heading");
var headingNodes = document.getElementsByClassName("heading");
var headingNodes = document.getElementsByTagName("h1");
var headingNodes = document.querySelector("html .heading");
var headingNodes = document.querySelectorAll("html .heading");
var result = document.forms; // lấy tất cả form
document.forms["form-1"]; // đặt tên có ký tự khác -> ko phải là 1 string
console.log(document.forms.testForm); // đặt tên liền đúng theo 1 string
console.log(document.images);

document.querySelector().href = "link";
document.querySelector().setAttribute("name", "value");
document.querySelector().getAttribute("name");

// lấy phần text của element
// chỉ lấy phần text nhìn thấy
document.querySelector().innerText;
// lấy cả css, js và khoảng trống trong tag đó
document.querySelector().textContent;

// Thêm element con
document.querySelector().innerHTML;
// Lấy cả element cha (bên ngoài của nó). Ghi đè lên chính nó
document.querySelector().outerHTML;
// Lấy phần tử ngang hàng tiếp theo (sau nó)
document.querySelector().nextElementSibling;
// Lấy các node con
var textNode1 = document.querySelector("div").childNodes[0];