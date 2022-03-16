<?php
require_once ("../models/post.php");
if (isset($_POST['submit']))  {
    $file_image = $_FILES['file_images']['name'];
    $text_post = $_POST['text_post'];
    createPost($text_post,$file_image);
}

// addImageToPost($post_image);
header("location: /index.php");