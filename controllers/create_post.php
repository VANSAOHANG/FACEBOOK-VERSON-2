<?php
require_once ("../models/post.php");
$text_post = $_POST['text_post'];

 
// $file = rand(1000,100000)."-".$_FILES['uploadfile']['name'];
$file = 'IMG-'.uniqid()."-".$_FILES['uploadfile']['name'];
$file_loc = $_FILES['uploadfile']['tmp_name'];
$file_size = $_FILES['uploadfile']['size'];
$file_type = $_FILES['uploadfile']['type'];
$folder="../post_image/";
move_uploaded_file($file_loc,$folder.$file);

?>
<img class="w-100 p-0" src="../post_image/<?=  $filename ?>;" alt="">
<?php

createPost($text_post,$file);

header("location: /index.php");