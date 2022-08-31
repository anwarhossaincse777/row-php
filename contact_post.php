<?php


        if (empty($_POST['name'])){

            echo "where is your name <br>";
        }



         elseif (empty($_POST['email'])){

            echo "where is your email <br>";

        }





        elseif (empty($_POST['name'])){

            echo "where is your message <br>";


        }


        else{
            require 'includes/db_connection.php';
            $name=$_POST['name'];
            $email=$_POST['email'];
            $message=$_POST['message'];

            $insert_sql="INSERT INTO `contact_info` (`name`, `email`, `message`) VALUES ('$name','$email','$message')";

           $inserted= mysqli_query($db_connect,$insert_sql);

            if ($inserted){

                echo "Data inserted successfully";
                header("location:contact_view.php");

            }else{

                echo "something went wrong";
            }

        }




?>














<?php
//$cars = array("Volvo", "BMW", "Toyota");
//$length = count($cars);
//for ($i = 0; $i <= $length; $i++) {
//
//    if ($cars[$i] == "BMW") {
//        $name = $cars[$i];
//
//        echo "found the car name is : " . $name;
//        break;
//
//
//    } else {
//
//        echo "Not found <br>";
//
//    }
//}
//
//
//?>
