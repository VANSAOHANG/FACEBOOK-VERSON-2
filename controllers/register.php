<?php
require_once('../models/post.php');
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$password=$_POST["password"];
$country=$_POST["country"];
$date=$_POST["date"];
register($firstname,$lastname,$email,$password,$country,$date);

require_once("../templates/header.php");

require_once("../views/signin.php");

require_once("../templates/footer.php")
?>