<?php
require_once '../../auth_check.php';
$title="Portfolio";
require_once '../../includes/dashboard/header.php';

require '../../includes/db_connection.php';

$id=$_GET['id'];
$find_query="SELECT * FROM portfolio WHERE id=$id";

$find_value=mysqli_query($db_connect,$find_query);

$after_assoc=mysqli_fetch_assoc($find_value);

?>


<?php


require_once '../../includes/dashboard/sidebar.php';

?>

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">

    <h2>Edit portfolio</h2>
    <hr>

    <form method="post" action="portfolio_update_post.php" enctype="multipart/form-data">

        <input type="hidden" value="<?=$after_assoc['id']?>" name="id">
        <div class="form-group">
            <label for="exampleFormControlInput1" class="form-label">Portfolio Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?=$after_assoc['p_name']?>" name="p_name" placeholder="Input your icon name">
        </div>


        <div class="form-group">
            <label for="exampleFormControlInput1" class="form-label">Portfolio Information</label>
            <textarea type="text" class="form-control"  name="p_info" rows="6" placeholder="Put your title name"><?=$after_assoc['p_info']?></textarea>

        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1" class="form-label">Old Portfolio Image</label>
            <br>
            <img class="w-50 h-50" src="<?=$after_assoc['p_image']?>" alt="">

            <br>
            <br>

            <label for="exampleFormControlTextarea1" class="form-label">Portfolio Image</label>
            <input type="file" class="form-control"  name="p_image" >
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

            </div>

            </div>




<?php


require_once '../../includes/dashboard/footer.php';

?>






