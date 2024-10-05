<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){
   $email               = $_POST["email"];
   $username            = $_POST["username"];
   $password            = $_POST["password"];
   $confirm_password    = $_POST["confirm-password"];




   if (trim($email) != ""){
    echo "User email is not empty<br>";
    } else {
    echo "Field email is empty <br>";
    }


   if (trim($username) != ""){
        echo "User username is not empty<br>";
   } else {
    echo "Field username is empty <br>";
   }


   if (trim($password) != ""){
    echo "User password is not empty<br>";
    } else {
    echo "Field password is empty <br>";
    }


   if (trim($confirm_password) != ""){
        echo "User confirm password is not empty<br>";
   } else {
    echo "Field password is empty <br>";
   }

   if ($password == $confirm_password){
        echo "REGISTRATION SUCCESSFUL";
        header("location: demo1.php?success=REGISTRATION SUCCESSFUL");
   }
   else {
        echo "PASSWORD MISMATCH";
        header("location: demo1.php?error=PASSWORD MISMATCH");
        exit;
   }




   
//echo "User email is ". $email. "<br>";
// echo "User username is ". $username. "<br>";
}
?>