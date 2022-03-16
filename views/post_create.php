<!-- create post -->

<?php require_once('../templates/header.php')?>
<form action="../controllers/create_post.php" method='post'>
    <div class="create-post">
        <div class="header">
            <div class="content">
                <span>Create post</span>
            </div>
            <div class="btn-close">
                <button class="close-post bg-white  border-0">
                <i class='fa fa-times-circle-o '></i>
            </button>
            </div>
            
        </div>
        <div class="side-menu">
            <div class="profile">
                        <div class="img_profile"> 
                            <img src="../images/man.png" alt="">
                            <div class="user-name">
                                <h5>Phearun Chhun</h5>
                            </div>
                        </div>
                    </div>
                <textarea rows="12" cols="12"  name='text_post' class='text-post'></textarea> 
            </div>
            <div class="insert-post">
                <div>Insert your comment </div>
                <div class="img-post">
                    <form action=""></form>
                    <label for="image">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"  fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
                                <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z"/>
                            </svg>
                            <input type="file" name="post_image" id="image" style="display:none;">
                    </label>
                    <label for="image">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                        </svg>        
                            <input type="file" name="" id="image" style="display:none;">
                    </label>
                </div>
            <div>
                </div>
            </div>
            <div class="btn-post">
                        <button class="submit-post">POST</button>
            </div>
</form>
