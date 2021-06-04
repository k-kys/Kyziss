function run(anArray) {
    console.log(anArray);
    if (anArray.length < 3) {
        anArray.shift();
    } else if (anArray.length > 2) {
        anArray.splice(-2, 2);
    }
    console.log(result);
    console.log(anArray);
    return anArray;
}
run(["con bò", "con chó", "con gà", "con vịt"]);