<?php require_once('../templates/header.php');session_start(); 
$firstname = $_SESSION['firstname']; 
$lastname = $_SESSION['lastname'];
$userEmail = $_SESSION['email_login'];
$country =  $_SESSION['country'];
$dateOfBirth =  $_SESSION['date_of_birth'];
require_once('../templates/navigation_bar.php');
?>
<!-- link to bootstrap 4 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<div class="profile_form ">
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center align-item-center">
            <div class="col-xl-12 col-md-7" >
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-5 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25" > 
                                    <img src="../images/man.png" class="img-radius" alt="User-Profile-Image" style='width:64px;height:64px'> 
                                </div>
                                <h6 class="f-w-600"><?= $firstname.' '.$lastname?></h6>
                                <p>Web Designer</p>
                                
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400"><?=$userEmail?></h6>
                                    </div>
                                    <div class="col-sm-12">
                                        <p class="m-b-10 f-w-600">Country</p>
                                        <h6 class="text-muted f-w-400"><?=$country?></h6>
                                    </div>
                                </div>
                               
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="m-b-10 f-w-600">Date of Birth</p>
                                        <h6 class="text-muted f-w-400"><?=$dateOfBirth?></h6>
                                    </div>
                                   
                                </div>
                                <button style='background:none;border:none;display:flex;justify-content:space-between;align-item:center'>
                                <a href="../views/edit_profile.php">
                                   <i class="	far fa-edit " style='font-size:1.5rem'></i>
                                </a>
                                    <i class='fa fa-times-circle-o' style='font-size:1.5rem'></i>
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