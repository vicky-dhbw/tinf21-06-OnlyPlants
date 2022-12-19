<?php
session_start();
include "connection.php";

$current_user_id=0;
$_SESSION['alert']=0;

if(!isset($_SESSION['id'])){
    header("Location: register.php");
}else{
    $current_user_id=$_SESSION['id'];
    if(isset($_GET['plant_user'])&& isset($_GET['plant_id'])){
        $plant_user=(int)$_GET['plant_user'];
        $plant_id=(int)($_GET['plant_id']);
        if($plant_user==$current_user_id){
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

        /*

        if($userid!=0 && $userid===$plant_user){

            $sql="delete from plants where id=$plant_id";
            $result=mysqli_query($connection,$sql);

            if($result){
                header("Location: plants.php ? showAlert=$showAlert.");
            }
            else{
                die(mysqli_error($connection));
            }
        }*/

        else{

            $_SESSION['alert']=1;
            header("Location: plants.php");
        }
    }
}

/*
    $plant_id=$_GET['plant_id'];
    $plant_user=$_GET['plant_user'];
if(isset($_SESSION['id'])){
    $current_user_id=$_SESSION['id'];
    echo "current user" .$current_user_id;
    echo "<br>";
}

        echo "plant id: ".$plant_id;
        echo "<br>";
        echo "plant user: ".$plant_user;
        echo "<br>";
*/





