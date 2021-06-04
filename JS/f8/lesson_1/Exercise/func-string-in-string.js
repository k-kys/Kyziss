function stringInString(needle, haystack) {
    var result =
        typeof needle == "string" && typeof haystack == "string" ?
        haystack.includes(needle) :
        false;
    console.log(result);
    return result;
}
stringInString("1", "1 con bò");