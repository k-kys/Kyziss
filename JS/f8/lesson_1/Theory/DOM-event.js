// DOM events
// 1. Attribute events
// 2. Assign event using the element node
var h1Elements = document.querySelectorAll("h1");

for (let i = 0; i < h1Elements.length; ++i) {
    h1Elements[i].onclick = function(e) {
        console.log(e.target);
    };
}

// 1. Input/select

// var inputValue;
// var inputElement = document.querySelector('input[type="text"]');
// inputElement.oninput = function(e) {
//     inputValue = e.target.value;
// };

// var inputElement = document.querySelector('input[type="checkbox"]');
// inputElement.onchange = function(e) {
//     console.log(e.target.checked);
// };

// var inputElement = document.querySelector("select");
// inputElement.onchange = function(e) {
//     console.log(e.target.value);
// };

// 2. Keyup/Keydown

// var inputElement = document.querySelector("input[type='text']");
// inputElement.onkeyup = function(e) {
//     console.log(e.which);
// };

document.onkeypress = function(e) {
    switch (e.which) {
        case 27:
            console.log("EXIT");
            break;
        case 13:
            console.log("SEND CHAT");
            break;
    }
};

// 1.preventDefault
// 2.stopPropagation

// var aElement = document.links;

// for (let i = 0; i < aElement.length; ++i) {
//     aElement[i].onclick = function(e) {
//         // console.log(e.target.href);
//         if (!e.target.href.startsWith('https://f8.edu.vn')) {
//             e.preventDefault();
//         }
//     };
// }

// var ulElement = document.querySelector("ul");

// ulElement.onmousedown = function(e) {
//     e.preventDefault();
// };

// ulElement.onclick = function(e) {
//     console.log(e.target);
// };

// 2.stopPropagation

document.querySelector("div").onclick = function() {
    console.log("DIV");
};

document.querySelector("button").onclick = function(e) {
    e.stopPropagation();
    console.log("Click me!");
};

/* ------------------------ */

// Event listener

// 1.Xử lí nhiều việc khi 1 event xảy ra
// 2.Lắng nghe / Huỷ bỏ lắng nghe
var btn = document.getElementById("btn");

// ---DOM event: dùng khi 1 việc đơn giản
// btn.onclick = function() {
//     // viec 1
//     console.log("viec 1");
//     // viec 2
//     console.log("viec 2");
//     // viec 3
//     alert("viec 3");
// };

function viec1() {
    console.log("viec 1");
}

function viec2() {
    console.log("viec 2");
}

// --- Event listener: nhiều listener, có thể huỷ từng listener
btn.addEventListener("click", viec1);
btn.addEventListener("click", viec2);

setTimeout(function() {
    btn.removeEventListener("click", viec1);
}, 3000);