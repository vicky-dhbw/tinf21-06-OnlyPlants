<?php
session_start();
include "connection.php";

$current_user_id=0;
$_SESSION['alert']=0;
$type="";
if(isset($_SESSION['type'])){
    $type=$_SESSION['type'];
}


if(!isset($_SESSION['id'])){
    $_SESSION['alert']=1;
    header("Location: plants.php");
}else{
    $current_user_id=$_SESSION['id'];
    if(isset($_GET['plant_user'])&& isset($_GET['plant_id'])){
        $plant_user=(int)$_GET['plant_user'];
        $plant_id=(int)($_GET['plant_id']);
        if($plant_user==$current_user_id|| $type=='admin'){
            $sql="delete from plants where id=$plant_id";
            $result=mysqli_query($connection,$sql);
            if($result){
                $_SESSION['alert']=2;
                header("Location: plants.php");
            }
            else{
                die(mysqli_error($connection));
            }
        }
        else{
            $_SESSION['alert']=1;
            header("Location: plants.php");
        }
    }
}







