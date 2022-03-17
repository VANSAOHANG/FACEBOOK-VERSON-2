<?php
require_once ("../models/post.php");
if (isset($_POST['submit']))  {

    $text_post = $_POST['text_post'];
    createPost($text_post);
}

// addImageToPost($post_image);
header("location: /index.php");