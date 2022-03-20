<?php
require_once('../models/post.php');
if(isset($_POST["submit"]))
{
    $post_id = $_POST['post_id'];
    $text_post = $_POST['text_post'];
    $file = 'IMG-'.uniqid()."-".$_FILES['uploadfile']['name'];
    $file_loc = $_FILES['uploadfile']['tmp_name'];
    $file_size = $_FILES['uploadfile']['size'];
    $file_type = $_FILES['uploadfile']['type'];
    $folder="../post_image/";
    if (move_uploaded_file($file_loc,$folder.$file)){
        echo "";
    }else {
        $post = getPostById($post_id);
        $file = $post['images'];
    }
    updatePost($post_id,$text_post,$file);    

}
header('location: /views/post_view.php');