<?php

$plant_id=0;
if(isset($_GET['plant_id'])){
    $plant_id=$_GET['plant_id'];
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

if($result){
    header("Location: viewPlant.php? plant_id=$plant_id");
}else{
    die(mysqli_error($connection));
}