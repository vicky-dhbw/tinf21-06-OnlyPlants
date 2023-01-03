<?php
session_start();
include "connection.php";

$id=0;  // guest user dummy id = 0
$commenter="";
$comment="";

if(isset($_GET['submit'])){
    $plant_id=$_GET['plant_id'];
    $comment=$_GET['comment'];
}
if(isset($_SESSION['id'])){
    $id=$_SESSION['id'];
}


if(isset($_SESSION['user'])){
    $commenter=$_SESSION['user'];
}
else{
    if(isset($_GET['submit'])){
        $commenter=$_GET['guestName'];
    }
}
/*
echo "Plant ID: " .$plant_id;
echo "<br>";
echo "Commenter: " .$commenter;
echo "<br>";
echo "Commenter ID: " .$id;
echo "<br>";
echo "Comment: " .$comment;
*/
$redirect="";

if(isset($_GET['redirect'])){
    $redirect=$_GET['redirect'];
}

$sql="insert into comments(plantID,commenter,commenterID,comment) values($plant_id,'$commenter',$id,'$comment')";
$result = mysqli_query($connection, $sql);
if ($result) {
    header("Location: viewPlant.php? plant_id=$plant_id & redirect=$redirect");
}