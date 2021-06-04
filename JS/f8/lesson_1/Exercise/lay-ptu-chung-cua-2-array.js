/**
 * Tạo hàm findEqualValues có hai tham số là array1 và array2
 * (Hai tham số này sẽ được test case tại F8 truyền đối số
 * là các array chứa nhiều các giá trị số hoặc chuỗi bất kì).
 *
 * Trường hợp array1 và array2 có các giá trị bằng nhau
 * thì hàm findEqualValues sẽ trả về mảng mới chứa các giá trị đó
 * (mỗi giá trị là một phần tử trong array mới)
 *
 * Trường hợp không có giá trị bằng nhau giữa hai tham số
 * thì hàm trả về array rỗng []
 */

function findEqualValues(array1, array2) {
    var length1 = array1.length;
    var length2 = array2.length;
    var equal = [];

    for (var i = 0; i < length1; i++) {
        for (var j = 0; j < length2; j++) {
            if (array1[i] === array2[j]) {
                equal.push(array1[i]);
            }
        }
    }

    console.log(equal);
    return equal;
}

var array1 = [1, 2, 6, 8];
var array2 = [2, 9, 6];
// var array1 = ["Gấu"];
// var array2 = ["Thảo", "Dung", "Lệ"];
findEqualValues(array1, array2);