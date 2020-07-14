// Thao tác với thuộc tính HTML

var img = "https://4.bp.blogspot.com/-cif1mVRA4u0/XpnanjgyW6I/AAAAAAAAB9w/GQWNN8CbcvEbWD8nCN6fb9x4-rnvctPRQCK4BGAYYCw/s1600/tqk-dragon.jpg";


var image = document.querySelector(".class-demo");

// Thay đổi thuộc tính có sẵn

// SET
image.setAttribute("src", img);
image.setAttribute("alt", "This is a image");
image.setAttribute("width", 300);
image.setAttribute("title", "Tiêu đề của hình cảnh")

// GET
var elDataTitle = Array.from(document.querySelectorAll("[data-title]"));

var temp = '';
for (let index = 0; index < elDataTitle.length; index++) {
    // console.log(elDataTitle[index], index);
    // console.log(elDataTitle[index].getAttribute("data-title"));
    temp = temp + elDataTitle[index].getAttribute("data-title") + " ";

}

console.log("temp = ", temp); // Bị dư 1 khoảng trắng cuối cùng

// Khi SET  giá trị data-title mới cho #demo thì sẽ trim()
document.getElementById("demo").setAttribute("data-title", temp.trim());
console.log(elDataTitle);

// Khi thuộc tính đơn, không có gạch ngang hay kí tự đặc biệt thì
// element.src == element.getAttribute("src")
console.log("Truy xuất thuộc tính cách 2: ", image.src);
console.log("Truy xuất thuộc tính cách 1: ", image.getAttribute("src"));

console.log("class của phần tử img = ", image.getAttribute("class"));