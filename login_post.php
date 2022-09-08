<?php
session_start();
require 'includes/db_connection.php';
$email=$_POST['email'];
$password=md5($_POST['password']);

$find_query="SELECT * FROM users where email='$email' AND password='$password'";

 $find_user=mysqli_query($db_connect,$find_query);

 if ($find_user->num_rows==1){

     $_SESSION['login']='login successful;';  //set session data
     $_SESSION['email']=$email;  //set session data
     header('location:admin/dashboard/index.php');

 }
 else{

     $_SESSION['error']=' Your email and password is wrong';

     header('location:dashboard.php');

 }







?>