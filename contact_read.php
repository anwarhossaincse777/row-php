<?php
include "includes/db_connection.php";
$id=$_GET['id'];

$update_query="UPDATE contact_info SET status = 2 WHERE id=$id";

mysqli_query($db_connect,$update_query);

header('location:contact_view.php');

?>