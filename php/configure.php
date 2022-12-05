<?php
$servername = "localhost";
$username = "root";
$password = '';


$conn = new PDO("mysql:host=$servername", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "CREATE DATABASE IF NOT EXISTS OnlyPlants";
$conn->exec($sql);
echo "Database created successfully<br>";

$sql=null;

$conn = new PDO("mysql:host=$servername;dbname=OnlyPlants", $username, $password);
// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS users(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  name VARCHAR(30) NOT NULL,
  email VARCHAR(30) NOT NULL,
  password VARCHAR(30) NOT NULL,
  type VARCHAR(30) NOT NULL,
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";

// use exec() because no results are returned
$conn->exec($sql);
echo "users table created successfully";


$sql = "SELECT email FROM users WHERE name='Admin';";
if($conn->query($sql)==null){
    $sql="INSERT INTO users(name,email,password,type) VALUES ('Admin','admin@admin.de','admin123','admin')";
    $conn->exec($sql);
}

$sql = "SELECT email FROM users WHERE name='User';";
if($conn->query($sql)==null){
    $sql="INSERT INTO users(name,email,password,type) VALUES ('User','user@user.de','user123','user')";
    $conn->exec($sql);
}

echo "data taken";







