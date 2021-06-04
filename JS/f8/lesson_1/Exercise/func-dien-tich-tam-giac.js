function calculateTriangleArea(a, h) {
    if (a > 0 && Number.isInteger(a) && h > 0 && Number.isInteger(h)) {
        var s = (a * h) / 2;
        console.log(s);
        return s;
    }
    console.log(false);
    return false;
}
calculateTriangleArea(10, 68);