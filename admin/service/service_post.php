<?php
require '../../includes/db_connection.php';
require_once '../../auth_check.php';
$icon=$_POST['icon'];
$title=$_POST['title'];
$description=$_POST['description'];

$insert_query="INSERT INTO service (icon, title, description)
VALUES ('$icon', '$title', '$description')";

mysqli_query($db_connect,$insert_query);

header('location:service_view.php');


?>