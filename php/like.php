<?php

$plant_id=0;
if(isset($_GET['plant_id'])){
    $plant_id=$_GET['plant_id'];
}
$no_of_views=0;
if(isset($_GET['no_of_views'])){
    $no_of_views=$_GET['no_of_views'];
    $no_of_views--;
}

$redirect="";
if(isset($_GET['redirect'])){
    $redirect=$_GET['redirect'];
}

include "connection.php";
$sql="select * from plants where id='$plant_id'";
$result = mysqli_query($connection, $sql);
$data = mysqli_fetch_assoc($result);

$no_of_likes=$data['likes'];
if($no_of_likes==NULL){
    $no_of_likes=1;
}
else{
    $no_of_likes++;
}

$sql="update plants set likes=$no_of_likes where id='$plant_id'";
$result=mysqli_query($connection,$sql);

$sql="update plants set views=$no_of_views where id='$plant_id'";
$result=mysqli_query($connection,$sql);
if($result){
    header("Location: viewPlant.php? plant_id=$plant_id & redirect=$redirect");
}else{
    die(mysqli_error($connection));
}