// DOM Style
var boxElement = document.querySelector(".box");
boxElement.style.width = "100px";
boxElement.style.height = "200px";
boxElement.style.backgroundColor = "red";

//  cách 2
Object.assign(boxElement.style, {
    width: "200px",
    height: "100px",
    backgroundColor: "green",
});

console.log(boxElement.style.backgroundColor);

// DOM Style
var boxElement = document.querySelector(".box");

boxElement.classList.add("red", "blue");

console.log(boxElement.classList.contains("red"));

setTimeout(() => {
    boxElement.classList.toggle("red");
}, 3000);