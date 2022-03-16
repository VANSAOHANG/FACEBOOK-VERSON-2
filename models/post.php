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
function deletePost($id)
{
    global $db;
    $statement = $db -> prepare("DELETE FROM items where id = :id_item ");
    $statement-> execute (
    [
        ':id_item' => $id
    ]
    );
    if ( $statement->rowCount() == 1):
        return true;
    else:
        return false;
    endif;
}

/**
 * Update a Item given id and attributes
 * @param integer $id :  		the id of the item to update
 * @param string  $item_name :  the item name
 * @param integer $price :  	the item price
 * 
 
 * @return boolean: true if deletion was successful, false otherwise
 */
function updatePost($id, $item_name, $price)
{
    global  $db ; 
    $statement = $db ->prepare ("UPDATE items  set  item = :item_name, price = :price where id = :item_id");
    $statement-> execute(
        [
            ':item_id' => $id,
            ':item_name'=> $item_name,
            ':price' => $price
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