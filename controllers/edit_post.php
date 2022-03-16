<?php
/**
 * Your code here
 */
require_once('../models/post.php');
$id = $_POST['post_id'];
$item = $_POST['text_post'];
$price = $_POST['post_image'];
updateItem($post_id,$text_post,$post_image);
header('location: /index.php');