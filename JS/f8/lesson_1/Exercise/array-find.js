/**
 * Tìm thú có chỉ số attack bằng 150 và trả về thú đó
 * trong hàm findAMonsterByAttack đã cho trước
 * (Trả về thú đầu tiên tìm được)
 * Trường hợp trong danh sách monsters không có thú phù hợp thì
 * hàm findAMonsterByAttack trả về null
 */

var monsters = [{
        name: "Cá heo",
        attack: 50,
        speed: 100,
        hitpoint: 100,
    },
    {
        name: "Khủng long",
        attack: 150,
        speed: 80,
        hitpoint: 180,
    },
    // ...
];

function findAMonsterByAttack(monsters) {
    var a = monsters.find(function(monster, index) {
        return monster.attack === 150;
    });
    console.log(a);
    return a;
}
findAMonsterByAttack(monsters);

// var a = monsters.find(function (value, index) {
//   return value.attack == 150;
// });
// return a ? a : null;