
<div class="container">
    <!-- post -->
    <div class="post">
            <div class="post_mind">
                <div class="img_profile">
                    <img src="images/man.png" alt="">
                </div>
                <div class="write_something">
                    <span class ='w-100 border-0 p-2 rounded-pill write_something' >
                        <a href="../views/post_create.php" class='your-mine'>  What is your mind?</a>
                    </span>
                </div>
            </div>
            <div class="function_post">
                <div class="feature_photo">
                    <div class="img_post">
                        <a href="views/post_create.php" style='color:green'>
                            <label for="image">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
                                    <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                    <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z"/>
                                </svg>PHOTO
                            </label>
                        </a>
                    </div>
                </div>
                <div class="feature_feeling">
                    <div class="smile">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                        </svg>
                    </div>
                    <p>FEELING</p>
                </div>
            </div>
            <?php?>
    </div>
    <!-- -------end post--------- -->
        <?php
        require_once ('./models/post.php');
        $text_posts  = getPost();
        
        foreach($text_posts as $text_post):

        ?>
    <div class="post-view p-0 pt-3 pb-5">
        <div class="post-header">
            <div class="profile">
                <div class="img_profile"> 
                    <img src="<?php echo $text_post['profile_image'];?>" alt="">
           
                </div>
                <div class="user-name">
                    <h6><?php echo $text_post['first_name'].' '.$text_post['last_name'];?> </h6>
                    <p><?=  $text_post['create_datetime'].' '?></p>
                </div>
            </div>
            <div class="three-dot mx-4">
                <h1>...
                    <div class="sub-menu-1">
                        <ul>
                            <li><a href="../views/edit_post.php?post_id=<?php echo $text_post['post_id'];?> ">Edit</a></li>
                            <li><a href="../controllers/delete_post.php?post_id=<?php echo $text_post['post_id'];?> ">Delete</a></li>
                        </ul>
                    </div>
                </h1>
            </div>
        </div>
        <div class="post-description p-2">
            <!-- <p>[English Below] It is a long established fact that a reader will be distracted by the readable content of a page. </p> -->
            <?=  $text_post['text_post'] ?>
        </div>
        <div class="post-image">
            <img class="w-100 p-0" src="../post_image/<?=$text_post['images'] ;?>" alt="">
        </div>
        <?php
            $all_like_posts=get_like_posts($text_post['post_id']);
        ?>
        <div class="number-like-comment">
            <p><?=count($all_like_posts)." "; ?>k</p>
            <p>279 comments</p>
        </div>

        <div class="function_post post-react p-3">
            <div>
                <a href="../controllers/like_post.php?post_id=<?php echo $text_post['post_id'];?> ">
                    <button type='submit' class="like" name="like_post">
                        <!-- <img src="../images/like.png" alt="" class="dark_like"> -->
                        <i class="fa fa-thumbs-up fa-2x text-primary mt-1" class="blue_like"></i>
                        <p>Like</p>
                    </button>
                </a>
            </div>
            <div  >
                <button type='submit' class="comment">
                    <img src="../images/comment.png" alt="">
                    <p>Comment</p>
                </button>
            </div>
        </div>
    </div>
    <div class="post-view">

        <?php
            $comments=getComments($text_post['post_id']);
            foreach($comments as $comment):
                // print_r($comment["comment_text"]);
                $comment_post=$comment["comment_text"];
                echo "
                    <div class='post_mind'>
                        <div class='img_profile'>
                            <img src='images/man.png' >
                        </div>
                        <div class='write_something post-comment w-100'>
                            <span class ='w-100 border-0 p-2 rounded-pill write_something ' >
                                <p  class='your-mine  text-dark w-auto my-0'>$comment_post</p>
                            </span>
                        </div>
                    </div>";
        ?>
        <?php
            endforeach;  
        ?>
        <div class="post_mind">
            <div class="img_profile">
                <img src="images/man.png" alt="">
            </div>
            <div class="write_something">
                <form action="../controllers/comment_post.php" method="post">
                    <span class ='w-100 border-0 p-2 rounded-pill write_something' >
                        <input  type="number" style="display:none" value=<?php echo $text_post['post_id'];?> name="post_id">
                        <input type="text" class='your-mine' name="comment" id="comment" placeholder="comment here">
                        <button type="submit">
                            <i class='fa fa-send fa-2x text-primary p-2'></i>   
                        </button>
                    </span>
                </form> 
            </div>
        </div>
    </div>
    <?php
    endforeach;  
    ?>
</div>
<!-- <script src="../script/script.js"></script> -->