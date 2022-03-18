<?php
/**
 * Your code here
 */

require_once('../models/post.php');
if(isset($_POST["submit"]))
{
    $post_id = $_POST['post_id'];
    $text_post = $_POST['text_post'];
    // $file = $_FILES['uploadfile']['name'];
    $file = 'IMG-'.uniqid()."-".$_FILES['uploadfile']['name'];
    $file_loc = $_FILES['uploadfile']['tmp_name'];
    $file_size = $_FILES['uploadfile']['size'];
    $file_type = $_FILES['uploadfile']['type'];
    $folder="../post_image/";
    // move_uploaded_file($file_loc,$folder.$file);
    if (move_uploaded_file($file_loc,$folder.$file)){
        echo "";
    }else {
        $post = getPostById($post_id);
        print_r($post) ;
        $file = $post['images'];
    }
    updatePost($post_id,$text_post,$file);    

}
header('location: /index.php');