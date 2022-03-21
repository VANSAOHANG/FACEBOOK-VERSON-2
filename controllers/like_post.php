<?php
session_start();
require_once('../models/post.php');
$post_id = $_GET['post_id'];
likePost($post_id,$_SESSION['profile_id']);
header('location: /views/post_view.php');



