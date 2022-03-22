<?php
// Start new or resume existing session.
session_start();
require_once('../models/post.php');
$_SESSION['email']=$_POST['email'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["submit"])){

        $email = $_POST['email'];
        $password = $_POST['password'];
    
        
        $userInfo=getUserInfo($email,$password);
        if ($userInfo != ""){
            $_SESSION['email_login']=$userInfo["email_address"];
            $_SESSION['password_login']=$userInfo["password"];
            $_SESSION['profile_id']=$userInfo["profile_id"];
            $_SESSION['firstname']=$userInfo["first_name"];
            $_SESSION['lastname']=$userInfo["last_name"];
            $_SESSION['country']=$userInfo["country"];
            $_SESSION['date_of_birth']=$userInfo["date_of_birth"];
            $_SESSION['isEdit']=false;
            header("location: /views/post_view.php");
            $_SESSION['password_error']="";
        }
        else{
            header("location: /index.php");
            $_SESSION['password_error']= "*  invalid email or password";
        }
    }

}
