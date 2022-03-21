<?php
/**
 * Your code here
 */
require_once("templates/header.php");
// require_once("views/post_view.php");
// require_once("views/register.php");
if (!isset($_SESSION['password_login'])){
    require_once("views/signin.php");
}
require_once("templates/footer.php");

?>


