<?php

require_once('../models/post.php');
if(isset($_POST["submit"]))
{
    $comment_id = $_POST['comment_id'];
    $comment_text = $_POST['comment_text'];
    editComment($comment_text,$comment_id);
}
header('location: /views/post_view.php');
