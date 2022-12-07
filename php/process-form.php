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
if(isset($name,$password,$email)){
    $sql="INSERT INTO users(name,email,password,type) VALUES ('$name','$email','$password','$type')";
    $conn->exec($sql);
    //echo "data taken";
}

$name=null;
$email=null;
$password=null;

include_once "signin.php";





