<?php
if(isset($_POST["submit"])){
    $fullName = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["password_confirmation"];
    

    if (empty($fullName) && empty($email) && empty($password) && empty($passwordRepeat)) {
        echo"All fields are required <br>";}
     if (empty($fullName) && !empty($email) && !empty($password) && !empty($passwordRepeat)) {
        echo"Name isrequired <br>";}
     if (!empty($fullName) && empty($email) && !empty($password) && !empty($passwordRepeat)) {
         echo"email required <br>";}
    if (!empty($fullName) && !empty($email) && empty($password) && !empty($passwordRepeat)) {
         echo"password is required <br>";}
      if (!empty($fullName) && !empty($email) && !empty($password) && empty($passwordRepeat)) {
          echo"Repeat password ";}
                                        

  
if (preg_match("/^\w@emsi.ma{1}$/",$email)==0) {
   echo"Email is not valid a w9 <br>";
   }
   if (strlen($password)<8) {
   echo"Password must be at least 8 charactes long <br>";
   }
   if ($password!==$passwordRepeat) {
    echo"Password does not match";
   }
}
?>