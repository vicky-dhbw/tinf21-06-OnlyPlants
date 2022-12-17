<?php
session_start();
$servername = "localhost";
$username = "root";
$password = '';

$email=$_POST["email"];
$password=$_POST["password"];

/*
echo "$name"."<br>";
echo "$email"."<br>";
echo "$password"."<br>";
echo "$type"."<br>";
var_dump($_POST);
*/

include "connection.php";

if(isset($_POST['submit'])){
    if(strlen($email)!=0&&strlen($password!=0)){

        $sql="select * from users where email='$email' and password='$password'";
        $result=mysqli_query($connection,$sql);
        $row=mysqli_fetch_assoc($result);

        $test_password=$row['password'];
        $test_email=$row['email'];

        if(strcmp($test_password,$password)==0 && strcmp($test_email,$email)==0){

            $sql="select name,id from users where email='$test_email' ";
            $result=mysqli_query($connection,$sql);
            $row=mysqli_fetch_assoc($result);

            $id=$row['id'];
            $name=$row['name'];

            $_SESSION['user']=$name;
            $_SESSION['id']=$id;
            $_SESSION['sign-in-sign-out']=1;
            header ("Location: ../index.php");
            $password=null;
        }
        else{
            header("Location: signin.php");
            $password=null;
        }
    }
    else{
        header("Location: signin.php");
    }
}




