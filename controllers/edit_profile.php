<?php
session_start();
require_once ("../models/post.php");
if(isset($_POST["submit"]))
{
    $firstname = $_POST['fisrtname'];
    $lastname = $_POST['lastname'];
    $userEmail = $_POST['email_address'];
    $country = $_POST['country'];
    $dateOfBirth = $_POST['date_of_birth'];
    $profile_id = $_SESSION['profile_id'];
    updateProfile($firstName,$lastName,$userEmail,$country,$dateOfBirth,$profile_id);
} 
header("location:/views/profile_form.php");
