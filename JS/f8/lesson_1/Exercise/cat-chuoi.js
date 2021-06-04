function run(title) {
    // var title = 'Học Javascript tại F8';
    var language = title.trim().slice(4, 14);
    var rest = title.trim().slice(14);

    console.log(`Language is ${language} and rest is ${rest}`);
}
run("Học Javascript tại F8");