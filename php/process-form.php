<?php
$servername = "localhost";
$username = "root";
$password = '';

$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$type=$_POST["type"];

/*
echo "$name"."<br>";
echo "$email"."<br>";
echo "$password"."<br>";
echo "$type"."<br>";
var_dump($_POST);
*/

try {
    $conn = new PDO("mysql:host=$servername;dbname=OnlyPlants", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
if(strlen($name)!=0&&strlen($password)!=0&&strlen($email)!=0){

    $sql="INSERT INTO users(name,email,password,type,isPremium) VALUES ('$name','$email','$password','$type',0)";
    $conn->exec($sql);
    //echo "data taken";
    $name=null;
    $email=null;
    $password=null;

    header("Location: signin.php");
}
else{
    header("Location: register.php");
}









