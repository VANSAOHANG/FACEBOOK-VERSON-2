<?php 
require_once("../templates/header.php")
?>
<div class="register_container">
    <div class = "form_register">
        <h4>LOGIN ACCOUNT</h4>
        <form action="../views/post_view.php" method="post">
                <div class="profile mt-4 mb-3">
                    <img src="../images/facebook.png" alt="">
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" name="password"placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="btn btn-primary mt-3 w-100"  role="button">LOGIN NOW</button>
        </form>
    </div>
</div>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email_address = 
        $pass = "123";
        $email = $_POST['email'];
        $password = $_POST['password'];
        if (!empty($username) and !empty($password) and $username == $user and $password == $pass) {
            $_SESSION['login'] = $username;
            header('Location: ../index.php');
        } else {
            echo "Error login";
        }
    }
?>
<?php
 require_once("../templates/footer.php")
 ?>
