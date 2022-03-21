<?php

require_once ('database.php');
function register($firstname,$lastname,$email,$password,$country,$date0fbirth)
{
    global $db ;
    $statement = $db -> prepare("INSERT INTO profiles (first_name,last_name,email_address,password,country,date_of_birth) values (:first_name,:last_name,:email_address,:password,:country,:date_of_birth)");
    $statement-> execute(
        [
            ':first_name'=> $firstname,
            ':last_name'=> $lastname,
            ':email_address'=> $email,
            ':password'=> $password,
            ':country'=> $country,
            ':date_of_birth'=> $date0fbirth
        ]
        );
   return ($statement->rowCount() == 1 );

}

function getUserInfo($email,$password)
{
    global $db;
    $statement=$db->prepare('SELECT * FROM profiles where email_address=:email && password=:passwords;');
    $statement->execute([
        ':email'=> $email,
        ':passwords'=> $password
    ]
    );
    $text_post = $statement->fetch();
    return$text_post ;
}

function uploadImage($image_name){
    $filename = $_FILES[$image_name]["name"];
    $tempname = $_FILES[$image_name]["tmp_name"];
    $fileType = $_FILES[$image_name]["type"];
    $folder   = $filename;
    
    $fileInfo = pathinfo($_FILES[$image_name]["name"]);

    move_uploaded_file($_FILES["file"]["tmp_name"],"../post_image" . uniqid() . '.' . $fileInfo['extension']);
    return $filename;
}
function getPost($email,$password)
{
    global $db;
    $statement=$db->prepare('SELECT * FROM user_posts where email_address=:email && password=:passwords ORDER BY post_id DESC;');
    $statement->execute([
        ':email'=> $email,
        ':passwords'=> $password
    ]);
    $text_post = $statement->fetchAll();
    return$text_post ;
}

/**
 * Get a single item
 * @param integer $id : the item id
 
 * @return associative_array: the item related to given item id
 */
function getPostById($post_id)
{
    global $db;
    $statement = $db->prepare("SELECT profile_id,post_id, text_post,images FROM posts where post_id = :post_id");
    $statement->execute(
        [
            ':post_id'=> $post_id
        ]
    );
    $text_post= $statement->fetch();
    return $text_post;
}

/**
 * Remove item related to given item id
 * @param integer $id :  the id of the item to delete
 
 * @return boolean: true if deletion was successful, false otherwise
 */
function deletePost($post_id)
{
    global $db;
    $statement = $db -> prepare("DELETE FROM posts where post_id = :post_id ;");
    $statement-> execute (
    [
        ':post_id' => $post_id
    ]
    );
    return ( $statement->rowCount() == 1);
   
}

/**
 * Update a Item given id and attributes
 * @param integer $id :  		the id of the item to update
 * @param string  $item_name :  the item name
 * @param integer $price :  	the item price
 * 
 
 * @return boolean: true if deletion was successful, false otherwise
 */
function updatePost($post_id, $text_post,$images)
{
    global  $db ; 
    $statement = $db ->prepare ("UPDATE posts  SET  text_post = :text_post, images=:images WHERE post_id = :post_id");
    $statement-> execute(
        [
            ':post_id' => $post_id,
            ':text_post'=> $text_post,
            ':images'=> $images
        ]
        );
        return ($statement->rowCount() == 1 );
}

/**
 * Create a new item 
 * @param string  $item_name :  	the item name
 * @param integer $price :  		the price
 
 * @return boolean: true if create was successful, false otherwise
 */
function createPost($text_post,$filename,$profile_id)
{
    global $db ;
    $statement = $db -> prepare("INSERT INTO posts (text_post,profile_id,images) values (:text_post,:profile_id,:images)");
    $statement-> execute(
        [
            ':text_post'=> $text_post,
            ':profile_id' => $profile_id,
            ':images'=> $filename
        ]
        );
   return ($statement->rowCount() == 1 );

}
// get commentAll
function getComment($post_id){
    global $db;
    $statement = $db->prepare("SELECT*FROM comments where post_id=:post_id ");
   $statement->execute(
       [
           ':post_id'=> $post_id
       ]
       );
    $comment_text= $statement->fetchAll();
    return $comment_text;
}
function getCommentById($comment_id){
    global $db;
    $statement = $db->prepare("SELECT*FROM comments where comment_id=:comment_id ");
   $statement->execute(
       [
           ':comment_id'=> $comment_id
       ]
       );
    $comment_text= $statement->fetch();
    return $comment_text;
}
function deleteComment($comment_id){
    global $db;
    $statement = $db -> prepare("DELETE FROM comments where comment_id = :comment_id;");
    $statement-> execute (
    [
        ':comment_id' => $comment_id
    ]
    );
}
function editComment($comment_text,$comment_id){
    global  $db ; 
    $statement = $db ->prepare("UPDATE comments  SET  comment_text = :comment_text WHERE comment_id = :comment_id");
    $statement-> execute(
        [
            ':comment_text' => $comment_text,
            ':comment_id'=> $comment_id
        ]
        );
        return ($statement->rowCount() == 1 );
}
function comment($comment_text,$post_id,$profile_id)
{
    global $db;
    $statement = $db -> prepare('INSERT INTO comments(comment_text,post_id,profile_id) values (:comment_text,:post_id,:profile_id)');
    $statement -> execute(
        [
            ':comment_text'=> $comment_text,
            ':post_id' => $post_id,
            ':profile_id' => $profile_id
        ]
        );
    return ($statement -> rowCount() == 1);
}
function likePost($post_id,$profile_id)
{
    global $db ;        
    $statement = $db -> prepare("INSERT INTO likes  (post_id,profile_id) values (:post_id,:profile_id);");
    $statement-> execute(
        [
            ':post_id'=> $post_id,
            ':profile_id'=> $profile_id
        ]
    );
   return ($statement->rowCount() == 1 );
}

function get_like_posts($post_id){
    global $db ;
    $statement = $db -> prepare("SELECT * FROM likes WHERE post_id=:post_id;");
    $statement-> execute(
        [
            ':post_id'=> $post_id
        ]
        );
    return $statement->fetchAll();
}
// edit profile
function updateProfile($firstname,$lastname,$emailAddress,$country,$date0fbirth,$profile_id){
    global  $db ; 
    $statement = $db ->prepare ("UPDATE profiles  SET  first_name = :first_name,last_name=:last_name,email_address=:email_address,country=:country,date_of_birth=:date_of_birth  WHERE profile_id = :profile_id");
    $statement-> execute(
        [
            ':first_name' => $firstname,
            ':last_name'=> $lastname,
            ':email_address'=> $emailAddress,
            ':country'=> $country,
            ':date_of_birth'=> $date0fbirth,
            ':profile_id'=> $profile_id
        ]
        );
        return ($statement->rowCount() == 1 );

}
