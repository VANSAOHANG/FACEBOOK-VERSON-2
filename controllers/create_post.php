<?php
require_once ("../models/post.php");
$text_post = $_POST['text_post'];
// $post_image = $_POST['post_image'];
createPost($text_post);
// addImageToPost($post_image);
header("location: /index.php");