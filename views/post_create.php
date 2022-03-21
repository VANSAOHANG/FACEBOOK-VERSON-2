<!-- create post -->

<?php require_once('../templates/header.php');session_start(); 
$firstname = $_SESSION['firstname']; 
$lastname = $_SESSION['lastname'];
require_once('../templates/navigation_bar.php');
?>

<form action="../controllers/create_post.php" method='post' enctype="multipart/form-data">

    <div class="create-post">
        <div class="header">
            <div class="content">
                <span>Create post</span>
            </div>
            <div class="btn-close">
                <button class="close-post bg-white  border-0">
                    <i class='fa fa-times-circle-o'></i>
                </button>
            </div>
        </div>
         <div class="profile">
            <div class="img_profile"> 
                <img src="../images/man.png" alt="">
            </div>
            <div class="user-name">
                <h6><?php echo $firstname." ".$lastname?></h6>
            </div>
        </div>
        <textarea class="p-2"  cols="12"  name='text_post' placeholder="write something"></textarea>
        <img class='w-100 ' src=""  alt="" id ="img-post">
        <div class="function_post">
                <div class="feature_photo">
                    <div class="img_post">
                        <label for="image" style='color:black'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16" style='color:green'>
                                <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z"/>
                            </svg>
                            <input type="file" style="display:none" id="image" onchange="loadFile(event)"  name="uploadfile"/>PHOTO
                        </label>
                    </div>
                </div>
        </div>
    </div>
    <div class="btn-post">
        <button class="submit-post" name="submit">POST</button>
    </div>
</form>
<?php require_once("../templates/footer.php");?>