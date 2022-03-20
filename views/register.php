<?php 
require_once("../templates/header.php")
?>
<div class="register_container">
    <div class = "form_register">
        <h4>RESGISTER ACCOUNT</h4>
        <form action="../controllers/register.php" method="post">
                <div class="profile mt-4 mb-3">
                    <img src="../images/facebook.png" alt="">
                </div>
                <a href=""></a>
                <div class="row g-2 mb-3">
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" name="firstname" placeholder="First name">
                            <label for="floatingInputGrid">First name</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" name="lastname" placeholder="Last name">
                            <label for="floatingInputGrid">Last name</label>
                        </div>
                    </div>
        
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" name="password"placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Country" name="country" placeholder="Country">
                    <label for="Country">Country</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="Date" class="form-control" id="date" name="date">
                    <label for="date">Date of birth</label>
                </div>
                <a href="signin.php">
                <button class="btn btn-primary mt-3 w-100"  role="button">REGISTER NOW</button>
                </a>
        </form>
    </div>
</div>
<?php
 require_once("../templates/footer.php")
?>
