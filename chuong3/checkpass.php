<?php
$password = $_POST['pass'];
$cpassword = $_POST['cpass'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
    if($password == $cpassword){
        echo "Thank $fullname!, please confirm registration in your email: $email";
    }else echo "Incorrect confirm password";
?>