//
var dropdownList = Array.from(document.querySelectorAll(".dropdown"));
// console.log(dropdownList);

// For Loop
// for (let index = 0; index < dropdownList.length; index++) {
//     var value = dropdownList[index];
//     callBackFn(value, index);
// }

// function callBackFn(value, index) {
//     console.log('value For = ', value, index);
// }
// ForLoop trên sẽ giống với ForEach ở dưới đây

dropdownList.forEach(
    function(el, idx) {
        var btn = el.querySelector('.btn');
        // console.log(btn);
        // console.log('value ForEach = ', value, index);
        btn.addEventListener('click',
            function(event) {
                if (el.classList.value.indexOf('open') === -1) { // không có class open -> thêm vào
                    el.classList.add('open');
                } else {
                    el.classList.remove('open');
                }
                /**
                 * Nếu phần tử 'el' đã tồn tại 'open' -> remove
                 * Nếu phần tử 'el' chưa có 'open' -> add
                 */
            })
    });

/**
 * child -> con
 * parent -> cha
 * sibling -> anh chị em -> chung parent
 */

var container = document.querySelector('.container');
console.log(container.parentElement.parentElement.querySelector('#demo'));
console.log(container.parentElement.parentElement.querySelector('#demo').nextElementSibling); // phần tử phía sau
console.log(container.parentElement.parentElement.querySelector('#demo').previousElementSibling); // phần tử phía trước
console.log(container.parentElement.parentElement.querySelector('#demo').previousElementSibling.parentElement);


var h1 = document.querySelector("h1");
console.log('h1 = ', h1);
console.log('get text của h1 = ', h1.innerText);
h1.innerText = 'Javascript DOM edit'; // set giá trị mới