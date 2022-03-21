<?php
session_start();
require_once ("../models/post.php");
if(isset($_POST["submit"]))
{
    $editFirstName = $_POST['editFirstName'];
    $editLastName = $_POST['editLastName'];
    $_SESSION['editUserEmail']  = $_POST['editUserEmail'];
    $editCountry = $_POST['editCountry'];
    $editDateOfBirth = $_POST['editDateOfBirth'];
    $profile_id = $_SESSION['profile_id'];
    if(updateProfile($editFirstName,$editLastName,$_SESSION['editUserEmail'],$editCountry,$editDateOfBirth,$profile_id)){
        $_SESSION['isEdit'] = true;
    };

} 
echo '<script type="text/JavaScript"> location.reload(); </script>';
header("location: ../views/profile_form.php");

