<?php
require_once '../../auth_check.php';


$title="Profile ";
require_once '../../includes/dashboard/header.php';

require '../../includes/db_connection.php';
?>



<?php


require_once '../../includes/dashboard/sidebar.php';

?>


<div class="content-wrapper">
            <div class="row">
              <div class="col-md-6 m-auto">
                  <form method="post" action="profile_post.php"  enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="exampleInputPassword1">Old Password</label>
                          <input type="password" class="form-control" name="old_password" id="exampleInputPassword1">
                      </div>

                      <div class="form-group">
                          <label for="exampleInputPassword1">New Password</label>
                          <input type="password" class="form-control" name="new_password" id="exampleInputPassword1">
                      </div>


                      <div class="form-group">
                          <label for="exampleInputPassword1">confirm Password</label>
                          <input type="password" class="form-control" name="confirm_password" id="exampleInputPassword1">
                      </div>

                      <button type="submit" class="btn btn-primary">Change Password</button>
                  </form>

              </div>

            </div>



    <?php
    require_once '../../includes/dashboard/footer.php';

    ?>




