<?php require_once('../templates/header.php')?>
<?php require_once('../models/post.php')?>
    <!-- add comment comment -->
    <?php
    $text_posts  = getPost();
    // print_r($text_posts);
    foreach($text_posts as $text_post):
    ?>
        <form action="../controllers/comment_post.php"  method='post' id='form-comment' style='width:50%; box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;border-radius: 10px;'>
      
            <div class="display_comment" style='display:flex;width:80%;margin:auto ;   '>
                <div class="img_profile" style='width:10%'>
                    <img src="../images/man.png" alt="">
                </div>
                <label for="comment_post" style='margin:auto;width:80%;display:flex'>
                    <input type="text" style='width:10%;background:none;border:none' id= 'comment_post_id' name = 'hidden-post-id' value='<?= $text_post['post_id'];?>' >
                    <input type="text" style='width:80%;background:none;border:none' id= 'comment_post' name='comment-text' placeholder='write your comment here...'>
                    <button type='submit' style='background:none;border:none' name='submit'>
                        <img src="../images/send.png" alt="" style='width:40px; height:40px;'>
                    </button>
                </label>
            </div>
        </form>
    <?php endforeach;?>