
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
                            <input type="text" class="form-control" id="floatingInput" onkeyup="if (/[^|a-zA-Z0-9]+/g.test(this.value)) this.value = this.value.replace(/[^|a-zA-Z0-9]+/g,'')" name="firstname" placeholder="First name" required>
                            <label for="floatingInputGrid">First name</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" name="lastname" placeholder="Last name" required>
                            <label for="floatingInputGrid">Last name</label>
                        </div>
                    </div>
        
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" name="password"placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Country" name="country" placeholder="Country" required>
                    <label for="Country">Country</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="Date" class="form-control" id="date" name="date" required>
                    <label for="date">Date of birth</label>
                </div>
                <a href="signin.php">
                <button  class="btn btn-primary mt-3 w-100"  role="button" onsubmit="return loginValidation()">REGISTER NOW</button>
                </a>
        </form>
    </div>
</div>