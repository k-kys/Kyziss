function run(number) {
    var result = number > 0 && Number.isInteger(number) ? true : false;
    console.log(result);
    return result;
}
run(5);