var postApi = "https://jsonplaceholder.typicode.com/posts";

fetch(postApi)
    .then((response) => {
        return response.json();
        // JSON.Parse: JSON -> Javascript types
    })
    .then((posts) => {
        console.log(posts);
        var htmls = posts.map((post) => {
            return `<li>
            `;
        });
    })
    .catch((err) => {
        alert("Co loi");
    });