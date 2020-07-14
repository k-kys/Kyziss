// DOM Token: lấy các phần tử của class tương tự 1 mảng
// list các phần tử = document.getElementById("demo").getAttribute("class").split(' '); -> giống 1 array
// giá trị value = document.getElementById("demo").getAttribute("class"); -> chuỗi class nguyên vẹn


// trong array có arr.length lấy số lượng phần tử
// var.classList trả về số lượng phần tử và list các class trong element đó, cùng với value tức chuỗi gốc của nó

var demoId = document.getElementById("demo"); // truy xuất
console.log(demoId.classList);

// Add class
demoId.classList.add('class3', 'class4', 'class5');
console.log(demoId.classList);

// Remove Class
demoId.classList.remove('class4');
console.log(demoId.classList);

// thay đổi style
demoId.style.backgroundColor = 'red';
demoId.style.position = 'relative';
demoId.style.display = 'none';