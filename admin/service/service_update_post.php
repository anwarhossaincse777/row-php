<?php
require '../../includes/db_connection.php';
require_once '../../auth_check.php';


$id=$_POST['id'];
$icon=$_POST['icon'];
$title=$_POST['title'];
$description=$_POST['description'];
$insert_query="UPDATE service
SET icon = '$icon', title = '$title',description='$description' WHERE id=$id";

mysqli_query($db_connect,$insert_query);

header('location:service_view.php');


?>