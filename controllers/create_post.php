<?php
require_once ("../models/post.php");
$text_post = $_POST['text_post'];
// $price = $_POST['price'];
createPost($text_post);

header("location: /index.php");