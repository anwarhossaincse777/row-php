<?php

require_once '../../auth_check.php';
require '../../includes/db_connection.php';
$id=$_POST['id'];
$p_name=$_POST['p_name'];
$p_info=$_POST['p_info'];

        if($_FILES['p_image']['name']){


//            delete old photo code start


            $find_picture="SELECT p_image FROM portfolio WHERE id=$id";

           $find_old_pic_name= mysqli_fetch_assoc(mysqli_query($db_connect,$find_picture))['p_image'];
            $old_image_location="../uploads/portfolio".$find_old_pic_name;

            unlink($old_image_location);

            //            delete old photo code end



            $file_name = ($_FILES['p_image']['name']);

            $after_explode = explode(".", $file_name);

            $new_file_extension = end($after_explode);

          $new_file_name=$id.".".$new_file_extension;

               $new_file_location="../uploads/portfolio".$new_file_name;

         move_uploaded_file($file_name = $_FILES['p_image']['tmp_name'],$new_file_location);

            $portfolio_update="UPDATE portfolio SET p_image='$new_file_location' WHERE id=$id ";

            mysqli_query($db_connect,$portfolio_update);

            header('location:portfolio_view.php');
        }

        else{

            $update_query="UPDATE portfolio SET p_name='$p_name', p_info='$p_info'WHERE id=$id";
          mysqli_query($db_connect,$update_query);

          header('location:portfolio_view.php');

        }






?>