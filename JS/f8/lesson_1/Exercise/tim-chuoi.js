function run(title, description) {
    var result =
        title.search("Javascript") != -1 && description.search("Javascript") != -1 ?
        true :
        false;

    return result;
}