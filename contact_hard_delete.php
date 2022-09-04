<?php

include 'includes/db_connection.php';
$id=$_GET['id'];

$delete_query="DELETE FROM contact_info WHERE id=$id";

mysqli_query($db_connect,$delete_query);

header('location:contact_restore_view.php');



?>