/**
 * Promise : giải quyết vấn đề trong bất đông bộ
 *
 * Sync: đồng bộ, chạy theo thứ tự
 *
 * Async: Bất đồng bộ, không theo thứ tự
 * setTimeout, setInterval, fetch, XMLHttpRequest, file reading, request animation
 * Callback để xử lí bất đồng bộ
 */
// sleep
// chạy ra 2 rồi mới ra 1
// setTimeout(function() {
//     console.log(1);
// }, 1000);
// console.log(2);
/* -----------------------------------------------*/
/**
 * Callback hell
 * pyramid of doom
 */

// Nỗi đau - pain
// setTimeout(function() {
//     console.log(1); // viec 1
//     setTimeout(function() {
//         console.log(2); // viec 2
//         setTimeout(function() {
//             console.log(3); // viec 3
//         });
//     });
// });

/* ------------------------------------------------ */

// 1. tao promise
// var promise = new Promise(
//     // 2.Executor
//     function(resolve, reject) {
//         // logic
//         // Success: resolve()
//         // Fail: reject()
//         resolve([{
//             id: 1,
//             name: "Javascript",
//         }, ]);
//     }
// );

// promise
// // resolve được gọi -> then() được gọi
//     .then(function() {
//         // console.log(courses);
//         return new Promise(function(resolve) {
//             setTimeout(function() {
//                 resolve([1,2,3]);
//             }, 3000);
//         });
//     })
//     .then(function(data) {
//         console.log(data);
//     })
//     // reject được gọi -> catch() được gọi
//     .catch(function(error) {
//         console.log(error);
//     })
//     // resolve hoặc reject được gọi -> finally() được gọi
//     .finally(function() {
//         console.log("Done!");
//     });

/* ----------------------------------------------*/

// 1. Promise.resolve: luôn đúng
// function sleep(ms) {
//     return new Promise((reslove) => {
//         setTimeout(resolve, ms);
//     });
// }

// sleep(1000)
//     .then(function() {
//         console.log(1);
//         return sleep(1000);
//     })
//     .then(function() {
//         console.log(2);
//         return sleep(1000);
//     })
//     .then(function() {
//         console.log(3);
//         return sleep(1000);
//     })
//     .then(function() {
//         console.log(4);
//         return sleep(1000);
//     })
//     .catch((err) => {
//         console.log(err);
//     })

// Thư viện: output luôn luôn là một promise
// var promise = Promise.resolve('Success'); -> luôn thành công
// var promise = new Promise((resolve, reject) => {
//     // logic
//     resolve("Success");
//     // reject('Error');
// });

// promise
//     .then((result) => {
//         console.log("result: ", result);
//     })
//     .catch((err) => {
//         console.log("err: ", err);
//     });

/* ----------------------------------------------- */

// 2. Promise.reject('luon sai') : luôn sai
// var promise2 = Promise.reject("Có lỗi");

/* ----------------------------------------------- */

// 3. Promise.all() : chạy song song
// var promise1 = new Promise((resolve) => {
//     setTimeout(() => {
//         resolve([1]);
//     }, 2000);
// });

// var promise2 = new Promise((resolve) => {
//     setTimeout(() => {
//         resolve([2, 3]);
//     }, 5000);
// });

// Promise.all([promise1, promise2])
//     .then(([result1, result2]) => {
//         console.log(result1.concat(result2));
//     })
//     .catch((error) => {
//         console.log(error);
//     });

/* ------------------------------------------ */

// Promise Example
var users = [{
        id: 1,
        name: "Kien Dam",
    },
    {
        id: 2,
        name: "Son Dang",
    },
    {
        id: 3,
        name: "Hung Dam",
    },
];

var comments = [{
        id: 1,
        user_id: 1,
        content: "Anh Son chua ra video",
    },
    {
        id: 2,
        user_id: 2,
        content: "Vua ra xong em oi",
    },
    {
        id: 3,
        user_id: 1,
        content: "Cam on anh",
    },
];

function getComments() {
    return new Promise((resolve) => {
        setTimeout(() => {
            // return bien comments sau 1s vao ham .then()
            resolve(comments);
        }, 1000);
    });
}

function getUsersByIds(userIds) {
    return new Promise((resolve) => {
        var result = users.filter((user) => {
            // tim userIds co trong user.id => return user co ton tai
            return userIds.includes(user.id);
        });
        setTimeout(() => {
            // return user co userIds ton tai trong users sau 1s vao trong ham .then()
            resolve(result);
        }, 1000);
    });
}

getComments()
    .then((comments) => {
        // lấy user_id trong mảng comments
        var userIds = comments.map((comment) => {
            return comment.user_id;
        });
        // lay thong tin user co trong userIds va users
        return getUsersByIds(userIds).then((users) => {
            // return ve user va comment cua user do
            return {
                users: users,
                comments: comments,
            };
        });
    })
    .then((data) => {
        // DOM
        var commentBlock = document.getElementById("comment-block");
        var html = "";
        // Array
        data.comments.forEach((comment) => {
            var user = data.users.find((user) => {
                // tim user.id co trong user_id cua mang comment -> return user
                return user.id === comment.user_id;
            });
            html += `<li>${user.name}: ${comment.content}</li>`;
        });
        commentBlock.innerHTML = html;
    });