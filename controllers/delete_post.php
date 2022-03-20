<?php
/**
 * Your code here
 */

require_once('../models/post.php');
$post_id = $_GET['post_id'];
deletePost($post_id);
header('location: /views/post_view.php');
