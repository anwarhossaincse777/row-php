<?php

require 'includes/header.php';
require 'includes/db_connection.php';

      $read_query = "SELECT * FROM contact_info";


      $datas=mysqli_query($db_connect,$read_query);


      //Total message
      $total_message_query= "SELECT COUNT('message') as total_message FROM contact_info";

      $total_message = mysqli_fetch_assoc(mysqli_query($db_connect, $total_message_query));




           //     total read

            $total_read_count_query="SELECT COUNT(*) as read_message FROM contact_info WHERE status=2";

            $total_read_query=mysqli_query($db_connect,$total_read_count_query);
             $total_read = mysqli_fetch_assoc($total_read_query);






            //total unread

               $total_count_unread_query= "SELECT COUNT(*) as unread_message FROM contact_info WHERE status=1";

                $total_unread_query=mysqli_query($db_connect, $total_count_unread_query);

               $total_unread= mysqli_fetch_assoc($total_unread_query);


?>

    <div class="container">
        <div class="row">

            <div class="col-md-4">


                <h1 class="text-center">Total Message:<?=


                $total_message['total_message'];

                    ?></h1>

            </div>

            <div class="col-md-4">

                <h1 class="text-center">Total Read:<?= $total_read['read_message'] ?></h1>
            </div>


            <div class="col-md-4">

                <h1 class="text-center">Total Unread:<?=
                $total_unread['unread_message'];
                    ?></h1>
            </div>

            <div class="col-md-12 mt-4">


                <div class="card">
                    <div class="card-header bg-success">

                        <h1 class="text-center">All User Data</h1>
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
                            <tr class="
                                 <?php
                                if ($data['status']==1){

                                    echo "bg-info";

                                }


                                ?>

                                ">
                                <td scope="row"><?php echo $index+1?></td>
                                <td scope="row"><?php echo $data['id']?></td>
                                <td scope="row"><?php echo $data["name"]?></td>
                                <td scope="row"><?=$data["email"]?></td>
                                <td scope="row"><?=$data["message"]?></td>
                                <td scope="row">

                                    <?php

                                    if ($data['status']==1){

                                        ?>
                                        <a href="contact_read.php?id=<?=$data["id"]?>"  class="btn btn-success">Mark as read</a>

                                    <?php } ?>


                                    <a href="contact_delete.php?id=<?=$data["id"]?>"  class="btn btn-danger">Delete</a>

                                </td>
                                <td>
                                    <?php

                                    if ($data['status']==2){

                                    ?>
                                    <span>&#10003;</span>

                                    <?php } ?>
                                </td>

                            </tr>

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