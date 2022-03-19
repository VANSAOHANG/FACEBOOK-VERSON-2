<?php
require_once ("../models/post.php");
$comment_text = $_POST['comment-text'];
$post_id = $_POST['hidden-post-id'];
if(isset($_POST["submit"]))
{
    comment($comment_text,$post_id);
} 
header("location: /index.php");
