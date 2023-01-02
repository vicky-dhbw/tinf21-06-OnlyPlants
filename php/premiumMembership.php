<?php
session_start();
if(isset($_SESSION['sign-in-sign-out'])){
    $currentUserID=$_SESSION['id'];

    include "connection.php";
    $sql="update users set isPremium=1 where id='$currentUserID'";
    $result = mysqli_query($connection, $sql);
    if($result){
        header("Location: premiumContent.php");
    }
}
else{
    header("Location: register.php");
}
