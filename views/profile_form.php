<?php require_once('../templates/header.php');session_start(); 
require_once ("../models/post.php");
$firstname = $_SESSION['firstname']; 
$lastname = $_SESSION['lastname'];
$userEmail = $_SESSION['email_login'];
$country =  $_SESSION['country'];
$dateOfBirth =  $_SESSION['date_of_birth'];
if (isset($_SESSION['isEdit'])){
    if($_SESSION['isEdit']==true){
        $userinfo = getUserInfo($_SESSION['editUserEmail'],$_SESSION['password_login']);
        $_SESSION['firstname']=$userinfo["first_name"];
        $_SESSION['lastname']=$userinfo["last_name"];
        $_SESSION['email_login']=$userinfo["email_address"];
        $_SESSION['country']=$userinfo["country"];
        $_SESSION['date_of_birth']=$userinfo["date_of_birth"];
    }
}

require_once('../templates/navigation_bar.php');
?>
<!-- link to bootstrap 4 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<div class="profile_form ">
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center align-item-center">
            <div class="col-xl-6 col-md-6" >
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25" > 
                                    <img src="../images/man.png" class="img-radius" alt="User-Profile-Image" style='width:64px;height:64px'> 
                                </div>
                                <h6 class="f-w-600"><?= $_SESSION['firstname'].' '.$_SESSION['lastname']?></h6>
                                <p>Web Designer</p>
                                
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400"><?=$_SESSION['email_login']?></h6>
                                    </div>
                                    <div class="col-sm-12">
                                        <p class="m-b-10 f-w-600">Country</p>
                                        <h6 class="text-muted f-w-400"><?=$country?></h6>
                                    </div>
                                </div>
                               
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="m-b-10 f-w-600">Date of Birth</p>
                                        <h6 class="text-muted f-w-400"><?=$_SESSION['date_of_birth']?></h6>
                                    </div>
                                    <button style='background:none;border:none;display:flex;align-item:center;margin-left:14rem;'>
                                        <a href="../views/edit_profile.php">
                                            <i class="	far fa-edit p-2" style='font-size:1.5rem'></i>
                                        </a>
                                        <a href="../views/post_view.php">
                                            <i class='fa fa-times-circle-o p-2' style='font-size:1.5rem'></i>
                                        </a>
                                    </button> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>