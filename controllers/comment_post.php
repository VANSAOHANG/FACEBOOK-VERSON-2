<?php
require_once ("../models/post.php");
$comment_text=$_POST["comment"];
$post_id = $_POST['post_id'];
// commentPost(,$comment_text);
commentPost($post_id,$comment_text);
header("location: /index.php");
