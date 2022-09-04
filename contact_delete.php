<?php
include 'includes/db_connection.php';

    $id=$_GET['id'];

    $soft_delete_query="UPDATE contact_info SET delete_status =2 WHERE id=$id";
    mysqli_query($db_connect,$soft_delete_query);
    header('location:contact_view.php');
?>