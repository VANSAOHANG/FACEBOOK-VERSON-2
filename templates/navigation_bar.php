
<div class="button_navigation_bar ">
        <div class="search">
            <ul class=" search-box">
                <div class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">
                            <img src="../images/facebook.png" alt="">
                        </a>
                    </li>
                </div>
                <div class="write_something">
                    <input type="text" id="write_something"  placeholder="Search here">
                </div>
            </ul>
            <ul class="nav nav-pills menu w-50">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="post_view.php">
                        <i class="material-icons md-36 text-primary">home</i>
                    </a>
                </li>
               
            </ul>
           
                <div class="profiles">
                    <a href="../views/profile_form.php" style='text-decoration:none;display:flex;justify-content:space-between'>
                    <div class="img_profile"> 
                        <img src="../images/man.png" alt="">
                    </div>
                      <div class="user-name mx-3 mt-3" >
                          <h6><?php echo $firstname." ".$lastname?></h6>
                      </div>
                  </a>
                </div>
                <a href="../controllers/sign_out.php">
                    <i class="fas fa-sign-out-alt fa-2x mx-4 text-primary"></i>
                </a>
        </div>
</div>
