<?php

require '../../includes/db_connection.php';
require_once '../../auth_check.php';

$id=$_GET['id'];

$Delete_query="DELETE FROM service WHERE id=$id";

mysqli_query($db_connect,$Delete_query);

header('location:service_view.php');











?>