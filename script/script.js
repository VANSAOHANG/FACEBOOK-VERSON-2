var loadFile = function(event) {
    var image = document.getElementById('img-post');
    image.src = URL.createObjectURL(event.target.files[0]);
};


// let like_icon = document.querySelectorAll(".like_icon")
// function like(){
//     alert("Hello World!");

// }
// let likes_png = document.querySelectorAll(".like_png")
// likes_png.forEach((like_png, index)=>{
// 	like_png.addEventListener("click",like)
// })
