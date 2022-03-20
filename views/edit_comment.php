<?php require_once('../templates/header.php')?>
<?php require_once('../models/post.php')?>
<?php
        // TO DO:
        $comment_id = $_GET['comment_id'];
        // Get the id of the item to update in query
        $comment_texts = getCommentById($comment_id);
        // Get data for this item from database
?>
<form action="../controllers/edit_comment.php" method='post'>
    <div class="display_comment" style='display:flex;width:100%;margin:auto;   '>
        <div class="img_profile" style='width:10%'>
            <img src="../images/man.png" alt="">
        </div>
        <label for="comment_post" style='margin:auto;width:80%;display:flex'>
            <input type="hidden" class="w-100" id= 'comment_post' name='comment_id' value='<?php echo $comment_texts['comment_id'] ?>'>
            <textarea cols="12" name='comment_text' ><?php echo $comment_texts['comment_text'] ?></textarea> 
            <button type='submit' style='background:none;' name='submit'>   
                <img src="../images/send.png" alt="" style='width:40px; height:40px;'>
            </button>
        </label>
        <div class="comment-close">
            <div class="btn-close">
                <button class="close-post bg-white  border-0">
                    <i class='fa fa-times-circle-o'></i>
                </button>
            </div>
        </div>
    </div>
</form>