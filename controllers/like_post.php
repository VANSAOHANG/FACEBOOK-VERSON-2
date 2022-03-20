<?php
require_once('../models/post.php');
$post_id = $_GET['post_id'];
likePost($post_id);
header('location: /views/post_view.php');



