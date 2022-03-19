var loadFile = function(event) {
    var image = document.getElementById('img-post');
    image.src = URL.createObjectURL(event.target.files[0]);
};

const showComment = document.querySelectorAll('.comment_box');
const clickComment = document.querySelectorAll('.click_comment');
for (const each_post of clickComment) {
    each_post.addEventListener("click", (e) => {
        const click_on = e.target.id
        for (const each_show of showComment) {
            if (click_on == each_show.id) {
                each_show.style.display = "flex"
            }
        }

    })
}