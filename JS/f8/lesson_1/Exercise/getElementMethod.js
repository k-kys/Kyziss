/**
 * 1.Get checkbox input NodeList lưu vào biến checkboxNodes
 * 2.Get checkbox input element có type="checkbox" value="1" lưu vào biến checkbox1Element
 * 3.Get checkbox element có attribute checked nhưng không có attribute disabled lưu vào biến checkboxCheckedAndNotDisabled
 * 4.Get checkbox element có attribute disabled nhưng không có attribute checked lưu vào biến checkboxDisabledAndNotChecked
 * 5.Get checkbox element có attribute checked và disabled lưu vào biến checkboxCheckedAndDisabled
 */

// 1
// var checkboxNodes = document.getElementsByTagName("input");
let checkboxNodes = document.querySelectorAll("input[type=checkbox]");

// 2
// for (var i = 0; i < checkboxNodes.length; i++) {
//     if (checkboxNodes[i].type == "checkbox" && checkboxNodes[i].value == 1) {
//         checkbox1Element = checkboxNodes[i];
//     }
// }
let checkbox1Element = document.querySelector(
    "input[type='checkbox'][value='1']"
);
// console.log(result);

// 3
// var checkboxElement = document.getElementsByName("answer");
// console.log(checkboxElement);
// for (let i = 0; i < checkboxElement.length; i++) {
//     // console.log(checkboxElement[i].attributes.checked);
//     if (checkboxElement[i].attributes.checked) {
//         var checkboxCheckedAndNotDisabled = checkboxElement[i];
//     }
// }
let checkboxCheckedAndNotDisabled = document.querySelector(
    "input[type='checkbox'][checked]:not(disabled)"
);
// console.log(checkboxCheckedAndNotDisabled);

// 4
let checkboxDisabledAndNotChecked = document.querySelector(
    "input[type='checkbox'][disabled]:not(checked)"
);
// console.log(checkboxDisabledAndNotChecked);

// 5
let checkboxCheckedAndDisabled = document.querySelector(
    "input:checked:disabled"
);
// console.log(checkboxCheckedAndDisabled);

/**
 * Get list elements li là con trực tiếp của ul thứ nhất và lưu vào biến listItems1
 * Get list elements li là con trực tiếp của ul thứ hai và lưu vào biến listItems2
 * Get list elements li là con trực tiếp của ul thứ nhất và ul thứ hai sau đó lưu vào biến listItems3
 */
// 1
var listItems1 = document.querySelectorAll(".parent>li");
// console.log(listItems1);

// 2
let listItems2 = document.querySelectorAll(".parent > ul > li");
// console.log(listItems2);
// 3
let listItems3 = document.querySelectorAll(".parent > li, .parent > ul > li");
console.log(listItems3);