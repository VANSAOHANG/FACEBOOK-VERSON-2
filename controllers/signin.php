<?php
// Start new or resume existing session.
session_start();
require_once('../models/post.php');
// $vansao=$_SESSION['email_error'];
$_SESSION['password_error']= "vvv";
$email_valid=false;
$password_valid=false;
$is_register_valid = false;
$_SESSION['email']=$_POST['email'];
function validate_email($email)
{
    // function to check if email is correct (must contain '@')
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];


    if (empty($email)){
        $_SESSION['email_error']="Please enter an email";
    }   elseif (!validate_email($email)) {
        $_SESSION['email_error'] = "email must contain '@'";
    }else{
        $email_valid=true;
    }
    if (empty($password)){
        $_SESSION['password_error'] = "Please write your message here.";
    } else{
        $password_valid=true;
    }
    if ($password_valid && $email_valid){
        $is_register_valid = true;
    }
    // elseif(count($message)){
    //     $message_error = "Message must be at least 10 caracters long";
    // }



}

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
}
if (isset($_SESSION['email_login']) && $_SESSION['password_login']  ){

    if ($_SESSION['email_login']==$email && $_SESSION['password_login'] == $password  ){
        header("location: /views/post_view.php");
    }else{
        header("location: /index.php");
    }
}else{
    header("location: /index.php");
}
