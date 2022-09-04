<?php
require 'includes/db_connection.php';

$id=$_GET['id'];


$restore_query="UPDATE contact_info SET delete_status =1 WHERE id=$id";

mysqli_query($db_connect,$restore_query);

header('location:contact_restore_view.php');

?>