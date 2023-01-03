<?php
session_start();
include "connection.php";

$current_user_id=0;
$_SESSION['alert']=0;
$type="";
if(isset($_SESSION['type'])){
    $type=$_SESSION['type'];
}
$redirectDelete="";

if(isset($_GET['redirectDelete'])){
    $redirectDelete=$_GET['redirectDelete'];
}

if(!isset($_SESSION['id'])){
    $_SESSION['alert']=1;
    header("Location: $redirectDelete");
}else{
    $current_user_id=$_SESSION['id'];
    if(isset($_GET['plant_user'])&& isset($_GET['plant_id'])){
        $plant_user=(int)$_GET['plant_user'];
        $plant_id=(int)($_GET['plant_id']);
        if($plant_user==$current_user_id|| $type=='admin'){
            $sql="delete from plants where id=$plant_id";
            $result=mysqli_query($connection,$sql);
            if($result){
                if($redirectDelete=="plants.php"){
                    $_SESSION['alert']=2;
                    header("Location: plants.php");
                }
                elseif ($redirectDelete=="premiumContent.php"){
                    $_SESSION['alert']=2;
                    header("Location: premiumContent.php");
                }
                else{
                    header("Location: profile.php");
                }
            }
            else{
                die(mysqli_error($connection));
            }
        }
        else{
            $_SESSION['alert']=1;
            header("Location: $redirectDelete");
        }
    }
}







