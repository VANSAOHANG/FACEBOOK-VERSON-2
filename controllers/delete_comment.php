<?php

require_once('../models/post.php');
$comment_id = $_GET['comment_id'];
deleteComment($comment_id);
header('location: /views/post_view.php');
