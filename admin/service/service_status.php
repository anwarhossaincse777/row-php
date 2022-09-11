<?php

session_start();
require '../../includes/db_connection.php';
require_once '../../auth_check.php';


$id=$_GET['id'];


$select_count="SELECT COUNT('*') as active FROM service WHERE status=1";

$count_query=mysqli_query($db_connect,$select_count);

$active=mysqli_fetch_assoc($count_query);



$activeInactive=$_GET['btn'];

if ($activeInactive=='active'){

    if ($active['active']<6){
        $update_query="UPDATE service SET status =1 WHERE id=$id";
    }else{
        $_SESSION['no']="can not be possible already updated more maximum 6";
    }

}

else{

    $update_query="UPDATE service SET status =2 WHERE id=$id";

}

mysqli_query($db_connect,$update_query);

header('location:service_view.php');







?>