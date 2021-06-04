/**
 * Từ array formValues đã cho,
 * hãy trả về một object có các keys
 * tương ứng với các fields
 * của các objects nằm trong array formValues.
 */
var formValues = [
    { field: "name", value: "Sơn Đặng" },
    { field: "age", value: 18 },
    { field: "address", value: "Hà Nội" },
    // ...
];

function getRequestBodyFromValues(formValues) {
    for (var key in formValues) {
        for (var value of Object.values(formValues[key])) {
            console.log(value);
        }
    }
}

getRequestBodyFromValues(formValues);

// Chưa xong