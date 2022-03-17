<?php
/**
 * Your code here
 */

if(isset($_POST["submit"]))
{
    require_once('../models/post.php');
    $post_id = $_POST['post_id'];
    $text_post = $_POST['text_post'];
    updatePost($post_id,$text_post);
        
}
header('location: /index.php');