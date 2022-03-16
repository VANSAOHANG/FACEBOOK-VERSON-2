<?php
/**
 * Your code here
 */
require_once ('database.php');
function getPost()
{
    global $db;
    $statement = $db-> query("SELECT id , item AS item_name , price  FROM posts;");
    $statement->execute();
    $items= $statement->fetchAll();
    return $items;
}

/**
 * Get a single item
 * @param integer $id : the item id
 
 * @return associative_array: the item related to given item id
 */
function getAllPost($id)
{
    global $db;
    $statement = $db -> prepare("SELECT id , item as  item_name,price  from items where id = :id ");
    $statement-> execute([
        ':id' => $id
    ]
    );
    $item = $statement -> fetch();
    return  $item;  
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
function createItem($item_name, $price)
{
    global $db ;
    $statement = $db -> prepare("INSERT INTO items (item,price) values (:item_name , :price)");
    $statement-> execute(
        [
            ':item_name'=> $item_name,
            ':price' => $price
        ]
        );
   return ($statement->rowCount() == 1 );

}