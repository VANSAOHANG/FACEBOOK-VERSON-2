<?php
session_start();
require_once ("../models/post.php");
if(isset($_POST["submit"]))
{
    $firstname = $_POST['editFirstName'];
    $lastname = $_POST['editLastName'];
    $editUserEmail = $_POST['editUserEmail'];
    $editCountry = $_POST['editCountry'];
    $editDateOfBirth = $_POST['editDateOfBirth'];
    $profile_id = $_SESSION['profile_id'];
    updateProfile($firstName,$lastName,$editUserEmail,$editCountry,$editDateOfBirth,$profile_id);
} 
header("location:/views/profile_form.php");
