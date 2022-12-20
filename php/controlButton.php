<?php
session_start();

if(isset($_SESSION['sign-in-sign-out'])){
    unset($_SESSION['sign-in-sign-out']);
    unset($_SESSION['user']);
    unset($_SESSION['id']);
    unset($_SESSION['type']);
    session_destroy();
    header("Location: ../index.php");
}
else{
    header("Location: signin.php");
}