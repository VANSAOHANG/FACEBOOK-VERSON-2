<?php
session_start();
require_once('../models/post.php');
$post_id = $_GET['post_id'];
if(count(get_like_posts($post_id))==0){
    likePost($post_id,$_SESSION['profile_id']);
}
header('location: /views/post_view.php');



