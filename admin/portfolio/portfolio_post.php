<?php

require_once '../../auth_check.php';
require '../../includes/db_connection.php';

$file_name = ($_FILES['p_image']['name']);

$after_explode = explode(".", $file_name);

$file_extension = end($after_explode);

$accepted_extension = array('jpg', 'jpeg', 'png', "JPG", "PNG", "JPENG");

$find_value = in_array($file_extension, $accepted_extension);

if ($find_value) {

    if ($file_name = $_FILES['p_image']['size'] <= 500000){

        $p_name=$_POST['p_name'];
        $p_info=$_POST['p_info'];

        $insert_query="INSERT INTO portfolio(p_name,p_info) VALUES('$p_name','$p_info')";
        mysqli_query($db_connect,$insert_query);

       $new_generate_last_id=mysqli_insert_id($db_connect);

        $new_fileName=$new_generate_last_id.".".$file_extension;

        $new_location="../uploads/portfolio".$new_fileName;

         move_uploaded_file($file_name = $_FILES['p_image']['tmp_name'],$new_location);

        $portfolio_update="UPDATE portfolio SET p_image='$new_location' WHERE id=$new_generate_last_id ";

        mysqli_query($db_connect,$portfolio_update);

        header('location:portfolio_view.php');

    }else{

        echo "your file is more than 2MB";
    }
} else {


    echo "Your file format not accepted";
}


?>