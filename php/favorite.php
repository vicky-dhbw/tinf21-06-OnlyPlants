<?php
session_start();
$plant_id=0;
if(isset($_GET['plant_id'])){
    $plant_id=$_GET['plant_id'];
}
$redirectFav="";
if(isset($_GET['redirectFav'])){
    $redirectFav=$_GET['redirectFav'];
}

$user="";
$user=$_SESSION['id'];
$add=true;

include "connection.php";
$sql="select userID from favorites as userID where plantID='$plant_id'";
$result=mysqli_query($connection, $sql);

while ($data=mysqli_fetch_assoc($result)){
    $userInDatabase=$data['userID'];
    if($user== $userInDatabase){
        $add=false;
        break;
    }
}
if($add){
    $sql="insert into favorites(plantID,userID) values('$plant_id','$user')";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        $_SESSION['alert']=5;
        header("Location: $redirectFav");



    }
}else{
    $_SESSION['alert']=6;
    header("Location: plants.php");
}



