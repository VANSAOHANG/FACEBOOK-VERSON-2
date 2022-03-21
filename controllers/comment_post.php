<?php
session_start();
require_once ("../models/post.php");
$comment_text = $_POST['comment-text'];
$post_id = $_POST['hidden-post-id'];
$profile_id = $_SESSION['profile_id'];
if(isset($_POST["submit"]))
{
    comment($comment_text,$post_id,$profile_id);
} 
header("location:/views/post_view.php");
