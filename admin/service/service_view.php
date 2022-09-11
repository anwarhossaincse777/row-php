<?php
require_once '../../auth_check.php';
require_once '../../includes/dashboard/header.php';
require '../../includes/db_connection.php';
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

        <div class="col-md-8">
            <h2>Services List</h2>
            <hr>

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Serial No</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php

                $select_query="SELECT * FROM service";

                $item=mysqli_query($db_connect,$select_query);

                foreach ($item as $index=>$items){

                ?>
                <tr>
                    <th scope="row"><?= $index+1?></th>
                    <th scope="row">  <i class="<?=$items['icon']?>"></i></th>
                    <th scope="row"><?= $items['title']?></th>
                    <th scope="row"><?= $items['description']?></th>
                    <th>

                        <a href="service_edit.php?id=<?=$items['id']?>" type="button" class="btn btn-info btn-sm">Edit</a>
                        <a href="se" type="button" class="btn btn-danger btn-sm">Delete</a>

                    </th>


                </tr>

                <?php

                }
                ?>
                </tbody>
            </table>

        </div>

        <div class="col-md-4">

            <h2>Add services</h2>
            <hr>

            <form method="post" action="service_post.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlInput1" class="form-label">Service Icon</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="icon" placeholder="Input your icon name">
            </div>


                <div class="form-group">
                <label for="exampleFormControlInput1" class="form-label">Service Title</label>
                <input type="text" class="form-control" name="title" id="service title" placeholder="Put your title name">
            </div>

                <div class="form-group">
                <label for="exampleFormControlTextarea1" class="form-label">Service description</label>
                <textarea class="form-control"  name="description" rows="4"></textarea>
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>


    </div>








<?php
require_once '../../includes/dashboard/footer.php';

?>