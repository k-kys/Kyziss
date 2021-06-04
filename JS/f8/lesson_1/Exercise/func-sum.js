function sum(a, b) {
    // var result = typeof a == "number" && typeof b == "number" ? a + b : false;
    var result = !isNaN(a) && !isNaN(b) && typeof a == "number" && typeof b == "number" ?
        a + b :
        false;
    return result;
}

var result = sum(1, 8);
console.log(result);