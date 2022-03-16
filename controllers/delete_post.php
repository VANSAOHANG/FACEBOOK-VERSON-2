<?php
/**
 * Your code here
 */

require_once('../models/post.php');
$id = $_GET['post_id'];
deleteItem($post_id);
header('location: /index.php');