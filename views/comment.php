<?php require_once('../templates/header.php') ?>

<form action="">
    <div  class="post-view">
        <div class="profile">
                    <div class="img_profile"> 
                        <img src="../images/man.png" alt="">
                    </div>
                    <div class="user-name">
                        <h6>Phearun Chhun</h6>
                    </div>
                    <div style='border:1.5px solid black; width:100%;display:flex'>
                            <label for="comment" ></label>
                            <input type="text" class='w-100 p-1 border-0' style='outline:none'  id='comment' placeholder='write your comment here....'>
                            <button type='submit' style='background:none;border:none'>
                                <img src="../images/send.png" style='width:35px; height:35px; margin:auto' alt="">
                            </button>
                    </div>
        </div>
    </div>
</form>

<?php require_once('../templates/footer.php') ?>