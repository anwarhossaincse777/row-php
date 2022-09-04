<?php

require 'includes/header.php';
require 'includes/db_connection.php';

$read_query = "SELECT * FROM contact_info where delete_status=2";


$datas=mysqli_query($db_connect,$read_query);

?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">


            <div class="card">
                <div class="card-header bg-success">

                    <h1 class="text-center">Contact Restore </h1>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Serial No</th>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Message</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>


                        <?php

                        foreach ($datas as $index=>$data){



                            ?>
                            <tr class="">
                                <td scope="row"><?php echo $index+1?></td>
                                <td scope="row"><?php echo $data['id']?></td>
                                <td scope="row"><?php echo $data["name"]?></td>
                                <td scope="row"><?=$data["email"]?></td>
                                <td scope="row"><?=$data["message"]?></td>
                                <td scope="row">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="contact_restore.php?id=<?=$data["id"]?>" type="button" class="btn btn-secondary">Restore</a>
                                        <a  href="contact_hard_delete.php?id=<?=$data['id']?>" type="button" class="btn btn-danger">Parmanent Delete</a>
                                    </div>

                                </td>

                            </tr>

                            <?php

                        }
                        ?>

                        <?php

                        if ($datas->num_rows==0){
                            ?>

                            <tr><td colspan="6" class="text-center text-danger" >Nothing to  Found</td></tr>
                            <?php
                        }

                        ?>

                        </tbody>

                    </table>

                </div>
            </div>


        </div>

    </div>

</div>





<?php
require 'includes/footer.php'

?>
