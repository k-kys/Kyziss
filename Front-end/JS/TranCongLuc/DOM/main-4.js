/**
 * Code trong Javascript sẽ có 2 trường hợp được thực thi
 * 1. Chạy ngay từ đầu khi load trang
 * 2. Chạy ngay khi nhận được tương tác từ user (nhấn chuột click, rê chuột hover)
 */

function handeClick() {
    console.log("click");
}

var colorSkinId = document.getElementById("color-skin");
var containerDiv = document.querySelector(".container");
var body = document.getElementsByTagName("body")[0];

// Hàm thay đổi màu 
function changeStyleColor(href) {
    colorSkinId.setAttribute("href", href);
}

// Hàm thay đổi wide và boxed
function changeStyleContainer(type) {
    var newClass = "container " + type;
    containerDiv.setAttribute("class", newClass);
}

// Thay đổi ảnh background
function changeBg(filename) {
    if (filename) {
        // Thay đổi style cho body\
        var valueStyle = "background-image: url('" + filename + "');"
            // console.log(body, filename);
        body.setAttribute("style", valueStyle);
    } else {
        // Đưa body về trang thái bình thường không ảnh
        body.setAttribute("style", "");
    }
}


/**
 * Tạo 2 function hỗ trợ thêm class và xóa class -> xử lí chuỗi
 * 
 * Ví dụ: Function thêm class(className)
 * giá trị class cũ là "container abc"
 * thêm mới vào className = "style-02" -> SET lại giá trị mới là "container abc style-02"
 * thêm mới vào className = "abc" -> không xử lí vì trùng với class đã có
 * 
 * Ví dụ: Function xóa class
 * class cũ là "container abc"
 * Có 1 function removeClass(className) -> muốn xóa className ="abc"
 * 
 * Phải kiểm tra class cũ có tồn tại abc hay không
 * - Nếu có -> xử lí chuỗi, xử lí mảng đẻ xóa -> thu được giá trị cuối cùng sau khi xóa là "contianer"
 * - Nếu không có "abc" -> không làm gì
 */
var image = document.querySelector(".class-demo");
image.setAttribute('src', 'https://4.bp.blogspot.com/-cif1mVRA4u0/XpnanjgyW6I/AAAAAAAAB9w/GQWNN8CbcvEbWD8nCN6fb9x4-rnvctPRQCK4BGAYYCw/s1600/tqk-dragon.jpg');

function addClass(el, className) { // el là element <tag> cần thêm class 
    // console.log(el, className);
    var oldClass = el.getAttribute('class'); // lấy giá trị class cũ trong element
    // console.log("oldClass = ", oldClass);

    if (oldClass) { // Điều kiện đã có class cũ 
        // Khác null, có trước class, phải thêm className vào sau
        // Trước khi xét, kiểm tra className này đã tồn tại chưa. Nếu chưa thì nối, nếu rồi thì thôi
        if (oldClass.indexOf(className) === -1) {
            var newClass = oldClass + " " + className;
            el.setAttribute('class', newClass);
        }
    } else { // Điều kiện không có class cũ
        // Bằng null, chưa có class thì đặt giá trị className vào là xong
        el.setAttribute('class', className)
    }

}

/*
Nếu có sẵn 1 class rồi -> kiểm tra logic remove
    Nếu className có tồn tại trong oldClass -> xử lí logic remove
        oldClass = "demo-class abc demo-abc"
        className = "abc"

        Tách oldClass thành array : ["demo-class", "abc", "demo-abc"]
        Tìm vị trí xuất hiện của className trong oldClass
            ['demo-class', 'abc', 'demo-abc'].indexOf('abc') -> index = 1 -> gọi hàm xóa
            ['demo-class', 'abc', 'demo-abc'].splice(1, 1) -> return ['abc']

            Chuyển ngược lại về chuỗi 'demo-class demo-abc' -> setAttribute -> xong.

    Nếu className không tồn tại trong oldClass thì thôi. 
Nếu không có bất kỳ 1 class cũ nào thì thôi
*/

function removeClass(el, className) {

    var oldClass = el.getAttribute('class');
    if (oldClass) { // Nếu có oldClass
        // Tách thành mảng
        var arrOldClass = oldClass.split(" ");
        // Tìm vị trí xuất hiện đầu tiên 
        var indexDelete = arrOldClass.indexOf(className);
        // console.log("Mảng cũ trước khi xóa", arrOldClass);
        if (indexDelete !== -1) {
            // Xóa 1 phần tử từ vị trí indexDelete
            arrOldClass.splice(indexDelete, 1);
            // console.log("Mảng cũ sau khi xóa", arrOldClass);
            // console.log("Mảng cũ sau khi xóa chuyển về chuỗi = ", arrOldClass.join(" "));
            el.setAttribute('class', arrOldClass.join(" "));
        }

    }
}

addClass(body, 'wrapper-content');
addClass(image, 'image');
addClass(image, 'demo-abc');

removeClass(image, 'image');
removeClass(image, 'demo-abc');
removeClass(image, 'class-demo');
removeClass(image, 'imagefdgksjhbskj');

/**
 * Chuyển đổi từ 1 chuỗi thành 1 mảng
 *          "abc def" -> ['abc', 'def']
 *      oldClass.split(" ");
 * 
 * Chuyển đổi từ 1 mảng thành 1 chuỗi
 *          ['abc', 'def'] -> "abc def"
 *      array.join(" ");
 * 
 * 5 hàm hỗ trợ cơ bản
 * thêm đầu, thêm cuối, xóa đầu, xóa cuối, indexOf()
 * 
 * Đối vơi những method hỗ trợ array, cần xác định rõ nó có thay đổi array gốc hay không.
 * 
 * - xóa phần tử ở giữa
 *  arr.splice(start, deleteCount) -> Xóa deleteCount phần tử từ vị trí start. Trả về 1 array bao gồm các phần tử đã xóa -> làm thây đổi array gốc
 *  arr.slice(start, end) -> tạo ra 1 array nằm trong khoảng [start -> end> , không làm thay đổi mảng gốc
 * 
 * - thêm phần tử ở giữa
 *  arr.splice(start, deleteCount, ...thêm phần tử mới) thêm bao nhiêu cũng được
 *  Ví dụ: 
 *      arr.splice(0, 1, 99, 88) => Xóa 1 phần tử từ vị trí số 0. Sau khi xóa xong, tại vị trí đó thêm mơi vào các phần tử 99, 88
 *      [123, 456].splice(0, 1, 99, 88) -> xóa 1 phần tử [123] -> thêm [99, 88] -> array mới [99, 88, 456] 
 *          -> trả về array đã xóa [123]
 *     Không muốn xóa thì đặt deleteCount = 0 -> phần tử mới sẽ thêm vào từ vị trí start
 */