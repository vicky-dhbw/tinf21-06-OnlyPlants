<?php
session_start();
$_SESSION['plants_page']="plants.php";
$_SESSION['premiumContent_page']="premiumContent.php";
$_SESSION['contact_page']="contact.php";
$_SESSION['home_page']="../index.php";
$_SESSION['signin_page']="signin.php";

if(isset($_SESSION['sign-in-sign-out'])){
    unset($_SESSION['sign-in-sign-out']);
    unset($_SESSION['user']);
    header("Location: ../index.php");
}
else{
    header("Location: signin.php");
}


