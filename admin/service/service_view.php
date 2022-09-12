<?php
require_once '../../auth_check.php';

$title="Service";
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

        <?php
        if (isset($_SESSION['no'])):
           ?>

            <div class="alert">

               <?=$_SESSION['no']?>

            </div>


           <?php
       endif;

       unset($_SESSION['no']);
        ?>


        <div class="col-md-8">
            <h2>Services List</h2>
          <h3>

              Active: <?php

                 $select_count="SELECT COUNT('*') as active FROM service WHERE status=1";

                 $count_query=mysqli_query($db_connect,$select_count);

                  $active=mysqli_fetch_assoc($count_query);

             echo $active['active'];



              ?>


          </h3>


            <hr>

            <table id="service_id" class="table table-striped table-bordered" style="width:100%">
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

                $select_query="SELECT * FROM service ";

                $item=mysqli_query($db_connect,$select_query);

                foreach ($item as $index=>$items){

                ?>
                <tr>
                    <th scope="row"><?= $index+1?></th>
                    <th scope="row">  <i class="<?=$items['icon']?>"></i></th>
                    <th scope="row"><?= $items['title']?></th>
                    <th scope="row"><?= $items['description']?></th>
                    <th>

                      <?php
                      if ($items['status']==1):

                      ?>
                          <a href="service_status.php?id=<?=$items['id']?>&btn=inactive" type="button" class="btn btn-success btn-sm">Inactive</a>

                        <?php

                        else:

                          ?>

                            <a href="service_status.php?id=<?=$items['id']?>&btn=active" type="button" class="btn btn-dribbble btn-sm">Active</a>
                        <?php
                        endif;

                        ?>
                        <a href="service_edit.php?id=<?=$items['id']?>" type="button" class="btn btn-info btn-sm">Edit</a>
                        <button  type="button"  class="btn btn-danger btn-sm delete_btn" value="service_delete.php?id=<?=$items['id']?>">Delete</button>

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


        <script type="text/javascript">


            $(document).ready(function () {
                $('#service_id').DataTable({
                    pageLength : 5,
                    lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'ALL']]

                });
            });



        </script>



<!--        sweetalert-->

        <script type="text/javascript">

            $(document).ready(function(){

                $('.delete_btn').click(function (){

                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {

                            var delete_button_value= $(this).val();

                            window.location.href=delete_button_value;


                        }
                    })

                });
            });


        </script>