<?php
session_start();
require '../../includes/db_connection.php';
$old_password=md5($_POST['old_password']);

$new_password=md5($_POST['new_password']);

$email=$_SESSION['email'];

if (empty($_POST['old_password']&& $_POST['new_password']&& $_POST['confirm_password'])){

    echo "you should fill the from properly";

}

else{

    if ($_POST['old_password']==$_POST['new_password']){

        echo "Your old password and new password can not be same";

    }
    else{



        if ($_POST['new_password']==$_POST['confirm_password']){

            $select_query="SELECT COUNT(*) AS total_User FROM users where email='$email' AND password='$old_password'";

            $find_user=mysqli_fetch_assoc(mysqli_query($db_connect,$select_query));

            if($find_user['total_User']==1){

                $password_update_query="UPDATE users SET password ='$new_password' WHERE email='$email'";

                mysqli_query($db_connect,$password_update_query);

                echo "Your password successfully change";

            }


            else{

                echo "Your old password is not match";
            }


        }else{

            echo "Your passowrd is not match";


        }



    }






}










?>