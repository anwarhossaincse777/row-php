<?php
require_once '../../auth_check.php';
require_once '../../includes/dashboard/header.php';
require '../../includes/db_connection.php';

$id=$_GET['id'];

$find_query="SELECT * FROM service WHERE id=$id ";

$find_value=mysqli_query($db_connect,$find_query);

$find_finally=mysqli_fetch_assoc($find_value);

?>



<?php


require_once '../../includes/dashboard/sidebar.php';

?>

    <div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 mb-2">

            <h1 class="text-center">Our Services</h1>
            <hr>
        </div>

        <div class="col-md-12">

            <h2>Edit services</h2>
            <hr>

            <form method="post" action="service_update_post.php" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?=$find_finally['id']?>">
                <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-label">Service Icon</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="icon" value="<?=$find_finally['icon']?>" placeholder="Input your icon name">
                </div>


                <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-label">Service Title</label>
                    <input type="text" class="form-control" name="title" id="service title" value="<?=$find_finally['title']?>" placeholder="Put your title name">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="form-label">Service description</label>
                    <textarea class="form-control"  name="description"  rows="4"><?=$find_finally['description']?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>

        </div>


    </div>








<?php
require_once '../../includes/dashboard/footer.php';

?>