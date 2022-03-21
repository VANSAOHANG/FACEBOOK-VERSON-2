<?php require_once('../templates/header.php');session_start(); 
$firstname = $_SESSION['firstname']; 
$lastname = $_SESSION['lastname'];
$userEmail = $_SESSION['email_login'];
$country =  $_SESSION['country'];
$dateOfBirth =  $_SESSION['date_of_birth'];
$profile_id =  $_SESSION['profile_id'];
require_once('../templates/navigation_bar.php');
?>
<!-- link to bootstrap 4 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<form action="../controllers/edit_profile.php" method ='post'>
<div class="profile_form ">
    <div class="page-content page-container" id="page-content">
            <div class="padding">
                <div class="row container d-flex justify-content-center align-item-center">
                    <div class="col-md-6 col-md-12" >
                        <div class="card user-card-full">
                            <div class="row m-l-0 m-r-0">
                                <div class="col-sm-5 bg-c-lite-green user-profile">
                                    <div class="card-block text-center text-white">
                                        <div class="m-b-25"> 
                                            <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> 
                                        </div>
                                        <div class="m-b-25" style='display:flex'> 
                                            <textarea name='editFirstName' class='bg-c-lite-green' cols="12" style='resize:none;background:none'><?=$firstname?></textarea>
                                            <textarea name='editLastName' class='bg-c-lite-green' cols="12" style='resize:none;background:none'><?=$lastname?></textarea>
                                        </div>
                                        <p>Web Designer</p>
                                        
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="card-block">
                                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p class="m-b-10 f-w-600">Email</p>
                                                <textarea name='editUserEmail' cols="12" style='resize:none'><?=$userEmail?></textarea>
                                            </div>
                                            <div class="col-sm-12">
                                                <p class="m-b-10 f-w-600">Country</p>
                                                <textarea name='editCountry' cols="12" style='resize:none'><?=$country?></textarea>
                                            </div>
                                        </div>
                                    
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p class="m-b-10 f-w-600">Date of Birth</p>
                                                <textarea name='editDateOfBirth' cols="12" style='resize:none'><?=$dateOfBirth?></textarea>

                                            </div>
                                        
                                        </div>
                                        <div class="btn-post">
                                            <button  class="submit-post" name="submit">SAVE</button>
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
</form>
    