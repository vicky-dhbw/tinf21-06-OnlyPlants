<?php
session_start();
$user="";
$user=$_SESSION['id'];
$plant_id=0;
if(isset($_GET['plant_id'])){
    $plant_id=$_GET['plant_id'];
}

include "connection.php";
$sql="delete from favorites where plantID='$plant_id' and userID='$user'";
$result=mysqli_query($connection,$sql);

header("Location: profile.php");