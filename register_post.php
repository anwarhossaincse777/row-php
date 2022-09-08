<?php

require 'includes/db_connection.php';
$name=$_POST['name'];
$email=$_POST['email'];
$password=md5($_POST['password']);


$check_user_query="SELECT * FROM users where email='$email'";


$checking_dublicat= mysqli_query($db_connect,$check_user_query);

if ($checking_dublicat->num_rows==1){


    echo "this email is already used";

  
}

else{

    $insert_user="INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name','$email','$password')";

    $inserted= mysqli_query($db_connect,$insert_user);

}





?>
