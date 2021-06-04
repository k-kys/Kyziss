function run(animals) {
    // Nếu không có element thì thêm Cat và mouse
    if (animals.length == 0) {
        animals.push("Cat", "Mouse");
    }
    // Nếu có 1 element thì thêm Elephant vào đầu array
    else if (animals.length == 1) {
        animals.unshift("Elephant");
    }
    // Nếu nhiều hơn 2 element thì xóa element thứ 2 và thay vào đó là Monkey, Tiger
    else if (animals.length > 2) {
        animals.splice(1, 1, "Monkey", "Tiger");
    }
    console.log(animals);
    return animals;
}
run(["Meow", "Gauz", "Cuccuz"]);