
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
                            <label>
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
    // print_r($text_posts);
    foreach($text_posts as $text_post):
    ?>
        <div class="post-view p-0 pt-3 pb-5">
            <div class="post-header">
                <div class="profile">
                    <div class="img_profile"> 
                        <!-- <img src="images/man.png" alt=""> -->
                        <img src="<?php echo $text_post['profile_image'];?>" alt="">
            
                    </div>
                    <div class="user-name">
                        <!-- <h6>Phearun Chhun</h6> -->
                        <h6><?php echo $text_post['first_name'].' '.$text_post['last_name'];?></h6>
                        <p><?php echo date_default_timezone_set('Asia/Phnom_Penh').$text_post['create_datetime']= date(" D   M   j  Y G:i:s ").'mns'?></p>
                    </div>
                </div>
                <div class="three-dot mx-4">
                    <h1>...
                        <div class="sub-menu-1">
                            <ul>
                                <li><a href="../views/edit_post.php?post_id=<?php echo $text_post['post_id'];?> ">Edit</a></li>
                                <li><a href="../controllers/delete_post.php?post_id=<?php echo $text_post['post_id'];?> ">Delete</a></li>
                            </ul>
                    </h1>
                </div>
            </div>
            <div class="post-description p-2">
                <?=  $text_post['text_post'] ?>
            </div>
            <div class="post-image">
                <img class="w-100 p-0" src="../post_image/<?=$text_post['images'] ;?>" alt="">
            </div>
            <div class="number-like-comment" style='margin-top:5px'>
                <p>1k</p>
                <p>279 comments</p>
            </div>
            <hr>
            <div class="function_post post-react ">
                <div class="click_like">
                    <button type='submit' class="like" >
                        <!-- <img src="../images/like.png" alt="" > -->
                            <i class="far fa-thumbs-up mt-1 m-2 "></i> 
                            Like
                    </button>
                </div>
                <div   class="click_comment">
                    <button  type='submit' name='submit'  id="<?= $text_post['post_id']?>" style='display:flex;background:none; border:none '>
                        <!-- <img src="../images/comment.png" alt=""> -->
                        <i class="far fa-comment-alt mt-2 m-2" ></i> 
                        Comment
                    </button>
                </div>
            </div>
        </div>
        <!-- display comment -->
        <?php
            require_once('./models/post.php');
            $post_id=$text_post['post_id'];
            $comment_text = getComment($post_id);
            foreach ($comment_text as $comment_texts):
                if ($comment_text!= $text_post['post_id']):
            ?>
        <div class="display_comment" id='form-comment' style='width:60%;margin:auto;display:flex;'>
            <div class="img_profile" style='width:10%'>
                <img src="images/man.png" alt="">
            </div>
            <div class="name_comment" style=' background:#ccc;border-radius: 10px;'>
                <p style=''><?php echo $text_post['first_name'].' '.$text_post['last_name'];?></p>
                <p><?=  $comment_texts['comment_text']?></p>
            </div>
        </div>
        <?php  endif?>
        <?php endforeach?>
        
        <!-- add comment -->
        <div class="comment_box" style='display:none' id='<?= $text_post['post_id'] ?>'>
            <form action="../controllers/comment_post.php"  method='post' id='<?= $text_post['post_id'] ?>' style='width:80%; box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;border-radius: 10px;'>
                    <div class="display_comment" style='display:flex;width:80%;margin:auto ;   '>
                        <div class="img_profile" style='width:10%'>
                            <img src="../images/man.png" alt="">
                        </div>
                        <label for="comment_post" style='margin:auto;width:80%;display:flex'>
                            <input type="hidden" style='width:10%;background:none;border:none' id= 'comment_post_id' name = 'hidden-post-id' value='<?= $text_post['post_id'];?>' >
                            <input type="text" style='width:80%;background:none;border:none' id= 'comment_post' name='comment-text' placeholder='write your comment here...'>
                            <button type='submit' style='background:none;border:none' name='submit'>
                                <img src="../images/send.png" alt="" style='width:40px; height:40px;'>
                            </button>
                        </label>
                    </div>
                </form>
    
        </div>
        

    <?php endforeach;  ?>
</div>