<?php
/**
 * Your code here
 */
// require_once ('database.php');
$db =new PDO ("mysql:host=localhost;dbname=facebook_db","root","");
function getPost()
{
    global $db;
    $statement=$db->prepare('SELECT post_id, text_post FROM posts ;');
     $statement->execute();
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
    $statement = $db->prepare("SELECT post_id, text_post FROM posts where post_id = :post_id");
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
    $statement = $db -> prepare("DELETE FROM posts where post_id = :post_id ");
    $statement-> execute (
    [
        ':post_id' => $id
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
function updatePost($post_id, $text_post, $post_image)
{
    global  $db ; 
    $statement = $db ->prepare ("UPDATE posts  SET  text_post = :text_post, post_image = :post_image WHERE post_id = :post_id");
    $statement-> execute(
        [
            ':post_id' => $post_id,
            ':text_post'=> $text_post,
            ':post_image' => $post_image
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
function createPost($text_post)
{
    global $db ;
    $statement = $db -> prepare("INSERT INTO posts (text_post,profile_id) values (:text_post,1)");
    $statement-> execute(
        [
            ':text_post'=> $text_post

           
        ]
        );
   return ($statement->rowCount() == 1 );

}