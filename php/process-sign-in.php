<?php
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

try{
    $conn = new PDO("mysql:host=$servername;dbname=OnlyPlants", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


if(isset($_POST['submit'])){
    session_start();
    if(strlen($email)!=0&&strlen($password!=0)){
        $stmt = $conn->prepare("SELECT password FROM users WHERE email=?");
        $stmt->execute([$email]);
        $test_password = $stmt->fetch();

        if(strcmp($test_password[0],$password)==0){

            $stmt= $conn->prepare("SELECT name FROM users WHERE email=?");
            $stmt->execute([$email]);
            $test_name = $stmt->fetch();
            $_SESSION['user']=$test_name[0];
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




